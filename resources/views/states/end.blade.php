@extends('layout.app')
@section('title', 'Успех!')

@section('content')

<main>
  <section>
    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-12 d-flex flex-column">
          <h1 class="main_title mb-4">Вы успешно подали заявку!</h1>
          <p class="main_text">Ваша заявка будет рассмотрена в скорейшем времени.
          Состояние вашей заявки вы можете рассмотреть во вкладке Отправленные статьи
          </p>
          <p class="main_text"><a href="/welcome" style="text-decoration: none;"> Вернуться на главную страницу</a></p>
          <div class="w-100 d-flex justify-content-around pb-3 flex-column flex-lg-row">
            <div>
              <div class="main_el">{{__('messages.anal_chem')}}</div>
              <div class="main_el">{{__('messages.bioximiya')}}</div>
              <div class="main_el">{{__('messages.biologiya')}}</div>
              <div class="main_el">{{__('messages.biotexnologiya')}}</div>
              <div class="main_el">{{__('messages.clinic')}}</div>
              <div class="main_el">{{__('messages.cosm')}}</div>
              <div class="main_el">{{__('messages.mikrobiolog')}}</div>
              <div class="main_el">{{__('messages.nanotech')}}</div>
              <div class="main_el">{{__('messages.nanotox')}}</div>
              <div class="main_el">{{__('messages.radio')}}</div>
            </div>
 
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


@endsection