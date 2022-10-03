@extends('layout.admin')

@section('title', 'Отправленные статьи')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

<span>
    <strong><h1>Заявки<h4>(принятые)</h4></h1></strong>
</span>
    <br>
    <div>
    <a class="btn btn-info text-white" href="{{ route('admin.states.index') }}">На проверке</a>    <a class="btn btn-danger " href="{{ route('admin.states.reject') }}">Отклоненные</a>    <a class="btn btn-info" style="background-color:green;" href="{{ route('admin.states.accept') }}">Принятые</a>  
  </div>
    <input class="form-control mb-6" type="text" placeholder="Поиск" id="search-text" onkeyup="tableSearch()" style="width: 300px; float:right">
<div class="bg-color-blue">
    <table class="table" id="info-table">
        <thead>
            <tr>
            <th scope="col">ID</th> 
            <th scope="col">Титул</th>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
            <th scope="col">Номер</th>
            <th scope='col'>Cтатус</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($states as $state)
            @if($state->status == "Принят")
            <tr>
                <th scope="row">{{ $state->id }}
                    <td>{{ $state->user->dignity}}</td>
                    <td>{{ $state->short_name}}</td>
                    <td>{{ $state->user->email }}</td>
                    <td>{{ $state->user->number }}</td>
                    <td>{{ $state->status}}</td>
                      
                    <td class="d-flex gap-3 align-items-start">
                        <a href="{{ route('admin.states.show', $state->id) }}" class="btn btn-info text-white">Посмотреть</a>
                    
                        <a class="btn btn-info "  href="{{ route('admin.posts.create') }}" id="{{$state->id}}" style="background-color: green;">Опубликовать</a> 
                    </td>
                </th>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>

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