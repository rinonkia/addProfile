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
            $myUrl = url("/users/{$user->name}");
            
            $data = [
                'user' => $user,
                'profiles' => $profiles,
                'text' => $text,
                'myUrl' => $myUrl,
            ];
            
            $data += $this->counts($user);
            
            return view('profiles.index', $data);
            
        } else {
            return view('welcome');
        }
    }
    
    public function show($name)
    {
        if (User::where('name', $name)->first() == null){
            
            return redirect('/')->withErrors('ユーザーが存在しません');
        }
        
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
    
    /**
     * ファイルのアップロード処理
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MINRタイプを指定
                'mimes:jpeg,png',
                // 最小縦横120px, 最大縦横400px
                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
            ]
        ]);
        /*
        
        if ($request->file('file')->isValid([])) {
            $filename = $request->file->store('public/avatar');
            
            $user = User::find(auth()->id());
            $user->avatar_filename = basename($filename);
            $user->save();
            
            return redirect('/')->with('success', '保存しました');
        }else {
            return redirect()->back()->withInput()
            ->withErrors(['file' => '画像がアップロードされていないか、形式が対応していません']);
        }
        
        */
        $user = User::find(auth()->id());
        
        if ($user->image_url != env('IMAGE_DEFAULT')) {
            
            $oldImagePath= "images/" . basename($user->image_url);
            
            $disk = \Storage::disk('s3');
            $disk->delete($oldImagePath);
        }
        
        
        
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            
            $path = \Storage::disk('s3')->putFile('images', $image, 'public');
            $url = \Storage::disk('s3')->url($path);
            $user->image_url = $url;
            $user->save();
            
            return redirect('/')->with('success', '保存しました');
        } else {
            return redirect()->back()->withInput()
            ->withErrors(['file' => '画像がアップロードされていないか、形式が対応していません']);
        }
        
        
    }
}
