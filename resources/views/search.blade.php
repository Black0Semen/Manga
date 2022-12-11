@extends('layouts')
@section('content')
<form method="get" name="search_form">
    <div class="search_main">
        <fieldset>
        <h2>Введите название тайтла/команды</h2>
        <input type="text" name="title"><br>
        <input type="submit"><br>
        @if(count($answer)!= 0)
        <h2>Найденные Комиксы</h2>
        @foreach($answer as $value)
            <br>Название: {{$value['title']}} 
            <br>Описание: {{$value['opisanie']}}
        @endforeach
        @endif
        @if(count($teams)!=0)
        <h2>Найденные Команды</h2>
        @foreach($teams as $team)
            <br>Название: {{$team['title']}} 
            <br>Рейтинг: {{$team['rating']}}
        @endforeach
        @endif
        </fieldset>
    </div>
</form>