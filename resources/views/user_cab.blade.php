@extends('layouts')
@section('content')
<div class="user_main">
@foreach($user as $value)
    <div class="user_information">
        <div class="user_line"><img width="100" height="100" src="./img/vsedovo.svg" alt="photo"></div>
        <div class="user_line"><p>{{$value->namelogin}}</p></div>
        <div class="user_line"><p>Глав прочитано: </p></div>
        <div class="user_line"><p>Кол-во лайков: </p></div>
        <div class="user_line"><p>Кол-во комментариев: </p></div><br>
        <div class="user_line">Кол-во монеток:</div>
        <div class="user_line"><button> Настройки </button> </div>
    </div>
    <div class="user_achivments">
        <div class="achivment">
            <img width="50" height="50" src="./img/vsedovo.svg" alt="photo">
            <p>Ачивка</p>
        </div>
    </div>
    <div class="user_comandList">
        <div class="command">
            <img width="50" height="50" src="./img/vsedovo.svg" alt="photo">
            <p>Название команды</p>
        </div>
        <div class="command">
            <img width="50" height="50" src="./img/vsedovo.svg" alt="photo">
            <p>Название команды</p>
        </div>
        <div class="command">
            <button>Добавить</button>
        </div>
    </div>
    @endforeach
</div>