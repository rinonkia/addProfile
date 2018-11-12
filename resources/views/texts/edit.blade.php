@extends('layouts.app')

@section('content')
    <div class="profile-text col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        <h1>テキスト変更ページ</h1>

        {!! Form::model($text, ['route' => ['texts.update', $text->id], 'method' => 'put']) !!}
            <div class="profile-textarea form-group">
                {!! Form::label('content', 'text') !!}
                {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'row' => '2']) !!}
                </div>
                
                <div class="form-group text-button text-center">
                {!! Form::submit('更新', ['class' => 'btn btn-primary btn-lg']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection