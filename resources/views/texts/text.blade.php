@if (count($text) > 0)
    <div class="text-content">
        <p>{!! nl2br(e($text->content)) !!}</p>
    </div>
@endif

@if (Auth::id() == $user->id)
    <div class="text-control-button">
    @if (count($text) > 0)
        更新 削除
    @else
        {!! link_to_route('texts.create', 'テキストを追加する') !!}
    @endif
    </div>
@endif

