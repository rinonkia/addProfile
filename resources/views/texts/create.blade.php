@extends('layouts.app')

@section('content')

    <div class="create-edit profile-text col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        <h3>新規テキスト作成ページ</h3>
    
        {!! Form::open(['route' => 'texts.store']) !!}
            <div class="profile-textarea form-group">
                {!! Form::label('content', '自己紹介テキスト') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control', 'row' => '2']) !!}
            </div>
                
            <div class="text-create-edit-button form-group text-button">
                {!! Form::submit('投稿', ['class' => 'btn btn-default btn-lg']) !!}
            </div>
        {!! Form::close() !!}
            
    </div>
@endsection