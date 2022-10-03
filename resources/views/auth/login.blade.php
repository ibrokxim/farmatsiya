@extends('layout.app')
@section('title', 'Авторизация')
@section('content')
<form method="POST" action="{{ route('login_process') }}" class="space-y-5 mt-5">
    @csrf
<body class="h-100 d-flex flex-column">
  <header>
    <div class="bg-white d-lg-block">
      <div class="container-fluid py-4">
        <div class="row">
          <a class="col-12 d-flex align-items-center gap-3 justify-content-center text-decoration-none" href="../../">
            <div class="header_title">{{__('rauth.jurnal')}}</div>
          </a>
        </div>
      </div>
    </div>
</header>
<div class="col-12 d-flex justify-content-center flex-column align-items-center mb-2">
                <img src="../public/img/logo.svg" alt="" height="100" weight="75">
            </div> 
<main class="flex-grow-1 pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center flex-column align-items-center">
        <form class="d-flex flex-column align-items-center w-100 gap-3" style="max-width: 426px;" action="">
          <div class="form_title mb-4">Login</div>
          <input class="form_input" name="email" type="text" placeholder="email">
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <br>
          <input class="form_input" name="password" type="password" placeholder="Пароль">
            @error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
          <button class="form_btn mt-4" type="submit">@lang('rauth.sign_up')</button>
        </form>
        
        <div class="line mt-5 mb-3"></div>
        <a class="auth_link" href="{{ route('register') }}">@lang('rauth.sign_in')</a>
        <br>
        <a class="auth_link" href="{{ route('forgot') }}">@lang('rauth.forget')</a>
      </div>
    </div>
  </div>
@endsection
<br>
