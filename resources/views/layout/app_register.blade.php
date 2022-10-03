<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="../public/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script data-require="angular.js@1.4.8" data-semver="1.4.8" src="https://code.angularjs.org/1.4.8/angular.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script defer src="{{ asset('../public/js/mvp/all.min.js')}}"></script> 
    <script defer src="{{ asset('../public/js/all.min.js')}}"></script> <!--load all styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../public/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../public/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('../public/css/mvp/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('../public/css/mvp/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../public/fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('../public/css/auth/style.css') }}">
    {{-- <style type="text/css">
        .header_title{
    font-weight: 700;
    font-size: 24px;
    text-transform: uppercase;
    color: #171E83;
    line-height: 120%;
}

.main_title{
    font-weight: 700;
    font-size: 36px;
    color: #000000;
}

.main_text{
    font-weight: 400;
    font-size: 24px;
    color: #000000;
}


    /* FORM */



.form_title{
    font-weight: 700;
    font-size: 24px;
    text-align: center;
    color: #000000;
}

.form_input{
    background: #F3F4FF;
    border-radius: 10px;
    border: none;
    box-shadow: none;
    padding: 19px 26px;
    width: 100%;
    max-width: 426px;
}

.form_input::placeholder{
    font-weight: 400;
    font-size: 18px;
    color: #000000;
    opacity: 0.5;
}

.form_btn{
    font-weight: 700;
    font-size: 18px;
    color: #FFFFFF;
    padding: 18px 40px;
    background: #171E83;
    border-radius: 10px;
    border: none;
}

.form_label{
    font-weight: 400;
    font-size: 18px;
    color: #000000;
    width: 200px;
    text-align: end;
}

.line{
    max-width: 426px;
    width: 100%;
    height: 1px;
    background: rgb(255,255,255);
    background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(23,30,131,1) 50%, rgba(255,255,255,1) 100%);
}

.auth_link{
    font-weight: 500;
    font-size: 20px;
    text-align: center;
    color: #171E83;
    text-decoration: none;
}
.form-select.step4{
  width: 100%;
  max-width: 426px;
  font-weight: 400;
  font-size: 18px;
  color:rgba(0, 0, 0, .5);
}

.warn{
    background: #FFFFCC;
    border-radius: 10px;
    padding: 19px 57px;
    font-weight: 400;
    font-size: 16px;
    color: #000000;
}
.form-check-input {
    width: 24px;
    height:24px;
    margin-top: 0.25em;
    vertical-align: top;
    background-color: transparent;
    border: 2px solid rgba(23, 30, 131, 1);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
}
.form-check-input:checked {
    background-color: rgba(23, 30, 131, 1);
    border-color: rgba(23, 30, 131, 1);
}
.sign-up_block{
    border: 2px solid rgba(23, 30, 131, 0.5);
    border-radius: 10px;
    padding: 20px;
    max-width: 750px;
    width: 100%;
}
.sign-up_block_title{
    font-weight: 700;
    font-size: 16px;
    color: #171E83;
}
.sign-up_block_text{
    font-weight: 400;
    font-size: 13px;
    color: #222222;
    line-height: 15px;
}
.sign-up_line{
    border-top: 2px solid rgba(23, 30, 131, 0.5);
}
@media (max-width: 768px){
    .main_title{
        font-size: 24px;
        margin-top: 100px;
    }
    .main_text{
        font-size: 16px;
    }
    .header_title{
        font-size:18px;
        text-align: center;
    }
    .captcha{
        width: 100px;
    }
}
    </style> --}}
</head>
<body ng-controller="countryCtrl">
    @yield('content')        
</body>
</html>