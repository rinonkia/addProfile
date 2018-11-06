@extends('layouts.app')

@section('content')
   <h1>テキスト変更ページ</h1>
    <div class="profile-text">
        {!! Form::model($text, ['route' => ['texts.update', $text->user_id'], 'method' => 'put') !!}
            <div class="profile-textarea form-group">
                {!! Form::label('content', 'text') !!}
                {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'row' => '2']) !!}
                </div>
                
                <div class="form-group text-button">
                {!! Form::submit('更新', ['class' => 'btn btn-primary btn-lg']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection