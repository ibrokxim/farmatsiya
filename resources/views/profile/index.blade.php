@extends('layout.app_register')
@section('title', 'Профиль')


@section('content')
<header>
    <div class="bg-white d-lg-block">
      <div class="container-fluid py-4">
        <div class="row">
          <a class="col-12 d-flex align-items-center gap-3 justify-content-center text-decoration-none" href="/welcome">
            <div class="header_title">Журнал фармацевтического университета</div>
          </a>
        </div>
      </div>
    </div>
</header>
<main class="flex-grow-1 py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center flex-column align-items-center">
        <div class="form_title mb-4">Профиль пользователя {{ $user->name}} </div>
            <form action="{{ route('profile.store') }}" class="d-flex align-items-center w-100 gap-3 justify-content-between flex-wrap flex-lg-nowrap" method="POST">
                @csrf
                
            <div class="d-flex flex-column gap-3">
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Титул:</label>
                    <select class="form_input" aria-label="Default select example"  name="dignity" style="width: 100%; max-width: 426px; font-weight: 400; font-size: 18px; color:rgba(0, 0, 0, .5);">
                       <option value="Pr">Профессор</option>
                       <option value="Dc">Доцент</option>
                       <option value="Dsc">Dsc</option>
                       <option value="Msc">Msc</option>
                       <option value="Phd">Phd</option>
                       <option value="Bsc">Bsc</option>
                       <option value="Mr">Mr.</option>
                       <option value="Ms">Ms.</option>
                    </select>
                </div>
               
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Имя:</label>
                    <input type="text" class="form_input" value="{{ $user->name }}" >
                </div>
                
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Фамилия:</label>
                    <input type="text" class="form_input" value="{{ $user->surname }}" >
                </div>
             
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">*Отчество:</label>
                    <input type="text" class="form_input" value="{{ $user->second_name }}" >
                </div>
            
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">ORCID_ID:</label>
                    <input type="text" class="form_input" value="{{ $user->orcid_id }}" >
                </div>
              
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Институт/организация:</label>
                    <input type="text" class="form_input" value="{{ $user->institute }}" >
                </div>
              
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Кафедра:</label>
                    <input type="text" class="form_input" value="{{ $user->kafedra }}" >
                </div>

                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Адрес:</label>
                    <input type="text" class="form_input" value="{{ $user->address }}" >
                </div>
                
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Город:</label>
                    <input type="text" class="form_input" value="{{ $user->city }}" >
                </div>
            </div>
            <div class="d-flex flex-column gap-2">
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Почтовый индекс:</label>
                    <input type="text" class="form_input" value="{{ $user->postcode }}" >
                </div>

                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Страна:</label>
                    <input type="text" class="form_input" value="{{ $user->country }}" >
                </div>
     
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Контактный номер:</label>
                    <input type="text" class="form_input" value="{{ $user->number }}" >
                </div>

                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">*Рабочий телефон:</label>
                    <input type="text" class="form_input" value="{{ $user->second_number }}" >
                </div>
                
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Email:</label>
                    <input type="text" class="form_input" value="{{ $user->email }}" >
                </div>
                
                <div class="d-flex flex-column gap-2 w-100" style="max-width: 750px;">
                    <button type="submit" class="form_btn mx-auto text-decoration-none mt-5">Изменить</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    
@endsection