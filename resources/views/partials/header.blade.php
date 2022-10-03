<style text="style/css">a:hover {
    background-color: #E6E6FA; /* Цвет фона под ссылкой */ 
    transition: 0.7s;
   } </style>
<header>
    <div class="w-100 bg-white">
    <nav class="navbar navbar-expand-lg navbar-light py-2">
        <div class="container-lg">
          <a class="navbar-brand d-flex align-items-center gap-2" href="/welcome">
            <img src="../public/img/logo.svg" width="55" height="55" alt="">
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
                  <a class="form_register mt-4 bg-white" href="{{ route('profile.index') }}" style="font-size: 20px;
                    font-weight: 700;
                    background: none;
                    color: #171E83;
                    padding: 13px 30px;
                    border: 2px solid #171E83;
                    border-radius: 50px;
                    text-decoration: none;">@lang('header.profil')</a>
                </div>
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
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-lg-none">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/submited/index">
                  <div class="d-flex flex-column align-items-center text-center">
                  <img src="public/img/icons/document-copy.svg" alt="">
                  <div class="pages_name">@lang('header.send')<br> @lang('header.state')</div>
                </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/states/index"><div class="d-flex flex-column align-items-center text-center">
                  <img src="public/img/icons/archive-add.svg" alt="">
                  <div class="pages_name">@lang('header.new')</div>
                </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.farmatsiya.uz/public/files/Инструкция для авторов.pdf" download>
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="public/img/icons/info-circle.svg" alt="">
                    <div class="pages_name">@lang('header.instruction ')<br>@lang('header.author')</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.farmatsiya.uz/public/files/Форма заполнения.docx" download>
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="public/img/icons/import.svg" alt="">
                    <div class="pages_name">@lang('header.form')<br>@lang('header.for_author')</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('posts.index')}}">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="public/img/icons/book.svg" alt="">
                    <div class="pages_name">@lang('header.published')<br> @lang('header.states')</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/publication/index">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="public/img/icons/archive-add.svg" alt="">
                    <div class="pages_name">@lang('header.in_progres')<br> @lang('header.publish')</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/message/index">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="public/img/icons/messages.svg" alt="">
                    <div class="pages_name">@lang('header.messages')</div>
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
              <img src="public/img/icons/document-copy.svg" alt="">
              <div class="pages_name">@lang('header.send')<br> @lang('header.state')</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/states/index">
              <img src="public/img/icons/archive-add.svg" alt="">
              <div class="pages_name">@lang('header.new')</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="https://www.farmatsiya.uz/public/files/Инструкция для авторов.pdf" download>
              <img src="public/img/icons/info-circle.svg" alt="">
              <div class="pages_name">@lang('header.instruction ')<br> @lang('header.author')</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="https://www.farmatsiya.uz/public/files/Форма заполнения.docx" download>
              <img src="public/img/icons/import.svg" alt="">
              <div class="pages_name">@lang('header.form')<br> @lang('header.for_author')</div>
            </a>
          </div>
          <div class="d-flex pages_line">
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="{{route('posts.index')}}">
              <img src="public/img/icons/book.svg" alt="">
              <div class="pages_name">@lang('header.published')<br> @lang('header.states')</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/publication/index">
              <img src="public/img/icons/archive-add.svg" alt="">
              <div class="pages_name">@lang('header.in_progres')<br> @lang('header.publish')</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/message/index">
              <img src="public/img/icons/messages.svg" alt="">
              <div class="pages_name">@lang('header.messages')</div>
            </a>
          </div>
        </div>
      </div>
    </div>
</header>


