
<div class="myprofile-columns ">
    @foreach($profiles as $profile)
        <div class="column make-column">
            <p class="column-thema text-muted">
                {{ $profile->thema }}
            </p>
            <text class="column-answer">
                {{ $profile->answer }}
            </text>
            <div class="columns-control-button">
                @if(Auth::id() == $profile->user_id)
                    <ul>
                        <li>
                            {!! Form::open(['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn btn-danger btn-md btn-sm']) !!}
                            {!! Form::close() !!}
                        </li>
                        <li>
                            {!! link_to_route('profiles.edit', '変更', ['id' => $profile->id], ['class' => 'btn btn-primary btn-sm']) !!}
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    @endforeach
</div>