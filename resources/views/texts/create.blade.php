@extends('layouts.app')

@section('content')
   <h1>新規テキスト作成ページ</h1>
    <div class="profile-text">
        {!! Form::open(['route' => 'texts.store'], ['user' => Auth::user()]) !!}
            <div class="profile-textarea form-group">
                {!! Form::label('content', 'text') !!}
                {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'row' => '2']) !!}
                </div>
                
                <div class="form-group text-button">
                {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-lg']) !!}
            </div>
        {!! Form::close() !!}
            
    </div>
@endsection