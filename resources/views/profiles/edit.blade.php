@extends('layouts.app')

@section('content')

    <h1>カラム編集ページ</h1>
    <div class="columns-pack">
        {!! Form::model($profile, ['route' => ['profiles.update', $profile->id], 'method' => 'put']) !!}
            
            <div class="form-groupe">
                {!! Form::label('thema', 'Thema') !!}
                {!! Form::text('thema', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-groupe">
                {!! Form::label('answer', 'Answer') !!}
                {!! Form::text('answer', null, ['class' => 'form-control']) !!}
            </div>
            <div class="button">
                {!! Form::submit('登録する', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection