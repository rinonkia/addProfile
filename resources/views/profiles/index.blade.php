@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="mainn">
        <div class="main-head">
            <div class="myphoto">
                <img src="{{ Gravatar::src(Auth::user()->email, 150) . '&d=mm' }}" alt="" class="img-circle">
            </div>
            <div class="myname">{{ Auth::user()->name }}</div>
            <div class="links">
                <a href="#"></a>
            </div>
        </div>
        
        <div class="main-body text-center">
            <div class="apanel-heading">
                <h3>Profile</h3>
            </div>
            <div class="apanel-body">
                <div class="profile-column">
                    @include('profiles.columns', ['profiles' => $profiles ])
                </div>
            </div>
            <div class="profile-textarea">
                @include('texts.text', ['text', $text ])
            </div>
        </div>
    </div>
</div>

@endsection