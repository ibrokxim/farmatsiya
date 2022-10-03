@extends('layout.app_send')
@extends('partials.headertwo')

@section('title', 'Шаг 2')


@section('content')

<main class="flex-grow-1">
  <section class='overflow-hidden'>
    <div class="container-fluid">
      <div class="row">
       <div class="col-12 position-relative overflow_scroll my-5 my-lg-0" >
           <img class="steps_line" src="../public/img/Line 127.svg" alt="">
           <div class="w-100 d-flex" style="grid-gap: 150px;">
           <div class="active">
                <a href="/states/step1">
                    <div class="steps_number">1</div> 
                    <div class="steps_text">@lang('index.inf')<br> @lang('index.stat')</div>
                </a>
            </div> 
            <div class="active">
                <a href="/states/step2">
                <div class="steps_number">2</div>
                <div class="steps_text">@lang('index.institut')</div>
                </a>
            </div>
            <div class="">
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
       <div class="col-12 py-5">
           <div class="step2_text">{{__('index.please')}}</div>
       </div>
    <form action="/states/step2" method="post" class="space-y-5 mt-5" id="myform">
        @csrf

        <div class="col-12 d-flex gap-3 d-flex justify-content-around mt-4 flex-wrap">
       <div class="d-flex flex-column gap-3">
           <h2 class="steps_title" style="margin-left: 60px;">Название института:</h2>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">1</div>
               <input class="steps_form_input" style="width: 300px;" type="text" name="institute_ru" value="{{ old('intitute') }}">
           </div>
           <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">2</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">3</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">4</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">5</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">6</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">7</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">8</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">9</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">10</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">11</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">12</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
       </div>
       <div class="d-flex flex-column gap-3">
           <h2 class="steps_title" style="margin-left: 60px;">Institut nomi:</h2>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">1</div>
               <input class="steps_form_input" style="width: 300px;" type="text" name="institute_uz" value="{{ old('intitute') }}">
           </div>
           <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
               <div class="step2_numbers">2</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">3</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">4</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">5</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">6</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">7</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">8</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">9</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">10</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">11</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">12</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
       </div>
       <div class="d-flex flex-column gap-3">
           <h2 class="steps_title" style="margin-left: 60px;">Institute name:</h2>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">1</div>
               <input class="steps_form_input" style="width: 300px;" type="text" name="institute_en" value="{{ old('intitute') }}">
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">2</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">3</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">4</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">5</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">6</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">7</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">8</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">9</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">10</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">11</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
           </div>
           <div class="d-flex align-items-center gap-3">
               <div class="step2_numbers">12</div>
               <input class="steps_form_input" style="width: 300px;" type="text" >
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
      </div>
    </form>
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
  !function(e){e.fn.saveStorage=function(t)
  {"use strict";if("undefined"!=typeof Storage){var n=e(this),a=e(this).attr("id")+"_saveStorage",r=e.extend({},{exclude:[]},t),i=function(){var t="";return e.each(r.exclude,function(e,n){t+="input[type="+n+"],"}),t};n.find(":input").bind("change keyup",function(){var e=n.serializeArray();localStorage.setItem(a,JSON.stringify(e))});n.submit(function(){localStorage.removeItem(a)}),function(){if(null!==localStorage.getItem(a))for(var e=JSON.parse(localStorage.getItem(a)),t=n.find("input[type=radio]"),r=n.find("input[type=checkbox]"),o=0;o<e.length;o++){n.find(":input[name="+e[o].name+"]").not(i()+"input[type=radio], input[type=checkbox]").val(e[o].value);for(var u=0;u<t.length;u++)t[u].getAttribute("name")===e[o].name&&t[u].getAttribute("value")===e[o].value&&(t[u].checked=!0);for(var c=0;c<r.length;c++)r[c].getAttribute("name")===e[o].name&&r[c].getAttribute("value")===e[o].value&&(r[c].checked=!0)}}()}else console.error("Sorry! No web storage support.")}}(jQuery);
</script>
<script>
    $('#myform').saveStorage();
</script>
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
</main>

@endsection