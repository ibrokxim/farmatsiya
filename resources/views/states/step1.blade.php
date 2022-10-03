@extends('layout.app_send')
@extends('partials.headertwo')
@section('title', 'Отправка формы')
@section('content')
<main class="flex-grow-1">
  <section>
    <div class="container-fluid">
      <div class="row">
       <div class="col-12 position-relative overflow_scroll" >
           <img class="steps_line" src="../public/img/Line 127.svg" alt="">
            <div class="w-100 d-flex" style="grid-gap: 150px;">
            <div class="active">
            <a href="/states/step1">
                    <div class="steps_number">1</div> 
                    <div class="steps_text">@lang('index.inf')<br> @lang('index.stat')</div>
            </a>
            </div> 
            <div class="">
                <a href="">
                <div class="steps_number">2</div>
                <div class="steps_text">@lang('index.institut')</div>
                </a>
            </div>
            <div class="">
                <div class="steps_number">3</div>
                <div class="steps_text">@lang('index.annotation')</div>
            </div>
            <div class="">
                <div class="steps_number">4</div>
                <div class="steps_text">@lang('index.key_words')</div>
            </div>
            <div>
                <div class="steps_number">5</div>
                <div class="steps_text">@lang('index.download')</div>
            </div>
            </div>
       </div>
       <div class="col-12 py-5">
           <form action="/states/step1" method="post" class="space-y-5 mt-5" id="myform">
                @csrf    
               <div class="d-flex align-items-center justify-content-center gap-4 flex-wrap">
                   <div class="text-end" style="width: 200px; font-size: 18px;">@lang('index.stat_lang')<br> </div>
                   <div class="d-flex gap-4 justify-content-between flex-column flex-lg-row">
                       <label class="d-flex align-items-center gap-3" style="font-weight: 500;" for="man-lang1">
                       <input class="form-check-input" id="stat-lang" type="radio"  name="stat_lang" value="Английский">
                       @lang('index.angl')
                       </label>
                       <label class="d-flex align-items-center gap-3" style="font-weight: 500;" for="man-lang2">
                       <input class="form-check-input" id="stat-lang" type="radio"  name="stat_lang" value="Русский">
                       @lang('index.rus')
                       </label>
                       <label class="d-flex align-items-center gap-3" style="font-weight: 500;"  for="man-lang3">
                       <input class="form-check-input" id="stat-lang" type="radio"  name="stat_lang" value="Узбекский"checked >
                       @lang('index.uz')
                       </label>
                   </div>
                   <div class="d-flex gap-2 align-items-center flex-wrap justify-content-around">
                       <div class="text-end text-nowrap" style="width: 200px; font-size: 18px;" name="stat_type">@lang('index.stat_type')</div>
                       <select class="form-select" aria-label="Default select example" name="stat_type" id="stat-type" >
                       <option name="sele" value="Обзорная" >@lang('index.obzor')</option>
                       <option name="sele" value="Оригинальная" >@lang('index.origin')</option>
                       <option name="sele" value="Оригинально-исследовательская" >@lang('index.original_isled')</option>
                      </select>
                   </div>
               </div>
               <div class="d-flex align-items-center justify-content-center gap-4 mt-4 flex-wrap">
                   <div class="text-end" style="width: 200px; font-size: 18px;">ФИО:</div>
                   <div class="d-flex gap-4 justify-content-between  flex-column flex-lg-row">      
                        <div class="d-flex align-items-center gap-3">
                            <input class="steps_form_input" style="width: 340px;" type="text" name="short_name" value="{{ old('short_name') }}">
                        </div>
                   </div>
                   <div class="d-flex gap-2 align-items-center flex-wrap justify-content-around">
                       <div class="text-end text-nowrap" style="width: 200px; font-size: 18px;" name="category">@lang('index.category')</div>
                       <select class="form-select" aria-label="Default select example" name="category" id="category">
                        <option>@lang('messages.anal_chem')</option>
                        <option>@lang('messages.bioximiya')</option>
                        <option>@lang('messages.biologiya')</option>
                        <option>@lang('messages.biotexnologiya')</option>
                        <option>@lang('messages.clinic')</option>
                        <option>@lang('messages.cosm')</option>
                        <option>@lang('messages.mikrobiolog')</option>
                        <option>@lang('messages.nanotech')</option>
                        <option>@lang('messages.radio')</option>
                        <option>@lang('messages.toxic')</option>
                        <option>@lang('messages.farm_help')</option>
                        <option>@lang('messages.farm_chem')</option>
                        <option>@lang('messages.farm_tech')</option>
                      </select>
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
               </div>

               <div class="col-12 py-5 d-flex justify-content-center">
               <div class="col-12 py-5 d-flex justify-content-center">
                 <button type="submit" class="save_btn btn-primary" value="save local">@lang('index.save')</button>
               </div>
            </div>
           </form>
        </div>
        </div>
      </div>
    </div>
  </section>
  <script>
 $('#category').change(function(event){
        var selectedcategory = $(this).children("option:selected").val();
        sessionStorage.setItem("itemName",selectedcategory);
});

$('select').find('option[value='+sessionStorage.getItem('itemName')+']').attr('selected','selected');

 </script>
<script type="text/javascript"> 
    document.getElementById('category').onchange = function() {
        localStorage.setItem('selectedtem', document.getElementById('category').value);
    };

    if (localStorage.getItem('selectedtem')) {
        document.getElementById('wk_sl_search_select_'+localStorage.getItem('selectedtem')).selected = true;
    } 
</script>
<script> document.addEventListener("DOMContentLoaded", function() { // событие загрузки страницы

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

});</script>
</main>
@endsection