@extends('layout.admin')

@section('title', 'Добавить статью')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="container mx-auto px-6 py-8">
    <h3 class="form_title mb-4">{{ isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью' }}</h3>
        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store') }}">
                @csrf

                @if(isset($post))
                    @method('PUT')
                @endif
                <div class="col-12 d-flex gap-3 d-flex justify-content-around mt-4 flex-wrap">
                    <div class="d-flex flex-column gap-3">
                    <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                            <label for="" class="form_label">Название:</label>
                            <input name="name" type="text" class="form_input" placeholder="" value="{{ $post->title ?? '' }}" >
                        </div>

                        <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                            <label for="" class="form_label">Автор:</label>
                            <input name="title" type="text" class="form_input" placeholder="" value="{{ $post->title ?? '' }}" >
                        </div>
                        @error('title')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                            <label for="" class="form_label">Выпуск <br>(страницы):</label>
                            <input name="preview" type="text" class="form_input" placeholder="" value="{{ $post->preview ?? '' }}" />
                        </div>
                    
                        @error('preview')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        @if(isset($post) && $post->thumbnail)
                            <div>
                                <img class="h-64 w-64" src="{{ $post->thumbnail }}">
                            </div>
                        @endif
                        
                        <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                            <label for="" class="form_label">Файл</label>
                            <input name="thumbnail" type="file" class="form_input" placeholder="Файл"/>
                        </div>

                        @error('thumbnail')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div  class="d-flex justify-content-center w-100 align-items-center gap-3">
                            <label for="" class="form_label">Аннотация:</label> 
                            <textarea name="description" type="text" class="ckeditor form_input" placeholder="" value="{{ $post->description ?? '' }}">{{ $post->description ?? '' }}</textarea>
                        </div>
                            
                        @error('description')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                     <div class="d-flex flex-column gap-2 w-100" style="max-width: 750px;">
                        <button type="submit" class="form_btn mx-auto text-decoration-none mt-5 padding-right-5">Сoxранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection
