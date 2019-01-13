
{!! Form::open(['route' => 'upload.post', 'method' => 'post', 'files' => true]) !!}
    
     {{--成功時のメッセージ--}}
     @if  (session('success'))
         <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="form-group">
        @if (Auth::user()->image_url)
            <p>
                <img src="{{ Auth::user()->image_url }}" alt="avatar" class="img-circle" width="150" height="150"/>
            </p>
        @endif
        
        <p class="img-warning">画像幅: 120px~400px<br>形式: jpg,png</p>
        
        {!! Form::label('file', 'プロフィール画像', ['class' => 'control-label']) !!}
        {!! Form::file('file') !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}
    </div>
{!! Form::close() !!}