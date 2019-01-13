@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Login</h1>
    </div>
    
    <div class="row">
        <div class=" col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'login.post']) !!}
            
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-lg']) !!}
                
            {!! Form::close() !!}
            
            {!! link_to_route('signup.get', '今からプロフィールを作る') !!}

        </div>
    </div>
@endsection