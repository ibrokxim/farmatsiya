<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="../public/favicon.ico">
    <script defer src="{{ asset('public/js/mvp/all.min.js')}}"></script> 
    <link rel="stylesheet" href="{{ asset('public/css/mvp/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('public/css/mvp/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mvp/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/submited.css') }}">
   
</head>
<body>
    @yield('content')        
</body>
</html>