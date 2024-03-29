@extends('layouts')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="osnova">
    <form method="post" action="{{route('update')}}">
        @csrf
@method('PATCH')
        <input type="hidden" name="id" value="{{$user->id}}">
        <label>Логин:</label> <input name="namelogin" value="{{$user->name}}" placeholder="Логин">
        <label>Почта:</label> <input name="email" value="{{$user->email}}" placeholder="Почта">
        <label>Роль:</label> <input name="roles" value="{{$user->roles}}" placeholder="Роль">
        <button type="submit">Жимк</button>
    </form>
</div>