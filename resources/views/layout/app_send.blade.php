<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="public/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="{{ asset('public/js/all.min.js')}}"></script> 
    <link rel="stylesheet" type="text/css" href="{{ asset('public/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/mvp/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('public/css/mvp/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mvp/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/new/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/message.css') }}">
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->
{{-- 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> --}}

    <style type="text/css">
        a {
            text-decoration: none;
        }
</style>
</head>
<body>
    @yield('content') 
    <script>
    document.addEventListener("DOMContentLoaded", function() { // событие загрузки страницы

// выбираем на странице все элементы типа textarea и input
document.querySelectorAll('textarea, input').forEach(function(e) {
    // если данные значения уже записаны в sessionStorage, то вставляем их в поля формы
    // путём этого мы как раз берём данные из памяти браузера, если страница была случайно перезагружена
    if(e.value === '') e.value = window.sessionStorage.getItem(e.name, e.value);
    // на событие ввода данных (включая вставку с помощью мыши) вешаем обработчик
    e.addEventListener('input', function() {
        // и записываем в sessionStorage данные, в качестве имени используя атрибут name поля элемента ввода
        window.sessionStorage.setItem(e.name, e.value);
    })
})

}); 
</script>       
</body>
</html>