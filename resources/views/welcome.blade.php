@extends('layout.app')
@include('partials.header')
@section('title', 'Фармация и фармакология')


@section('content')
@if (Session::has('succes'))
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="alert alert-success">
                    {{Session::get('succes')}}
                </div>
            </div>
        </div>
    </div>
@endif
<main>
  <section>
    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-12 d-flex flex-column">
          <h1 class="main_title mb-4">@lang('messages.collegs')</h1>
          <p class="main_text">@lang('messages.for_fun')</p>
          <p class="main_text">@lang('messages.napravlenie')</p>
          <div class="w-100 d-flex justify-content-around pb-3 flex-column flex-lg-row">
            <div>
              <div class="main_el">@lang('messages.anal_chem')</div>
              <div class="main_el">@lang('messages.bioximiya')</div>
              <div class="main_el">@lang('messages.biologiya')</div>
              <div class="main_el">@lang('messages.biotexnologiya')</div>
              <div class="main_el">@lang('messages.clinic')</div>
              <div class="main_el">@lang('messages.cosm')</div>
              <div class="main_el">@lang('messages.mikrobiolog')</div>
              <div class="main_el">@lang('messages.nanotech')</div>
              <div class="main_el">@lang('messages.nanotox')</div>
              <div class="main_el">@lang('messages.radio')</div>
            </div>
            <div>
            <div class="main_el">@lang('messages.toxic')</div>
              <div class="main_el">@lang('messages.farm_help')</div>
              <div class="main_el">@lang('messages.farm_chem')</div>
              <div class="main_el">@lang('messages.farm_tech')</div>
              <div class="main_el">@lang('messages.farm_menej')</div>
              <div class="main_el">@lang('messages.farmeko')</div>
              <div class="main_el">@lang('messages.farmokog')</div>
              <div class="main_el">@lang('messages.farmolog')</div>
              <div class="main_el">@lang('messages.farm_edu')</div>
              <div class="main_el">@lang('messages.farm_docx')</div>
            </div>
          </div>
          <p class="main_text">@lang('messages.nabor')</p>
          <p class="main_text">@lang('messages.period')</p>
          <p class="main_text">@lang('messages.pochta')<a class="text-black fw-bold text-decoration-none" href="mailto:journal@ftti.uz">journal@ftti.uz</a></p>
          <p class="main_text">@lang('messages.trebovaniya')</p>
        </div>
      </div>
    </div>
  </section>
</main>
@include('partials.footer')
    
@endsection