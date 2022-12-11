@extends('layouts')
@section('content')
<div class="Top1">
    <h2 class="Top_title1">
        Закладки
    </h2>
    <div class="Top_Content1" style="margin-left:12px">
            <div class="Buttons1">
                <button class="Button_Vib1" tabindex="0" type="button" aria-selected="true">
                    <span class="Views1">
                        Читаю
                    </span>
                </button>
                <button class="Button_Vib1" tabindex="-1" type="button" aria-selected="false">
                    <span class="Views_But1">
                        Заброшено
                    </span>
                </button>
                <button class="Button_Vib1" tabindex="-1" type="button" aria-selected="false">
                    <span class="Views_But1">
                        Прочитано
                    </span>
                </button>
                <button class="Button_Vib1" tabindex="-1" type="button" aria-selected="false">
                    <span class="Views_But1">
                        Отложено
                    </span>
                </button>
                <button class="Button_Vib1" tabindex="-1" type="button" aria-selected="false">
                    <span class="Views_But1">
                        Буду читать
                    </span>
                </button>
            </div>
        <div class="dropdow">
        <img src="content/photo/logo.png" onclick="myFunction1()" class="drop">
          <div id="myDropdow" class="dropdown-conten">
            <a href="#">Непрочитанные</a>
            <a href="#">Дата изменения закладки</a>
            <a href="#">Дата обновлений глав</a>
          </div>
      </div>
    </div>
</div>
<div class="main">
    <div class="Manga">
            <p class="Nomer_Block">1</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">2</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">3</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">4</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">5</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">6</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">7</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">8</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">9</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">10</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">11</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">12</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">13</p>
            <a href="h">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">14</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">15</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">16</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">17</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
    <div class="Manga">
            <p class="Nomer_Block">18</p>
            <a href="">
                <img class="reklm_photo" width="100" height="200" src="./img/vsedovo.svg" alt="photo">
            </a>
            <p class="Color_Opis">Название</p>
    </div>
</div>