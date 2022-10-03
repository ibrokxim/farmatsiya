@extends('layout.admin')
@section('title', 'Пользователи')
@section('content')
<div class="page-inner" style="background-color: white;">
    <div class="mb-6">
        <span><strong><h1>Пользователи</h1></strong></span>
    </div>
    <br>
    <div class="card">    
        <div class="bg-color-white">
            <!--<input class="form-control mb-6" type="text" placeholder="Поиск" id="search-text" onkeyup="tableSearch()" style="width: 300px;">-->
            <table class="table table-striped" id="myTable"> 
                <thead>
                <tr>
                    <th scope="col">ID</th> 
                    <th scope="col">Титул</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Email</th>
                    <th scope="col">ORCID_ID</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->dignity }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->orcid_id }}</td>
                            
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
@endsection