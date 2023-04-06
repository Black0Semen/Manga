@extends('layouts')
@section('content')
<div class="comic_main">
    @foreach($comic as $value)
    <div class="comic_image">
        <img width="250" height="400" src="./img/vsedovo.svg" alt="photo">
        <div class="comic_buttons">
            <button>Читать</button>
        </div>
        <div class="comic_buttons">
            <button>Добавить в закладки</button>
        </div>
    </div>
    <div class="comic_right_block">
        <div class="comic_names">
            <h3>{{$value->title}}</h3>
            <h2>{{$value->title}}</h2>
        </div>
        <div class="comic_information">
            <div class="comic_raiting">{{$value->rating}}</div> <!-- Надо добавить иконки -->
            <div class="comic_likes">1k</div>
            <div class="comic_views">10k</div>
            <div class="comic_zakladki">4k</div>
            @foreach(\App\Models\ComicType::WHERE('id_type','=',$value->id_type)->get() as $type)
                <div class="comic_status">{{$type->type}}</div>
            @endforeach
            <div class="comic_date">{{$value->date}}</div>
        </div>
        <div class="comic_opisanie">
            <p>{{$value->opisanie}}</p>
        </div>
        <div class="comic_tags">
            <a>Тэг</a>
            <a>Еще тэг</a>
        </div>
    </div>
    <div class="comic_teams">
        @foreach(\App\Models\Team::WHERE('title','=',$value->team)->get() as $val)
        @foreach(\App\Models\Team::WHERE('id_team','=',$val->id_team)->get() as $command)
        <a href="/team/{{$command->id_team}}">
            <img width="100" height="100" src="./img/vsedovo.svg" alt="photo">
        </a>
        <p>{{$command->title}}</p>
        @endforeach
        @endforeach
    </div>
    @endforeach
</div>