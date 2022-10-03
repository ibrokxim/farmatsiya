<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="public/favicon.ico">
    <script defer src="{{ asset('public/js/all.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/css/mvp/bootstrap.min.css') }}" type="text/css"> 
    <link rel="stylesheet" href="{{ asset('public/css/mvp/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/fonts/stylesheet.css') }}"> 
    <link  href="{{ asset('public/css/mvp/animate.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/mvp/main.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('../public/css/auth/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>
     @keyframes load {
    0%{
/*         font-size: 10px; */
/* 				font-weight: 400; */
				filter: blur(5px);
				letter-spacing: 3px;
        }
    100%{
/*         opacity: 1; */
/*         font-size: 12px; */
/* 				font-weight:600; */
/* 				filter: blur(0); */
        }
}

.animate {
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    background: white;
    width: 100%;
    height: 100vh;
    top: 0;
    z-index: 99;
    margin: auto;
    font-family: Helvetica, sans-serif, Arial;
    animation: load 1.2s infinite 0s ease-in-out; 
    animation-direction: alternate;
    text-shadow: 0 0 1px white;
}
body, html{
	height: 96vh;
	background-color: white;
	color: black;
}
</style>
</head>
<body ng-controller="">

    @yield('content')        
</body>
</html>