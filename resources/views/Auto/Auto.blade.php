@extends('layouts')
@section('content')
<div class="Dialog">
    <div class="Osn">
            <h5 class="str3">
                Вход в аккаунт
            </h5>
            <form class="jform">
                <div class="Derj">
                    <div class="Otstup">
                        <input aria-invalid="false" name="user" placeholder="Логин" type="text" class="Input" value="">
                    </div>
                </div>
                <div class="Derj">
                    <div class="Otstup">
                        <input aria-invalid="false" name="password" placeholder="Пароль" type="password" class="Input" value="">
                    </div>
                </div>
                <div class="Derj">
                    <a class="Otstup ssilka1">
                        Забыли пароль?
                    </a>
                </div>
                <button class="Button_Vib" type="submit">
                    <span>
                        Войти
                    </span>
                </button>
            </form>
            <p class="str">
                Нет учетной записи?
            </p>
            <p class="str2">
                <a href="/public/Auto/Registr" class="ssilka1">
                    Зарегистрироваться
                </a>
            </p>
    </div>
</div>