@extends('layouts.app')

@section('content')

    <div class="create-edit columns-pack col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        <h3>カラム新規作成ページ</h3>
        
        {!! Form::open(['route' => 'profiles.store']) !!}
            
            <div class="form-groupe">
                {!! Form::label('thema', 'テーマ') !!}
                {!! Form::text('thema', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-groupe">
                {!! Form::label('answer', 'アンサー') !!}
                {!! Form::text('answer', null, ['class' => 'form-control']) !!}
            </div>
            <div class="column-create-edit-button button">
                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-lg']) !!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection