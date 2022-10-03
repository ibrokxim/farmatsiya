@extends('layout.app_login')

@section('title', 'Восстановление пароля')

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
    
           
        </div>
    </div>
    <main class="flex-grow-1 pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center flex-column align-items-center">
      <form method="POST" action="{{ route('forgot_process') }}" class="space-y-5 mt-5 border rounded px-3 @error('email') border-red-500 @enderror">
        @csrf
          <input class="form_input" name="email" type="text" placeholder="Email">
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <br>
            <div>
                <a href="{{ route('login') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Вспомнил пароль</a>
            </div>
          <button class="form_btn mt-4" type="submit">@lang('rauth.recover')</button>
        </form>
        
      
     
      </div>
    </div>
  </div>
@endsection
