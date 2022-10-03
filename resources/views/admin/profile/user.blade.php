@extends('layout.admin')
@section('title', 'Сообщения')
@section('content')
<h1>Сообщения</h1>
 
<div class="mt-4">
  <label for="recipient" :value="__('Recipient')" >
    <select name="recipient"
      class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
         @endforeach
      </select>
</div>
@endsection