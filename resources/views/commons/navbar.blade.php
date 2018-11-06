<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">addProfile</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li><a href="{{ route('users.show', Auth::user()->name) }}">マイプロフィール</a></li>
                        <li><a href="/">プロフィールの編集</a></li>
                        <li><a href="{{ route('logout.get')  }}">ログアウト</a></li> 
                    @else
                        <li><a href="{{ route('signup.get') }}">新規加入</a></li>
                        <li><a href="{{ route('login')}}">ログイン</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>