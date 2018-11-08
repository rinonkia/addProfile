@if (count($text) > 0)
    <div class="text-content">
        <p>{!! nl2br(e($text->content)) !!}</p>
    </div>
@endif

@if (Auth::id() == $user->id)
    <div class="text-control-button">
    @if (count($text) > 0)
        <ul>
            <li>
                {!! Form::open(['route' => ['texts.destroy', $user->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除しちゃう', ['class' => 'btn btn-danger btn-md']) !!}
                {!! Form::close() !!}
            </li>
            <li>
                {!! link_to_route('texts.edit', '編集する', ['id' => $user->id], ['class' => 'btn btn-primary btn-md']) !!}
            </li>
        </ul>
    @else
        <div class="text-muted">
            <p>現在テキストはありません</p>
        </div>
        {!! link_to_route('texts.create', 'テキストを追加する', null, ['class' => 'btn btn-default']) !!}
    @endif
    </div>
@endif

