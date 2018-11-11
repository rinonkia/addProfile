@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="mainn">
        <div class="main-head">
            <div class="myname">{{ Auth::user()->name }}</div>
            <div class="myphoto">
                @include('profiles.image')
            </div>
            <div class="links">
                <a href="#"></a>
            </div>
        </div>
        
        <div class="main-body text-center">
            <div class="apanel-heading">
                <h3>Profile</h3>
            </div>
            <div class="apanel-body">
                <div class="profile-column">
                    @include('profiles.columns', ['profiles' => $profiles ])
                    
                    @if (Auth::id() == $user->id )
                        <div class="columns-create-button">
                            {!! link_to_route('profiles.create', 'カラムを追加する', null, ['class' => 'btn btn-default']) !!}
                        </div>
                    @endif
                </div>
            </div>
            <div class="profile-textarea">
                @include('texts.text', ['text', $text ])
            </div>
            <div class="url-form">
                <p>自分のプロフィールページ</p>
                <input id="copyTarget" type="text" value="{{ $myUrl }}" readonly>
                <button onclick="copyToClipboard()">Copy URL</button>
            </div>
        </div>
    </div>
</div>
<script>
    function copyToClipboard() {
        var copyTarget = document.getElementById("copyTarget");
        
        copyTarget.select();
        
        document.execCommand("Copy");
    }
</script>

@endsection