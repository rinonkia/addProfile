@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="mainn">
        <div class="main-head">
            <div class="myname">{{ $user->name }}</div>
            <div class="myphoto">
                <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" alt="avatar" class="img-circle" width="150" height="150" />
            </div>
            <div class="links">
                <a href="#"></a>
            </div>
        </div>
        <div class="main-body text-center">
            <div class="apanel-heading">
                <h3>Profile</h3>
            </div>
            <div class="apanel-body">
                <div class="myprofile-columns">
                    @foreach($profiles as $profile)
                        <div class="column show-column">
                            <p class="column-thema text-muted">
                                {{ $profile->thema }}
                            </p>
                            <text class="column-answer-show">
                                {{ $profile->answer }}
                            </text>
                        </div>
                    @endforeach
                </div>
            </div>
            @if (count($text) > 0)
                <div class="show-text">
                    <p>{!! nl2br(e($text->content)) !!}</p>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>

@endsection