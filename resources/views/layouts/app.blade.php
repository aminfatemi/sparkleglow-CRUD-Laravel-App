<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> refs/remotes/origin/master
=======
>>>>>>> 18cd3147... Authentican & relationships
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<<<<<<< HEAD
<<<<<<< HEAD
    <div id="app">
        @include('inc.navbar')
        <div class="container">
=======
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <!-- Amin's Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ config('app.name', 'SparkleGlow') }}</title>
    </head>
    <body>
        @include('inc/navbar')
        <div class="container"> 
>>>>>>> b1c5cb4d... CRUD create/store with validation
            @include('inc.messages')
            @yield('content')
        </div>
=======
    <div id="app" class="container">       
        @include('inc.navbar')
        <div>
            @include('inc.messages')
            @yield('content')
        </div>        
>>>>>>> refs/remotes/origin/master
=======
    <div id="app" class="container">       
        @include('inc.navbar')
        <div>
            @include('inc.messages')
            @yield('content')
        </div>        
>>>>>>> 18cd3147... Authentican & relationships
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<<<<<<< HEAD
<<<<<<< HEAD
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
=======
>>>>>>> refs/remotes/origin/master
=======
>>>>>>> 18cd3147... Authentican & relationships
</body>
</html>
