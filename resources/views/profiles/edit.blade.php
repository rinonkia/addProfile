@extends('layouts.app')

@section('content')
    
    <div class="create-edit columns-pack col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        <h3>カラム編集ページ</h3>
    
        {!! Form::model($profile, ['route' => ['profiles.update', $profile->id], 'method' => 'put']) !!}
            
            <div class="form-groupe">
                {!! Form::label('thema', 'テーマ') !!}
                {!! Form::text('thema', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-groupe">
                {!! Form::label('answer', 'アンサー') !!}
                {!! Form::text('answer', null, ['class' => 'form-control']) !!}
            </div>
            <div class="button column-create-edit-button">
                {!! Form::submit('登録', ['class' => 'btn btn-default']) !!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection