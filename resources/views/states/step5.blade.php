@extends('layout.app_send')
@extends('partials.headertwo')

@section('title', 'Шаг 5')

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
                <a href="/states/step4">
                <div class="steps_number">3</div>
                <div class="steps_text">{{__('index.annotation')}}</div>
                </a>
            </div>
            <div class="active">
                <div class="steps_number">4</div>
                <div class="steps_text">{{__('index.key_words')}}</div>
            </div>
            <div>
                <div class="steps_number">5</div>
                <div class="steps_text">{{__('index.download')}}</div>
            </div>
          </div>
       </div>
       <form action="/states/step5" method="post" class="space-y-5 mt-5">
           @csrf
           <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
        <div class="col-12 d-flex justify-content-center flex-wrap flex-xl-nowrap gap-4">
            <div class="w-100">
                <div class="d-flex justify-content-between mt-4">
                <h2 class="steps_title">{{__('index.key_words')}}</h2>
           
                </div>
                <div class="w-100 mt-2">
                    <textarea class="form_input w-100 " style="max-width: 100%;resize: none;" type="text" name="key_words"  id="" placeholder="Ключевое слово, Ключевое слово">{{ old('key_words') }}</textarea>
                </div>
            </div>
        </div>  
        <div class="col-12 py-5 d-flex justify-content-center">
          <button type="submit" class="save_btn btn-primary">{{__('index.save')}}</button>
        </div>
</form>
      </div>
    </div>
  </section>
</main>

@endsection