<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Text;
use App\Profile;


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
    public function create()
    {
        return view('profiles.create');
        
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'thema' => 'required|max:20',
            'answer' => 'required|max:50',
        ]);
        
        $request->user()->profile()->create([
            'thema' => $request->thema,
            'answer' => $request->answer,
        ]);
        
        return redirect('/');
            
    }
    public function edit($id)
    {
        $profile = Profile::find($id);
        
        if (\Auth::id() === $profile->user_id) {
            return view('profiles.edit', [
                'profile' => $profile,
            ]);
        } else {
            return redirect('/');
        }
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'thema' => 'required',
            'answer' => 'required',
        ]);

        if (\Auth::id() == $request->user()->id) {
            
            $profile = Profile::find($id);
            
            $profile->update([
                'thema' => $request->thema,
                'answer' => $request->answer,
            ]);
        
        }
        return redirect('/');
    }
    public function destroy($id)
    {
        $profile = Profile::where('id', $id)->first();
        
        if(\Auth::id() === $profile->user_id) {
            $profile->delete();
        }
        return redirect()->back();
    }
}
