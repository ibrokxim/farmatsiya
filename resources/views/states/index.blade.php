@extends('layout.app_send')
@extends('partials.headertwo')

@section('title', 'Отправка формы')

@section('content')
<main class="flex-grow-1">
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mt-4 mt-md-0">
          <h2 class="fw-bold fs-4">@lang('index.otpr')</h2>
        </div>
        <div class="col-12">
          <h3 class="fs-6 fw-bold">@lang('index.uspex')</h3>
          <ul>
            <li>@lang('index.nujn')</li>
            <li>@lang('index.posl')</li>
          </ul>
          <p style="font-weight: 500;">@lang('index.recomend')</p>
          <p style="font-weight: 500;">@lang('index.forma')</p>
        </div>
       
        <div class="col-12 py-5 d-flex justify-content-center">
          <a href="/states/step1" class="save_btn text-center" style="text-decoration:none;">@lang('index.begin')</a>
        </div>
      </div>
    </div>
  </section>
</main>
@include('partials.footer')
@endsection