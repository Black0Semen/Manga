@extends('layouts')
@section('content')

<form method="post"> 
    @csrf 
    <br>    <br>    <br>    <br>    <br>    <br>
    <b>Название:</b>
    <input type='text' id="title" name="title"><br>

    <b>Тип:</b>
    <select name="type">
        @foreach(App\Models\ComicType::all() as $value)
            <option value="{{$value->id_type}}">{{$value->type}}</option>
        @endforeach
    </select><br>

    <b>Тэги:</b>
    <select name="tags">
        @foreach(App\Models\Tags::all() as $value)
            <option value="{{$value->id_tag}}">{{$value->tag}}</option>
        @endforeach
    </select><br>

    <b>Год релиза:</b>
    <input type="text" name="date" id="date"><br>

    <b>Жанры: </b>
    <select name="janr">
        @foreach(App\Models\Janr::all() as $value)
        <option value="{{$value->id_janr}}">{{$value->janr}}</option>
        @endforeach
    </select><br>

    <b>Команда переводчиков:</b>
    <select name="team">
        @foreach(App\Models\Team::all() as $value)
        <option value="{{$value->title}}">{{$value->title}}</option>
        @endforeach
    </select><br>

    <b>статус перевода:</b>
    <select name="status">
        @foreach(App\Models\ComicStatus::all() as $value)
        <option value="{{$value->id_status}}">{{$value->status}}</option>
        @endforeach
    </select><br>

    <b>Возрастные ограничения:</b>
    <select name="ogr">
        @foreach(App\Models\ComicOgr::all() as $value)
        <option value="{{$value->id_ogr}}">{{$value->ogr}}</option>
        @endforeach
    </select><br>

    <b>Ссылка на оригинал</b>
    <input type="text" name="link" id="link"><br>

    <b>Описание</b>
    <input type="text" name="opisanie", id="opisanie">

    <input type="submit" value="Добавить">
</form>