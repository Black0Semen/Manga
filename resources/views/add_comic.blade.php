@extends('layouts')
@section('content')
<div class="add_comic">
    <form>
        <p>Название: </p><input type="text">
        <p>Английское название: </p> <input type="text">
        <p> Другое название: </p> <input type="text">
        <p> Описание </p> <input type="text">
        <p> Тип </p>
        <select>
        @foreach(\App\Models\ComicType::get() as $type)
            <option>{{$type->type}}</option>
            @endforeach
        </select>
        <p> Статус перевода </p>
        <select></select>
        <p> Возрастное ограничение </p>
        <select></select>
        <p> Год выпуска </p> <input type="text">
        <p> Жанры </p>
        <select></select>
        <p> Категории </p>
        <select></select>
        <p> Ссылка на оригинал </p> <input type="text">
        <p> Сообщение модератору </p> <input type="text">
    </form>
</div>