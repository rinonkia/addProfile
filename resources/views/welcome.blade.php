@extends('layouts.app')

@section('content')
        <div class="center welcome-blade">
            <div class="text-center">
                <h1>addProfile</h1>
                <p>簡単なプロフィールサイトです！</p>
                <div class="welcome-button">
                    {!! link_to_route('signup.get', '今からプロフィールを作ってみる', null, ['class' => 'btn btn-success']) !!}
                </div>
                <div class="login-button">
                    {!! link_to_route('login', 'ログイン', null, ['class' => 'btn btn-primary']) !!}
                </div>
                <div class="welcomeMessage">
                    @include('welcometext')
                </div>
            </div>
        </div>
@endsection