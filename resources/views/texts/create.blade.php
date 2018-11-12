@extends('layouts.app')

@section('content')

    <div class="profile-text col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        <h1>新規テキスト作成ページ</h1>
    
        {!! Form::open(['route' => 'texts.store']) !!}
            <div class="profile-textarea form-group">
                {!! Form::label('content', 'text') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control', 'row' => '2']) !!}
                </div>
                
                <div class="form-group text-button">
                {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-lg']) !!}
            </div>
        {!! Form::close() !!}
            
    </div>
@endsection