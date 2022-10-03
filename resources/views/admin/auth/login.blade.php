@extends('layout.app')

@section('title', 'Авторизация')

@section('content')
<form method="POST" action="{{ route('admin.login_process') }}" class="space-y-5 mt-5">
    @csrf
<body class="h-100 d-flex flex-column">
  <header>
    <div class="bg-white d-lg-block">
      <div class="container-fluid py-4">
        <div class="row">
          <a class="col-12 d-flex align-items-center gap-3 justify-content-center text-decoration-none" href="../../">
            <div class="header_title">Журнал фармацевтического университета</div>
          </a>
         
            <div class="col-12 d-flex justify-content-center flex-column align-items-center">
                <img src="../public/img/logo.svg" alt="" height="100" weight="75">
            </div>  
        </div>

      </div>
    </div>
</header>
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
            
          <button class="form_btn mt-4" type="submit">Войти</button>
        </form>
        
      </div>
    </div>
  </div>
</body>
<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/6pQzWaE1NP-gB4FrqRViKjM-/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-NhK24afP2ps2kR47SpbjdlSWZpU+9az+xsX7PjdZR0ZdVmpAbm1ugPMJoAg10oa+"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcpYMcUAAAAABdvDAhywpZtEuep7aQcyDLaPUR_"></script>
<script>
        function getReCaptcha() {
            grecaptcha.ready(function() {
                grecaptcha.execute('6LcpYMcUAAAAABdvDAhywpZtEuep7aQcyDLaPUR_', {action: 'login'}).then(function(token) {
                    if (token) {
                        document.getElementById('g-recaptcha-response').value = token;
                    }
                    document.getElementById('login-btn').disabled = false;
                });
            });
        }
        getReCaptcha();
        setInterval(function(){
            getReCaptcha();
        }, 150000);        
</script>
<div>
    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
        <div class="grecaptcha-logo">
            <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcpYMcUAAAAABdvDAhywpZtEuep7aQcyDLaPUR_&amp;co=aHR0cHM6Ly9sbXMudHVpdC51ejo0NDM.&amp;hl=en&amp;v=6pQzWaE1NP-gB4FrqRViKjM-&amp;size=invisible&amp;cb=e6myoy4xgtcr" width="256" height="60" role="presentation" name="a-ry8xz91wd2cx" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">
            </iframe>
    </div>
        <div class="grecaptcha-error"></div>
        <textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
        </textarea>
</div>
<iframe style="display: none;"></iframe>
</div>
@endsection

