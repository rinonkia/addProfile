<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>addProfile</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        @if(app('env') =='production')
            <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @endif
        
    </head>
    <body>
        @include('commons.navbar')
        

        <div class="container">
            @include('commons.error_messages')
            
            @yield('content')
        </div>
        
        @include('commons.footer')
    
    </body>
</html>