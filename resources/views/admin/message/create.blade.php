
@extends('layout.admin')

@section('title',  isset($message) ? "Редактировать статью ID {$message->id}" : 'Отправить сообщения')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($message) ? "Редактировать статью ID {$message->id}" : 'Добавить статью' }}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="message" action="{{ isset($message) ? route('admin.message.update', $message->id) : route("admin.message.store") }}">
                @csrf

                @if(isset($message))
                    @method('PUT')
                @endif

                <input name="subject" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('subject') border-red-500 @enderror" placeholder="Subject" value="{{ $message->subject ?? '' }}" />

                @error('subject')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror


                <input name="message" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('message') border-red-500 @enderror" placeholder="Описание" value="{{ $message->message ?? '' }}" />

                @error('message')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                
                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection



