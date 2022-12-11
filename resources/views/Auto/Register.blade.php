@extends('layouts')
@section('content')
<div class="Dialog">
    <div class="Osn">
        <h5 class="str3">
            Регистрация аккаунта
        </h5>
        <ul>
            @foreach ($errors->all() as $message)

                <li>{{ $message }}</li>

            @endforeach
        </ul>
        <form class="jform" action="{{route('register')}}" method="POST">
            @csrf
            <div class="Derj">
                <div class="Otstup">
                    <input aria-invalid="false" name="namelogin" placeholder="Логин" type="text" class="Input" value="">
                    <input type="hidden" name="id">
                </div>
            </div>
            <div class="Derj">
                <div class="Otstup">
                    <input aria-invalid="false" name="email" placeholder="Почта" type="email" class="Input" value="">
                </div>
            </div>
            <div class="Derj">
                <div class="Otstup">
                    <input aria-invalid="false" name="password" placeholder="Пароль" type="password" class="Input" value="">
                </div>
            </div>
            <div class="Derj">
                <div class="Otstup">
                    <input aria-invalid="false" name="password_confirmation" placeholder="Пароль повторно" type="password" class="Input" value="">
                </div>
            </div>
            <button class="Button_V1" tabindex="0" type="submit">
                <span>
                    Регистрация
                </span>
            </button>
        </form>
        <p class="str">
            Есть аккаунт?
        </p>
        <p class="str2">
            <a href="/public/Auth" class="ssilka1">
                Войти
            </a>
        </p>
    </div>
</div>
</div>