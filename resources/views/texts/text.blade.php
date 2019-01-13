@if ($text != null)
    <div class="text-content">
        <p>{!! nl2br(e($text->content)) !!}</p>
    </div>
@endif

@if (Auth::id() == $user->id)
    <div class="text-control-button">
    @if ($text != null)
        <ul>
            <li>
                {!! Form::open(['route' => ['texts.destroy', $user->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-md']) !!}
                {!! Form::close() !!}
            </li>
            <li>
                {!! link_to_route('texts.edit', '編集', ['id' => $text->id], ['class' => 'btn btn-default btn-md']) !!}
            </li>
        </ul>
    @else
        <div class="text-muted">
            <p>現在テキストはありません</p>
        </div>
        {!! link_to_route('texts.create', 'テキストを追加', null, ['class' => 'btn btn-default']) !!}
    @endif
    </div>
@endif

