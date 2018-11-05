@extends('layouts.app')

@section('content')

    <h1>カラム新規作成ページ</h1>
    
    {!! Form::open(['route', 'profiles.create']) !!}
        
        <div class="form-groupe">
            {!! Form::label('thema', 'Thema') !!}
            {!! Form::text('tema', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-groupe">
            {!! Form::label('answer', 'Answer') !!}
            {!! Form::text('answer', null, ['class' => 'form-control']) !!}
        </div>
    
        {!! Form::submit('登録', ['class' => 'btn btn-primary') !!}
    
    {!! Form::close() !!}
        

@endsection