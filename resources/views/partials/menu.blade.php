<header>
    <div class="w-100 bg-white">
    <nav class="navbar navbar-expand-lg navbar-light py-2">
        <div class="container-lg">
          <a class="navbar-brand d-flex align-items-center gap-2" href="../">
            <img src="public/img/logo.svg" width="55" height="55" alt="">
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
                    <img src="public/img/icons/info-circle.svg" alt="">
                    <div class="pages_name">@lang('header.instruction ')<br> @lang('header.author')</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.farmatsiya.uz/public/files/Форма заполнения.docx" download>
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="public/img/icons/import.svg" width="40" alt="">
                    <div class="pages_name">@lang('header.form')<br> @lang('header.for_author')</div>
                  </div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts/index">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../public/img/icons/book.svg" alt="">
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
              <img src="public/img/icons/info-circle.svg" alt="">
              <div class="pages_name">@lang('header.instruction ')<br> @lang('header.author')</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none"href="https://www.farmatsiya.uz/public/files/Форма заполнения.docx" download>
              <img src="public/img/icons/import.svg"  alt="">
              <div class="pages_name">{{__('header.form')}}<br> {{__('header.for_author')}}</div>
            </a>
            <a class="d-flex flex-column align-items-center text-center text-decoration-none" href="/posts/index">
                <img src="../public/img/icons/book.svg" alt="">
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



