@extends('layout.app_send')
@extends('partials.headertwo')

@section('title', 'Проверка данных')

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
                    <div class="steps_text">{{__('index.inform')}}<br> {{__('index.state')}}</div>
                </a>
            </div> 
            <div class="active">
                <a href="/states/step2">
                <div class="steps_number">2</div>
                <div class="steps_text">{{__('index.institute')}}</div>
                </a>
            </div>
    
            <div class="active">
                <a href="/states/step4">
                <div class="steps_number">3</div>
                <div class="steps_text">{{__('index.annotation')}}</div>
                </a>
              </div>
            <div class="active">
                <a href="/states/step5">
                <div class="steps_number">4</div>
                <div class="steps_text">{{__('index.key_words')}}</div>
                </a>
              </div>
            <div class="active">
                <a href="/states/step6">
                <div class="steps_number">5</div>
                <div class="steps_text">{{__('index.download')}}</div>
                </a>
              </div>
          </div>
       </div>
<div class="col-12">
          <h2 class="steps_title">Ваши данные:</h2>
        </div> 
        <form action="/states/store" method="post" class="space-y-5 mt-5" >
                @csrf 
        <div class="col-12 d-flex gap-3 d-flex justify-content-around mt-4 flex-wrap">
          <div class="d-flex flex-column gap-3">
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">Язык статьи:</label>
              <strong class="form_input">{{ $state->stat_lang }} </strong>
            </div>
            
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">Тип статьи:</label>
              <strong class="form_input">{{ $state->stat_type}}</strong>
            </div>

            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">Язык аннотации</label>
              <strong class="form_input">{{ $state->ann_lang}}</strong>
            </div>

            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">Категория</label>
              <strong class="form_input">{{ $state->category}}</strong>
            </div>

            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">Название института на английском</label>
              <strong class="form_input">{{ $state->institute_en}}</strong>
            </div>

            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">Название института на русском</label>
              <strong class="form_input">{{ $state->institute_ru}}</strong>
            </div>

            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">Название института на узбекском</label>
              <strong class="form_input">{{ $state->institute_uz}}</strong>
            </div>

            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">Аннотация:		</label>
              <textarea class="form_input">{{ $state->annotation}}</textarea><br>
            </div>
            <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
              <label for="" class="form_label step4">Ключевые слова:		</label>
              <textarea class="form_input">{{ $state->key_words}}</textarea>
            </div>
            
            
          </div>
        </div>
        
        <div class="col-12 py-5 d-flex justify-content-center">
          <button type="submit" class="save_btn btn-primary" onclick="alert('Ваша заявка успешно отправлена!\nДля проверки состояния перейдите в раздел Отправленные статьи')">Сохранить и продолжить</button> 
        </div>
    </form>
    </div>
  </section>
</main>
@endsection