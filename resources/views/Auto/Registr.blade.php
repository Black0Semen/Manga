@extends('layouts')
@section('content')
<div class="Dialog">
    <div class="Osn">
        <h5 class="str3">
            Регистрация аккаунта
        </h5>
        <form class="jform">
            <div class="Derj">
                <div class="Otstup">
                    <input aria-invalid="false" name="username" placeholder="Никнейм" type="text" class="Input" value="">
                </div>
            </div>
            <div class="Derj">
                <div class="Otstup">
                    <input aria-invalid="false" name="email" placeholder="Почта" type="text" class="Input" value="">
                </div>
            </div>
            <div class="Derj">
                <div class="Otstup">
                    <input aria-invalid="false" name="password" placeholder="Пароль" type="password" class="Input" value="">
                </div>
            </div>
            <div class="Derj">
                <div class="Otstup">
                    <input aria-invalid="false" name="confirm_password" placeholder="Пароль повторно" type="password" class="Input" value="">
                </div>
            </div>
            <button class="Button_Vib" tabindex="0" type="submit">
                <span>
                    Регистрация
                </span>
            </button>
        </form>
        <p class="str">
            Есть аккаунт?
        </p>
        <p class="str2">
            <a href="/public/Auto/Auth" class="ssilka1">
                Войти
            </a>
        </p>
    </div>
</div>
</div>