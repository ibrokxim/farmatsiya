@extends('layout.app_send')
@extends('partials.headertwo')
@section('title', 'Шаг 6')
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
                    <div class="steps_text">@lang('index.inf')<br> @lang('index.stat')</div>
                </a>
            </div> 
            <div class="active">
                <a href="/states/step2">
                <div class="steps_number">2</div>
                <div class="steps_text">@lang('index.institut')</div>
                </a>
            </div>
            <div class="active">
                <a href="/states/step4">
                <div class="steps_number">3</div>
                <div class="steps_text">@lang('index.annotation')</div>
                </a></div>
            <div class="active">
                <a href="/states/step5">
                <div class="steps_number">4</div>
                <div class="steps_text">@lang('index.key_words')</div>
                </a>
            </div>
            <div class="active">
                <a href="/states/step6">
                <div class="steps_number">5</div>
                <div class="steps_text">@lang('index.download')</div>
                </a>
            </div>
          </div>
       </div>
        <div class="col-12 d-flex justify-content-center flex-wrap flex-xl-nowrap gap-4">
            <div class="w-100">
                <h2 class="steps_title">@lang('index.download')</h2>
                <div class="w-100 mt-4 d-flex flex-wrap flex-lg-nowrap gap-4">
                    <form action="/states/step6" method="post" id="uploadFileFrm"  enctype="multipart/form-data" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
                        @csrf
           
                    <div class="d-flex justify-content-center w-100 align-items-center gap-3 flex-column flex-md-row">
                        <div for="" class="form_label step4">@lang('index.file'):</div>
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
                        <div class="d-flex align-items-center">
                            <label class="inputGroupFile02 text-nowrap" for="inputGroupFile02">@lang('index.select_file')</label>
                            <input type="file" style="max-width: 265px;" id="inputGroupFile02" name="files" value="{{ old('files') }}">
                        </div>
                    </div>
                </div>
                <p class="mt-3">@lang('index.format')</p>
            </div>
        </div>  
        <div class="col-12 py-5 d-flex justify-content-center">
          <button type="submit" class="save_btn ptimary-btn" >@lang('index.save')</button>
        </div>
        </form>
      </div>
    </div>
  </section>
</main>
@endsection