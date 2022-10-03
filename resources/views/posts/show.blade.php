@extends('layout.app')
@section('title', "Опубликованные статьи")

@section('content')
<style text="style/css">a:hover {
    background-color: #E6E6FA; /* Цвет фона под ссылкой */ 
    transition: 0.7s;
   } </style>
<header>
    <div class="w-100 bg-white">
    <nav class="navbar navbar-expand-lg navbar-light py-2">
        <div class="container-lg">
          <a class="navbar-brand d-flex align-items-center gap-2" href="/welcome">
            <img src="/public/img/logo.svg" width="55" height="55" alt="">
            <div class="header_title" >FARMATSIYA VA FARMAKOLOGIYA<br>
              ФАРМАЦИЯ И ФАРМАКОЛОГИЯ<br>
              PHARMACY & PHARMACOLOGY</div>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex align-items-center gap-3 justify-content-center">
            @auth('web')
                <div class="align-item-center mt-4">          
          <a class="form_register mt-4 bg-white" href="/profile" style="font-size: 20px;
            font-weight: 700;
            background: none;
            color: #171E83;
            padding: 13px 30px;
            border: 2px solid #171E83;
            border-radius: 50px;
            text-decoration: none;">{{__('header.profil')}}</a></div>
                <div class="align-item-center mt-4">
                <a href="{{ route('logout') }}" class="form_register mt-4 bg-white" style="font-size: 20px;
                    font-weight: 700;
                    margin-right:-100px;
                    background: none;
                    color: #171E83;
                    padding: 13px 30px;
                    border: 2px solid #171E83;
                    border-radius: 50px;
                    text-decoration: none;">@lang('rauth.viyti')</a>
                </div>
                @endauth
            
            </div>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-lg-none">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <div class="d-flex flex-column align-items-center text-center">
                  <img src="/public/img/icons/document-copy.svg" alt="">
                  <div class="pages_name">{{__('header.send')}}<br> {{__('header.state')}}</div>
                </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/states/index"><div class="d-flex flex-column align-items-center text-center">
                  <img src="/public/img/icons/archive-add.svg" alt="">
                  <div class="pages_name">{{__('header.new')}}</div>
                </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../files/Инструкции для авторов.docx" download>
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/public/img/icons/info-circle.svg" alt="">
                    <div class="pages_name">{{__('header.instruction ')}}<br> {{__('header.author')}}</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../files/Форма заполнения.docx" download>
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../public/img/icons/import.svg" alt="">
                    <div class="pages_name">{{__('header.form')}}<br> {{__('header.for_author')}}</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts/index">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/public/img/icons/book.svg" alt="">
                    <div class="pages_name">{{__('header.published')}}<br> {{__('header.states')}}</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/publication/index">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/public/img/icons/archive-add.svg" alt="">
                    <div class="pages_name">{{__('header.in_progres')}}<br> {{__('header.publish')}}</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/message/index">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/public/img/icons/messages.svg" alt="">
                    <div class="pages_name">{{__('header.messages')}}</div>
                  </div></a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </div>
    <div class="container-fluid py-5 d-none d-lg-block">
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <div class="d-flex pages_line">
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/submited/index">
              <img src="/public/img/icons/document-copy.svg" alt="">
              <div class="pages_name">{{__('header.send')}}<br> {{__('header.state')}}</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/states/index">
              <img src="/public/img/icons/archive-add.svg" alt="">
              <div class="pages_name">{{__('header.new')}}</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="../files/Инструкции для авторов.docx" download>
              <img src="/public/img/icons/info-circle.svg" alt="">
              <div class="pages_name">{{__('header.instruction ')}}<br> {{__('header.author')}}</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="../files/Форма заполнения.docx" download>
              <img src="/public/img/icons/import.svg" alt="">
              <div class="pages_name">{{__('header.form')}}<br> {{__('header.for_author')}}</div>
            </a>
          </div>
          <div class="d-flex pages_line">
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/posts/index">
              <img src="/public/img/icons/book.svg" alt="">
              <div class="pages_name">{{__('header.published')}}<br> {{__('header.states')}}</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/publication/index">
              <img src="/public/img/icons/archive-add.svg" alt="">
              <div class="pages_name">{{__('header.in_progres')}}<br> {{__('header.publish')}}</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/message/index">
              <img src="/public/img/icons/messages.svg" alt="">
              <div class="pages_name">{{__('header.messages')}}</div>
            </a>

          </div>
        </div>
      </div>
    </div>
</header>


<main>
  <section>
    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-12 d-flex flex-column">
          <h1 class="main_title mb-4">Автор: {{$post->title}}</h1>
          <h3 class="main_title mb-4">Номер страницы(выпуск): {{$post->preview}}</h3>
          <h3 class="main_title mb-4">Название: {{$post->name}}</h3>
          <div class="w-100 d-flex  flex-column flex-lg-row">
            <div>
              <div class="main_el">Аннотация: {!! $post->description !!}</div>
              <h1 class="main_title mb-4">Скачать статью:
            <a href="https://www.farmatsiya.uz/storage/app/public/{{$files}}" class="btn btn-default btn--size" download="">
                    <svg class="svg-inline--fa fa-download fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg><!-- <i class="fa fa-download"></i> Font Awesome fontawesome.com -->                   </a>
                  
            </h1>
            </div>
 
          </div>
  
        </div>
      </div>
    </div>
  </section>
</main>







@endsection