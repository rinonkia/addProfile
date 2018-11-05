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
                @if (Auth::id() == $user->id)
                    <div class="profile-text">
                        {!! Form::open() !!}
                            <div class="profile-textarea form-group">
                                {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'row' => '2']) !!}
                                </div>
                                
                                <div class="form-group text-button">
                                {!! Form::submit('変更', ['class' => 'btn btn-primary btn-lg']) !!}
                            </div>
                        {!! Form::close() !!}
                            
                    </div>
                @endif
            </div>
            
        </div>
    </div>
</div>

@endsection