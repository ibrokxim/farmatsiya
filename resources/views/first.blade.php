@extends('layout.app')
@section('title', 'Фармация и фармакология')


@section('content')
<header>
  <div class="w-100 bg-white">
  <nav class="navbar navbar-expand-lg navbar-light py-2">
      <div class="container-lg">
        <a class="navbar-brand d-flex align-items-center gap-2" href="../">
          <img src="{{ asset('public/img/logo.svg')}}" width="55" height="55" alt="">
          <div class="header_title" >FARMATSIYA VA FARMAKOLOGIYA<br>
            ФАРМАЦИЯ И ФАРМАКОЛОГИЯ<br>
            PHARMACY & PHARMACOLOGY</div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <div>
            <a href="{{ route('setlocale', ['locale' => 'en']) }}" style="color: #171E83; text-decoration:none;" ><strong style="font-size: 25px;">EN</strong></a>
        
            <a href="{{ route('setlocale', ['locale' => 'uz']) }}" style="color: #171E83; text-decoration:none;"><strong style="font-size: 25px;border-left:3px solid ; padding-left:10px;">UZ</strong></a>
        
            <a href="{{ route('setlocale', ['locale' => 'ru']) }}" style="color: #171E83; text-decoration:none;"><strong style="font-size: 25px;border-left:3px solid ; padding-left:10px;">RU</strong></a>
        
           
          </div>    
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-lg-none">
            <li class="nav-item">
              <a class="nav-link" href="https://www.farmatsiya.uz/public/files/Инструкция для авторов.pdf" download>
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="{{ asset('public/img/icons/info-circle.svg')}}" alt="">
                  <div class="pages_name">@lang('header.instruction ')<br> @lang('header.author')</div>
                </div></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.farmatsiya.uz/public/files/Форма заполнения.docx" download>
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="{{ asset('public/img/icons/import.svg')}}" width="40" alt="">
                  <div class="pages_name">@lang('header.form')<br> @lang('header.for_author')</div>
                </div></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts/index">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="{{ asset('public/img/icons/book.svg')}}" alt="">
                  <div class="pages_name">{{__('header.published')}}<br> {{__('header.states')}}</div>
                </div></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="container-fluid py-5 d-none d-lg-block">
    <div class="row">
      <div class="col-12 d-flex">
        <div class="d-flex pages_line">
          <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="https://www.farmatsiya.uz/public/files/Инструкция для авторов.pdf" download>
            <img src="{{ asset('public/img/icons/info-circle.svg')}}" alt="">
            <div class="pages_name">@lang('header.instruction ')<br> @lang('header.author')</div>
          </a>
          <a class="d-flex flex-column align-items-center text-center text-decoration-none"href="https://www.farmatsiya.uz/public/files/Форма заполнения.docx" download>
            <img src="{{ asset('public/img/icons/import.svg')}}"  alt="">
            <div class="pages_name">{{__('header.form')}}<br> {{__('header.for_author')}}</div>
          </a>
          <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/posts/index">
              <img src="{{ asset('public/img/icons/book.svg')}}" alt="">
              <div class="pages_name">{{__('header.published')}}<br> {{__('header.states')}}</div>
          </a>
        </div>


        @guest('web')
                  <div class="align-item-center d-flex justify-content-end flex-grow-1 gap-3 mt-4">          
        <a class="form_register " href="{{ route('login') }}" style="font-size: 20px;
          
          font-weight: 700;
          background: none;
          color: #171E83;
          padding: 17px 30px;
          border: 2px solid #171E83;
          border-radius: 50px;
          text-decoration: none;">@lang('rauth.sign_up')</a>
       
        <a class="form_register  " href="{{ route('register') }}" style="font-size: 20px;
         
          
          font-weight: 700;
          background: none;
          color: #171E83;
          padding: 17px 30px;
          border: 2px solid #171E83;
          border-radius: 50px;
          text-decoration: none;">@lang('rauth.sign_in')</a>
        </div>


        @endguest
        <div class="sm:mb-0 self-center">
            @auth("web")
             <div class="align-item-center mt-4">
              <a href="{{ route('logout') }}" class="form_register mt-4 " style="font-size: 20px;
                  margin-left: 750px;
                  font-weight: 700;
                  background: none;
                  color: #171E83;
                  padding: 13px 30px;
                  border: 2px solid #171E83;
                  border-radius: 50px;
                  text-decoration: none;">@lang('rauth.viyti')</a>
              </div>
                  @endauth
           
               
        </div>
         
      </div>
      </div>
    </div>
  </div>
</header>
<main>
  <section>
  <h2 class="animate">Фармация и Фармакология</h2>

    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-12 d-flex flex-column">
          <h1 class="main_title mb-4">{{__('messages.collegs')}}</h1>
          <p class="main_text">{{__('messages.for_fun')}}</p>
          <p class="main_text">{{__('messages.napravlenie')}}</p>
          <div class="w-100 d-flex justify-content-around pb-3 flex-column flex-lg-row">
            <div>
              <div class="main_el">{{__('messages.anal_chem')}}</div>
              <div class="main_el">{{__('messages.bioximiya')}}</div>
              <div class="main_el">{{__('messages.biologiya')}}</div>
              <div class="main_el">{{__('messages.biotexnologiya')}}</div>
              <div class="main_el">{{__('messages.clinic')}}</div>
              <div class="main_el">{{__('messages.cosm')}}</div>
              <div class="main_el">{{__('messages.mikrobiolog')}}</div>
              <div class="main_el">{{__('messages.nanotech')}}</div>
              <div class="main_el">{{__('messages.nanotox')}}</div>
              <div class="main_el">{{__('messages.radio')}}</div>
            </div>
            <div>
              <div class="main_el">{{__('messages.toxic')}}</div>
              <div class="main_el">{{__('messages.farm_help')}}</div>
              <div class="main_el">{{__('messages.farm_chem')}}</div>
              <div class="main_el">{{__('messages.farm_tech')}}</div>
              <div class="main_el">{{__('messages.farm_menej')}}</div>
              <div class="main_el">{{__('messages.farmeko')}}</div>
              <div class="main_el">{{__('messages.farmokog')}}</div>
              <div class="main_el">{{__('messages.farmolog')}}</div>
              <div class="main_el">{{__('messages.farm_edu')}}</div>
              <div class="main_el">{{__('messages.farm_docx')}}</div>
            </div>
          </div>
          <p class="main_text">{{__('messages.nabor')}}</p>
          <p class="main_text">{{__('messages.period')}}</p>
          <p class="main_text">{{__('messages.pochta')}}<a class="text-black fw-bold text-decoration-none" href="mailto:journal@ftti.uz">journal@ftti.uz</a></p>
          <p class="main_text">{{__('messages.trebovaniya')}}</p>
        </div>
      </div>
    </div>
  </section>
</main>

 <script>
   window.addEventListener('DOMContentLoaded', () => {
    const animate = document.querySelector('.animate')
    
    setTimeout(() => {
        animate.style.opacity = '0'
        setTimeout(() => {
            animate.style.display = 'none'
        }, 500)
    }, 2000)
})
 </script>
<footer class="py-4">
  <div class="container-fluid" >
    <div class="row">
      <div class="col-12 d-flex justify-content-end gap-2 gap-md-5 align-items-md-center flex-column flex-md-row">
        <div class="footer_text"> {{__('messages.contact')}} </div>
        <a class="footer_links" href="tel:+998903255807">+998 90 325 58 07</a>
        <a class="footer_links" href="mailto:journal@ftti.uz">journal@ftti.uz</a>
      </div>
    </div>
  </div>
</footer>
<script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>
<script src="public/js/wow.min.js"></script>
@endsection