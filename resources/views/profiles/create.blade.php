@extends('layouts.app')

@section('content')

    <div class="columns-pack col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        <h1>カラム新規作成ページ</h1>
        
        {!! Form::open(['route' => 'profiles.store']) !!}
            
            <div class="form-groupe">
                {!! Form::label('thema', 'Thema') !!}
                {!! Form::text('thema', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-groupe">
                {!! Form::label('answer', 'Answer') !!}
                {!! Form::text('answer', null, ['class' => 'form-control']) !!}
            </div>
            <div class="button">
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection