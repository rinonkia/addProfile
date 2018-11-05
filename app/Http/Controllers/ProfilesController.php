<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    
    public function index() 
    {
        
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $profiles = $user->profile()->orderBy('created_at')->get();
            
            $data = [
                'user' => $user,
                'profiles' => $profiles,
            ];
            
            return view('profiles.index', $data);
            
        } else {
            return view('welcome');
        }
    }
}
