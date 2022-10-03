@extends('layout.admin')

@section('title', 'Администраторы')

@section('content')
<h3 class="text-gray-700 text-3xl font-medium">Администраторы</h3>
<br>
  <div>
    <a class="btn btn-info text-white" href="{{ route('admin.admin_users.create')}}">Добавить</a>
  </div>
  <div>
    <input class="form-control mb-6" type="text" placeholder="Поиск" id="search-text" onkeyup="tableSearch()" style="width: 300px; float:right">
    <table class="table table-striped" id="info-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Email</th>
                <th scope="col">Роль</th>
                <th scope="col">Действия</th>
              </tr>
            </thead>
            @foreach($users as $user)
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{$user -> name}}</td>
                <td>{{$user -> email}}</td>
                <td>{{$user -> role}}</td>
                <td class="d-flex gap-3 align-items-start">
                    <a class="btn btn-info text-white" href="{{ route('admin.admin_users.edit', $user->id) }}">Редактировать</a>
                   
                    <form action="{{ route('admin.admin_users.destroy', $user->id) }}" method="POST">
                        @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger h-auto" onclick="func()">Удалить</button>
                    </form>
                </td>
                @endforeach
              </tr>
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
