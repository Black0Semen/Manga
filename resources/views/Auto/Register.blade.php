@extends('layouts')
@section('content')
<div class="Dialog1">
    <div class="Osn1">
        <h5 class="str31">
            Регистрация аккаунта
        </h5>
        <ul>
            @foreach ($errors->all() as $message)

                <li>{{ $message }}</li>

            @endforeach
        </ul>
        <form class="jform1" action="{{route('register')}}" method="POST">
            @csrf
            <div class="Derj1">
                <div class="Otstup1">
                    <input aria-invalid="false" name="namelogin" placeholder="Логин" type="text" class="Input1" value="">
                    <input type="hidden" name="id">
                </div>
            </div>
            <div class="Derj1">
                <div class="Otstup1">
                    <input aria-invalid="false" name="email" placeholder="Почта" type="email" class="Input1" value="">
                </div>
            </div>
            <div class="Derj1">
                <div class="Otstup1">
                    <input aria-invalid="false" name="password" placeholder="Пароль" type="password" class="Input1" value="">
                </div>
            </div>
            <div class="Derj1">
                <div class="Otstup1">
                    <input aria-invalid="false" name="password_confirmation" placeholder="Пароль повторно" type="password" class="Input1" value="">
                </div>
            </div>
            <button class="Button_V1" tabindex="0" type="submit">
                <span>
                    Регистрация
                </span>
            </button>
        </form>
        <p class="str1">
            Есть аккаунт?
        </p>
        <p class="str21">
            <a href="/public/Auto/Auth" class="ssilka11">
                Войти
            </a>
        </p>
    </div>
</div>
</div>