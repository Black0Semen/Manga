@extends('layouts')
@section('content')

<div class="team_main">
    @foreach($team as $value)
    <div>
        <img class="reklm_photo" width="150" height="150" src="./img/vsedovo.svg" alt="photo">
        <h2>{{$value->title}}</h2>
        <div><p>{{$value->opisanie}}</p></div>
        <div class="team_information">
            
            <div class='count_manga_team'>{{App\Models\Comic::WHERE('team','=',$value->title)->count()}} тайтлов</div>
            <div class="count_likes_team">366k лайков</div>
            <div class="count_glav_team"> 6 глав/мес</div>
            <a href="/comic_add">Добавить комикс</a>
        </div>
    </div>
    <div class="team_chose">
        <div class="team_contacts">
            <h3>Контакты</h3>  
            <a href="">
                <img class="reklm_photo" width="50" height="50" src="./img/vsedovo.svg" alt="photo">
            </a>
        </div>
        <div class="team_contacts">
            <h3>Состав:</h3>  
            @foreach($users as $value)
            @foreach(\App\Models\User::WHERE('id','=',$value->id_user)->get() as $user)
            <div>
                <a href="">
                    <img class="reklm_photo" width="50" height="50" src="./img/vsedovo.svg" alt="photo">
                </a><p>{{$user->namelogin}}</p>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
    @endforeach
</div>