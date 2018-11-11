
{!! Form::open(['route' => 'upload.post', 'method' => 'post', 'files' => true]) !!}
    
     {{--成功時のメッセージ--}}
     @if  (session('success'))
         <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="form-group">
        @if (Auth::user()->avatar_filename)
            <p>
                <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" alt="avatar" class="img-circle" width="150" height="150"/>
            </p>
        @endif
        
        {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
        {!! Form::file('file') !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}
    </div>
{!! Form::close() !!}