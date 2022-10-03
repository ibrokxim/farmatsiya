@extends('layout.admin')

@section('title', "Редактировать пользователя ID {$state->id}")

@section('content')    
<h3 class="form_title mb-4"> Статья номер {{$state->id}}</h3>
<form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ isset($state) ? route('admin.states.update', $state->id) : route('admin.states.store') }}">
    @csrf
    @if(isset($state))
         @method('PUT')
    @endif
<div class="col-12 d-flex gap-3 d-flex justify-content-around mt-4 flex-wrap">
    <div class="d-flex flex-column gap-3">
        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Язык статьи:</label></label>
            <input name="stat_lang" type="text" class="form_input" value="{{$state->stat_lang}}" placeholder="" disabled>
        </div>
        
        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Категория:</label></label>
            <input name="category" type="text" class="form_input" value="{{$state->category}}" placeholder="" disabled>
        </div>
        
        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Тип статьи:</label></label>
            <input name="stat_type" type="text" class="form_input" value="{{$state->stat_type}}" placeholder="" disabled>
        </div>
        
        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Интститут(ру):</label></label>
            <input name="institute_ru" type="text" class="form_input" value="{{$state->institute_ru}}" placeholder="" disabled>
        </div>
        
        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Институт(уз):</label></label>
            <input name="institute_uz" type="text" class="form_input" value="{{$state->institute_uz}}" placeholder="" disabled>
        </div>
        
        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Институт(анг):</label></label>
            <input name="institute_en" type="text" class="form_input" value="{{$state->institute_en}}" placeholder="" disabled>
        </div>

        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">ФИО:</label></label>
            <input name="short_name" type="text" class="form_input" value="{{$state->short_name}}" placeholder="" disabled>
        </div>

        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Файл</label></label>
            <a href="https://www.farmatsiya.uz/storage/app/public/{{$state->files}}" download>Скачать</a> 
        </div>
    </div>
    <div class="d-flex flex-column gap-3">
        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Ключевые слова</label></label>
            <input name="key_words" type="text" class="form_input" value="{{$state->key_words}}" placeholder="" >
        </div>

        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Aннотация</label></label>
            <textarea name="annotation" type="text" class="form_input" style="height:400px;" value="" placeholder="" disabled>{{$state->annotation}}</textarea>
        </div>

        <div  class="d-flex  w-100 align-items-center gap-3">
            <label for="" class="form_label">Действие</label></label>
            <select class="form-select" aria-label="Default select example" name="status" id="{{$state->id}}" >      
                <option name="sele" selected="Проверяется" value="Проверяется"{{ $state->state =="Проверяется" ? 'selected' : '' }} >Проверяется</option>
                <option name="sele" value="Принят" {{ $state->status =="Принят" ? 'selected' : '' }}>Принят</option>
                <option name="sele" value="Отклонен"{{ $state->status =="Отклонен" ? 'selected' : '' }}>Отклонен</option>           
            </select>         
        </div>
        <div class="d-flex flex-column gap-2 w-100" style="max-width: 750px;">
            <button type="submit" class="form_btn mx-auto text-decoration-none mt-5 padding-right-5">Сoxранить</button>
        </div>
    </div>
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
</div>
</form>
@endsection