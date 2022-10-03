@extends('layout.admin')

@section('title', 'Добавить статью')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h3 class="form_title mb-4">Добавить статью</h3>
        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ route('admin.states.store') }}">
                @csrf

                @if(isset($post))
                    @method('PUT')
                @endif

                <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Главный автор:</label>
                    <input name="title" type="text" class="form_input" placeholder="" value="{{ $state->fio}}" ></input>
                </div>
                <!-- <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-500 @enderror" placeholder="Название" value="{{ $post->title ?? '' }}" />
 -->            <br>
                
                @error('title')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                @foreach($users as $user)
                <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Orcid_id:</label>
                    <input name="preview" type="text" class="form_input" placeholder="" value="{{ $user->orcid_id}}" />
                </div>
                @endforeach
                <br>
                @error('preview')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Описание:</label>
                    <textarea name="description" type="text" class="form_input" placeholder="" value="{{ $post->description ?? '' }}"></textarea>
                </div>
                <br>
                @error('description')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                @if(isset($post) && $post->thumbnail)
                    <div>
                        <img class="h-64 w-64" src="{{ $post->thumbnail }}">
                    </div>
                @endif
                <br>
                <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                    <label for="" class="form_label">Файл</label>
                    <input name="thumbnail" type="file" class="form_input" placeholder="Файл"/>
                </div>

                @error('thumbnail')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <br>
                <div class="d-flex flex-column gap-2 w-100" style="max-width: 750px;">
                    <button type="submit" class="form_btn mx-auto text-decoration-none mt-5 padding-right-5">Сoxранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
