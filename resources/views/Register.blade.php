@extends('layouts')
@section('content')
    <div class="page" id="main-page">
	<div class="page__inner">
        <div class="container container_offset" style="    margin: 0 auto; padding: 30px; width: 418px;">
  <div class="page__wrapper page__wrapper_left" style="    margin: 0 auto; padding: 30px; width: 344px;">
    <section class="section paper">
</section>
      <section class="section paper tabs" id="latest-updates" data-tabs-id="tabs_1">
      <form method="POST" action="{{ route('register') }}">
        @csrf
  <div class="section__body" style=" padding-left: 16px;">
    <div class="updates tabs__content tabs__content_show">
      </div>
            <div class="updates__item" style="padding-left: 2px;">
              <div class="aside__content" style="padding-left: 23px;">
                <div class="top-user">
                  <div class="top-user__body">
                    <div class="top-user__username">
                      <div class="link-default" style="padding-left: 24px;">Регистрация</div>
                    </div>
                    <div>
                      <div class="top-user__lvl">Логин</div>
					  <x-text-input id="name" class="form__input manga-search__input"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
					<div>
                      <div class="top-user__lvl">Почта</div>
					  <x-text-input id="email"  class="form__input manga-search__input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div>
                      <div class="top-user__lvl">Пароль</div>
					  <x-text-input id="password" class="form__input manga-search__input" type="password" name="password" required autocomplete="new-password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div>
                      <div class="top-user__lvl">повторите пароль</div>
					  <x-text-input id="password_confirmation" class="form__input manga-search__input" type="password" name="password_confirmation" required autocomplete="new-password"/>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                    </div>
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}"  style="font-size: 10px;">
                {{ __('Уже зарегистрированы?') }}
            </a>
                    <li class="tabs__item tabs__item_active" data-key="home-updates" style="margin-left: -66px; margin-top: 12px;">
            <x-primary-button class="button button_sm button_white media-rating-wrap__btn">
                {{ __('Регистрация') }}
            </x-primary-button>
            </li><div class="tabs__line" style="display: block; width: 215px; transform: translateX(0px);"></div>
          </div>
                </div>
      </div>
    </div>
    <div class="tabs__content">
      <div data-latest-updates="user"></div>
    </div>
      </div>
    </form>
</section>
  </div>
</div>
              </div>