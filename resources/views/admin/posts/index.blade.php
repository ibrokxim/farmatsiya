@extends('layout.admin')

@section('title', 'Статьи')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $message }}</strong>
</div>
@endif
<h3 class="text-gray-700 text-3xl font-medium">Опубликованные статьи</h3>
<br>
  <div>
    <a class="btn btn-info text-white" href="{{ route('admin.posts.create') }}">Добавить</a>
  </div>
  <input class="form-control mb-6" type="text" placeholder="Поиск" id="search-text" onkeyup="tableSearch()" style="width: 300px; float:right">
  <table class="table" id="info-table">
    <thead>
      <tr>
        <th scope="col">Страницы</th>
        <th scope="col">Автор</th>
        <th scope="col">Название статьи</th>
        <th scope="col">Аннотация</th>
     
      </tr>
    </thead>
    @foreach($posts as $post)
    <tbody>
      <tr>
        <th scope="row">{{$post->preview}}</th>
        <td>{{$post -> title}}</td>
        <td>{{$post -> name}}</td>
        <td>{!! \Illuminate\Support\Str::words($post -> description,10) !!}</td>
        <td class="d-flex gap-3 align-items-start"><a class="btn btn-info text-white" href="{{ route('admin.posts.edit', $post->id) }}">Редактировать</a>
        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger h-auto" onclick="">Удалить</button>
        </form>
        </td>
    @endforeach
      </tr>
    </tbody>     
    </table>

    
    {{$posts->links("pagination::bootstrap-4")}}
<br>


  <script>
 function tableSearch() {
    var phrase = document.getElementById('search-text');
    var table = document.getElementById('info-table');
    var regPhrase = new RegExp(phrase.value, 'i');
    var flag = false;
    for (var i = 1; i < table.rows.length; i++) {
        flag = false;
        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
            if (flag) break;
        }
        if (flag) {
            table.rows[i].style.display = "";
        } else {
            table.rows[i].style.display = "none";
        }

    }
}
</script>

@endsection
