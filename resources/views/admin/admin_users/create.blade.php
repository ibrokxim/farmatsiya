@extends('layout.admin')

@section('title',  isset($user) ? "Редактировать пользователя ID {$user->id}" : 'Добавить пользователя')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h2 class="form_title mb-4">{{ isset($user) ? "Редактировать пользователя ID {$user->id}" : 'Добавить пользователя' }}</h2>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ isset($user) ? route('admin.admin_users.update', $user->id) : route('admin.admin_users.store') }}">
                @csrf

                @if(isset($user))
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <input type="hidden" name="id" class="form_input" value="{{ $user->id }}"/>
                </div>
                    @method('PUT')
                @endif
                <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Email:</label>
                    <input name="email" type="text" class="form_input" placeholder="E-mail" value="{{ $user->email ?? '' }}" />
                </div>
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <br>
                <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Имя:</label>
                    <input name="name" type="text" class="form_input" placeholder="Имя" value="{{ $user->name ?? '' }}" />
                </div>
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <br>
                <div class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Роль:</label>
                    <select class="form_input" aria-label="Default select example" name="role" value="{{ $user->role ?? ' ' }}">
                        <option>Главный редактор</option>
                        <option>Редактор</option>
                    </select>
                </div>
                @error('role')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <br>
                <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Пароль</label>
                    <input name="password" type="password" autocomplete="new-password" class="form_input" placeholder="Пароль" value="" />
                </div>
                <br>
                <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Потвердите пароль</label>
                    <input name="password_confirmation" type="password" autocomplete="new-password"  class="form_input" placeholder="Подтверждение пароля" value="" />
                </div>
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div class="d-flex flex-column gap-2 w-100" style="max-width: 750px;">
                    <button type="submit" class="form_btn mx-auto text-decoration-none mt-5 padding-right-10">Сoxранить</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
