@extends('layout.app_send')
@include('partials.header')
@section('title', 'Контакты')

@section('content')
   
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Отправить email</h1>
    
            <form class="space-y-5 mt-5" method="POST" action="{{ route('contact_form_process') }}">
                @csrf
                @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">От:</label>
                    <input type="text" class="form_input" value="{{ $user->name }}" disabled>
                </div>
                <br>

                @if ($errors->has('name'))
                     <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Кому:ФТТИ(journal@ftti.uz)</label>
                    <input type="text" class="form_input" value="ФТТИ(journal@ftti.uz)" disabled>
                </div>

                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <br>

                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">СС:</label>
                    <input type="text" class="form_input" value="{{ $user->email }}" disabled>
                </div>

                @if ($errors->has('subject'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                   <br>

                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Сообщение:</label>
                    <textarea class="steps_form_input" style="max-width: 420px; height: 300px;" type="text" placeholder="Текст" name="message" value="{{ old('message')}}">
                </textarea></div>
                @if ($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif  
                
                <div class="col-12 py-5 d-flex justify-content-center">
                    <button type="submit" class="save_btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
    </div>
@endsection

                      