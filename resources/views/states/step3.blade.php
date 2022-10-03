@extends('layout.app_send')
@extends('partials.headertwo')

@section('title', 'Шаг 3')

@section('content')
<main class="flex-grow-1">
  <section>
    <div class="container-fluid pe-0">
      <div class="row">
       <div class="col-12 position-relative overflow_scroll my-5 my-lg-0" >
           <img class="steps_line" src="../public/img/Line 127.svg" alt="">
           <div class="w-100 d-flex" style="grid-gap: 120px;">
           <div class="active">
                <a href="/states/step1">
                    <div class="steps_number">1</div> 
                    <div class="steps_text">{{__('index.inf')}}<br> {{__('index.stat')}}</div>
                </a>
            </div> 
            <div class="active">
                <a href="/states/step2">
                <div class="steps_number">2</div>
                <div class="steps_text">{{__('index.institut')}}</div>
                </a>
            </div>
        
            <div class="">
                <div class="steps_number">4</div>
                <div class="steps_text">{{__('index.annotation')}}</div>
            </div>
            <div class="">
                <div class="steps_number">5</div>
                <div class="steps_text">{{__('index.key_words')}}</div>
            </div>
            <div>
                <div class="steps_number">6</div>
                <div class="steps_text">{{__('index.download')}}</div>
            </div>
          </div>
       </div>
        <div class="col-12">
          <h2 class="steps_title">{{__('index.inform')}}</h2>
        </div> 

        <form action="/states/step3" method="post" class="space-y-5 mt-5" >
                @csrf 
                <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
        <div class="col-12 d-flex gap-3 d-flex justify-content-around mt-4 flex-wrap">
          <div class="d-flex flex-column gap-3">
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">{{__('index.fio')}}	</label>
              <input class="form_input" type="text" placeholder="" name="fio" value="{{ old('fio') }}">
            </div>
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">{{__('index.dignity')}}		</label>
              <input class="form_input" type="text" placeholder="" name="dignity" value="{{$users->dignity ?? '' }}">
            </div>
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">{{__('index.email')}}		</label>
              <input class="form_input" type="text" placeholder="E-mail" name="email" value="{{$users->email ?? '' }}">
            </div>
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">{{__('index.address')}}:		</label>
              <input class="form_input" type="text" placeholder="Адрес" name="address" value="{{$users->address ?? '' }}">
            </div>
          </div>
          <div class="d-flex flex-column gap-3">
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">{{__('index.city')}}:		</label>
              <input class="form_input" type="text" placeholder="Город" name="city" value="{{$users->city ?? '' }}">
            </div>
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">{{__('index.postcode')}}:		</label>
              <input class="form_input" type="text" placeholder="Почтовый индекс" name="postcode" value="{{$users->postcode ?? '' }}">
            </div>
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">{{__('index.country')}}</label>
              <input class="form_input" type="text" name="country" value="{{$users->country ?? '' }}">
            </div>
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">{{__('index.contact')}}:		</label>
              <input class="form_input" type="text" placeholder="+998" name="number" value="{{$users->number ?? '' }}">
            </div>
            
          </div>
        </div>

          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        <div class="col-12 py-5 d-flex justify-content-center">
          <button type="submit" class="save_btn btn-primary">{{__('index.save')}}</button> 
        </div>
      </form>
    </div>
  </section>
  <script>    document.addEventListener("DOMContentLoaded", function() { // событие загрузки страницы

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

    sessionStorage.clear();
})

}); </script>
</main>
@endsection