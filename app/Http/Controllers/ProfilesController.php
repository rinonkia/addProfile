<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Text;


class ProfilesController extends Controller
{
    
    public function index() 
    {
        
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $profiles = $user->profile()->orderBy('created_at')->get();
            $text = Text::where('user_id', $user->id)->first();
            
            $data = [
                'user' => $user,
                'profiles' => $profiles,
                'text' => $text,
            ];
            
            return view('profiles.index', $data);
            
        } else {
            return view('welcome');
        }
    }
    
    public function show($name)
    {
        $user = User::where('name', $name)->first();
        $text = Text::where('user_id', $user->id)->first();
        $profiles = $user->profile()->orderBy('created_at')->get();
        
        $data = [
            'user' => $user,
            'text' => $text,
            'profiles' => $profiles,
        ];
            
        return view('users.show', $data);
        
    }
}
