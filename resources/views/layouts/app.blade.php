<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>landing-page</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--<script src="{{ secure_asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">-->
    
    <link href="{{ asset('css/fuentes.css') }}" rel="stylesheet">

    <!--<link href="{{ secure_asset('css/fuentes.css') }}" rel="stylesheet">-->

        <style>
            html, body{
                color: #fff;
                height: 100%;
                margin:0;
                display: flex;
                flex-direction: column;

            }

            #app{
                height: 100%;
            }


        </style>
</head>
<body>
    <div id="app">

            @yield('content')
       
    </div>
</body>
</html>
