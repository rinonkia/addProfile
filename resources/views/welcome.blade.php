@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the addProfile</h1>
            {!! link_to_route('signup.get', '今からプロフィールを作ってみる') !!}
        </div>
    </div>

@endsection