@extends('layout.app_send')
@extends('partials.headertwo')

@section('title', 'Шаг 4')

@section('content')
<main class="flex-grow-1">
  <section>
    <div class="container-fluid pe-0">
      <div class="row">
       <div class="col-12 position-relative overflow_scroll my-5 my-lg-0" >
           <img class="steps_line" src="../public/img/Line 127.svg" alt="">
           <div class="w-100 d-flex" style="grid-gap: 150px;">
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
          
            <div class="active">
                <div class="steps_number">3</div>
                <div class="steps_text">{{__('index.annotation')}}</div>
            </div>
            <div class="">
                <div class="steps_number">4</div>
                <div class="steps_text">{{__('index.key_words')}}</div>
            </div>
            <div>
                <div class="steps_number">5</div>
                <div class="steps_text">{{__('index.download')}}</div>
            </div>
          </div>
       </div>
       <form action="/states/step4" method="post" class="space-y-5 mt-5">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
        <div class="col-12 d-flex justify-content-center flex-wrap flex-xl-nowrap gap-4">
            <div class="w-100">
                <h2 class="steps_title">{{__('index.ann')}} </h2>
                <div class="w-100 mt-4">
                    <textarea class="form_input w-100" style="max-width: 100%;" type="text" name="annotation" id="" required >{{ old('annotation') }}</textarea>
                </div>
                <p class="step6-text mt-3">{{__('index.this')}} </p>
            </div>
        </div>  
        <div class="col-12 py-5 d-flex justify-content-center">
         <button type="submit" class="save_btn btn-primary">{{__('index.save')}} </button>
        </div>
        </form>
      </div>
    </div>
  </section>
</main>
<script>
    document.addEventListener("DOMContentLoaded", function() { // событие загрузки страницы

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
})

}); 
</script>
@endsection