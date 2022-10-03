<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="../public/favicon.ico">
    <script defer src="{{ asset('js/mvp/all.min.js')}}"></script> 
    <link rel="stylesheet" href="{{ asset('public/css/mvp/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('public/css/mvp/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mvp/animate.css') }}">
    <style type="text/css">
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
    width: 50%;
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
    padding: 20px 40px;
    background: #171E83;
    border-radius: 10px;
    border: none;
}
.form-register {
    font-size: 20px;
    font-weight: 700;
    color: #171E83;
    padding: 17px 30px;
    border: 2px solid #171E83;
    border-radius: 50px;
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



/* INFO */

.info{
    background: #FFFFFF;
    padding: 30px;
}

.info_title{
    font-weight: 700;
    font-size: 24px;
    color: #171E83;
}


.info_text{
    font-weight: 400;
    font-size: 14px;
    color: #222222;
    margin-top: 3px;
}

.info_name{
    font-weight: 700;
    font-size: 16px;
    color: #171E83;
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
    .info{
        padding: 15px;
    }
}

    </style>
    <!--  -->
</head>
<body>
    @yield('content')        
</body>
</html>