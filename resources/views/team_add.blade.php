@extends('layouts')
@section('content')

<form method="post"> 
    @csrf 
    <br>    <br>    <br>    <br>    <br>    <br>

    <b>Название команды:</b>
    <input type="text" name="title" id="title"><br>

    <b>Фото:<b>
    <input type="text" name="image" id="image"><br>

    <b>Описание: </b>
    <input type="text" name="opisanie" id="opisanie"><br>

    <input type="submit" value="Добавить">
</form>