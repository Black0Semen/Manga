@extends('layouts')
@section('content')
<div class="page" id="main-page">
      <div class="page__inner">
          <div class="container container_offset container_responsive">
    <div class=" page__wrapper page__wrapper_left  paper manga-search">
    <div class="reader">

<!-- :Боковое меню -->
  <div class="m-menu">
<div class="m-menu__scrollable">
<div class="m-menu__top" data-close-menu="" wfd-invisible="true">
<div class="m-menu__close-menu">
  <svg viewBox="0 0 34 34">
    <line x1="4" y1="4" x2="30" y2="30"></line>
    <line x1="4" y1="30" x2="30" y2="4"></line>
  </svg>
</div>
</div>
  <div class="m-menu__sign">
<a href="https://mangalib.me/register" class="button m-menu__sign-up">Регистрация</a>
<a href="https://mangalib.me/login" tabindex="-1" data-close-menu="" class="button m-menu__sign-in">Вход</a>
</div>
  <div class="m-menu__links">
<a href="https://mangalib.me/" class="m-menu__link">
  <i class="fa fa-home fa-fw"></i> Главная
</a>


<a href="https://mangalib.me/iyagi-dlersunen-namza/v1/c1?page=1#" class="m-menu__link" data-open="catalog">
  <i class="fa fa-angle-left"></i>
  <i class="fa fa-fw fa-bars"></i> Каталог
</a>

<a href="https://mangalib.me/iyagi-dlersunen-namza/v1/c1?page=1#" class="m-menu__link" data-open="sites">
  <i class="fa fa-angle-left"></i>
  <i class="fa fa-globe fa-fw"></i> Наши сайты
</a>

<a href="https://mangalib.me/forum" class="m-menu__link">
  <i class="fa fa-fw fa-comments-o"></i> Форум
</a>

<a href="https://mangalib.me/faq" class="m-menu__link">
  <i class="fa fa-fw fa-question-circle"></i> FAQ
</a>

<a href="https://mangalib.me/news" class="m-menu__link">
  <i class="fa fa-fw fa-newspaper-o"></i> Новости
</a>
      <a href="https://mangalib.me/contact-us/" class="m-menu__link">
  <i class="fa fa-envelope-o fa-fw"></i> Контакты
</a>
    </div>
</div>

<div class="m-menu__social px-10 py-10">
<div class="buttons-stretch">
<a href="https://vk.com/mangalib" class="button button_md" data-social="vk" target="_blank">
  <i class="fa fa-vk"></i>
</a>
<a href="https://discord.gg/NsMt3xhnuD" class="button button_md" data-social="discord" target="_blank">
  <svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18" fill="currentColor"><path d="m3.58 21.196h14.259l-.681-2.205 1.629 1.398 1.493 1.338 2.72 2.273v-21.525c-.068-1.338-1.22-2.475-2.648-2.475l-16.767.003c-1.427 0-2.585 1.139-2.585 2.477v16.24c0 1.411 1.156 2.476 2.58 2.476zm10.548-15.513-.033.012.012-.012zm-7.631 1.269c1.833-1.334 3.532-1.27 3.532-1.27l.137.135c-2.243.535-3.26 1.537-3.26 1.537s.272-.133.747-.336c3.021-1.188 6.32-1.102 9.374.402 0 0-1.019-.937-3.124-1.537l.186-.183c.291.001 1.831.055 3.479 1.26 0 0 1.844 3.15 1.844 7.02-.061-.074-1.144 1.666-3.931 1.726 0 0-.472-.534-.808-1 1.63-.468 2.24-1.404 2.24-1.404-.535.337-1.023.537-1.419.737-.609.268-1.219.4-1.828.535-2.884.468-4.503-.315-6.033-.936l-.523-.266s.609.936 2.174 1.404c-.411.469-.818 1.002-.818 1.002-2.786-.066-3.802-1.806-3.802-1.806 0-3.876 1.833-7.02 1.833-7.02z"></path><path d="m14.308 12.771c.711 0 1.29-.6 1.29-1.34 0-.735-.576-1.335-1.29-1.335v.003c-.708 0-1.288.598-1.29 1.338 0 .734.579 1.334 1.29 1.334z"></path><path d="m9.69 12.771c.711 0 1.29-.6 1.29-1.34 0-.735-.575-1.335-1.286-1.335l-.004.003c-.711 0-1.29.598-1.29 1.338 0 .734.579 1.334 1.29 1.334z"></path></svg>
</a>
</div>
</div>

<div class="m-submenu" data-submenu="catalog">
<div class="m-submenu__title"><i class="fa fa-bars"></i> Каталог</div>
<div class="m-submenu__back">Назад
<i class="fa fa-chevron-circle-right"></i>
</div>
<div class="m-menu__links">
    <a href="https://mangalib.me/manga-list?types[]=1" class="m-menu__link">Манги</a>
<a href="https://mangalib.me/manga-list?types[]=5" class="m-menu__link">Манхвы</a>
<a href="https://mangalib.me/manga-list?types[]=6" class="m-menu__link">Маньхуа</a>
<a href="https://mangalib.me/manga-list?types[]=4" class="m-menu__link">OEL-Манги</a>
<a href="https://mangalib.me/manga-list?format[include][]=5" class="m-menu__link">Синглов</a>
<a href="https://mangalib.me/manga-list?types[]=8" class="m-menu__link">Руманга</a>
<a href="https://mangalib.me/manga-list?types[]=9" class="m-menu__link">Комикс западный</a>
        <a href="https://mangalib.me/manga-list" class="m-menu__link">Весь</a>
    <a class="m-menu__link" href="https://mangalib.me/random">Случайный тайтл</a>
  </div>
</div>

<div class="m-submenu" data-submenu="sites">
<div class="m-submenu__title"><i class="fa fa-globe"></i> Наши сайты</div>
<div class="m-submenu__back">Назад
<i class="fa fa-chevron-circle-right"></i>
</div>
<div class="m-menu__links">
              <a href="https://yaoilib.me/" class="m-menu__link">Yaoilib</a>
                       <a href="https://hentailib.me/" class="m-menu__link">HentaiLib</a>
              <a href="https://ranobelib.me/" class="m-menu__link">RanobeLib</a>
              <a href="https://animelib.me/" class="m-menu__link">AnimeLib</a>
    </div>
</div>

</div>
  <div id="page-overlay"></div>
<!-- :Боковое меню -->

<!-- :Шапка -->
  <div class="header header_reader headroom headroom--not-bottom headroom--pinned headroom--top">
    <div class="reader-header__wrapper">
      <div class="reader-header-action reader-header-action_icon" data-toggle-menu="">
        <i class="fa fa-bars fa-fw"></i>
      </div>

      <a href="https://mangalib.me/iyagi-dlersunen-namza" class="reader-header-action reader-header-action_full">
        <div data-media-up="md" class="reader-header-action__title text-truncate">iyagi dlersunen namza</div>
        <div class="reader-header-action__text text-truncate">Человек, внемлющий историям</div>
        <div data-media-down="md" class="reader-header-action__title text-truncate" wfd-invisible="true">Том 1 Глава 1</div>
      </a>

      <div class="reader-header-actions" data-media-up="md">
        <a href="https://mangalib.me/iyagi-dlersunen-namza/v1/c1?page=1#" data-disabled="" class="reader-header-action reader-header-action_icon">
          <i class="fa fa-angle-left fa-lg"></i>
        </a>
        <div class="reader-header-action" data-reader-modal="chapters">
          <div class="reader-header-action__title">Оглавление</div>
          <div class="reader-header-action__text">
            Том 1 Глава 1
          </div>
        </div>
        <a href="https://mangalib.me/iyagi-dlersunen-namza/v1/c2" class="reader-header-action reader-header-action_icon">
          <i class="fa fa-angle-right fa-lg"></i>
        </a>
      </div>
      <div class="reader-header-actions reader-header-actions_right">
                                        <div class="reader-header-action reader-header-action_icon reader-bookmark" id="add-chapter-bookmark" data-tippy-content="Добавить закладку">
            <span class="reader-header__icon">
              <i class="fa fa-bookmark reader-bookmark__icon reader-bookmark__icon_default"></i>
              <i class="fa fa-bookmark reader-bookmark__icon reader-bookmark__icon_marked" wfd-invisible="true"></i>
              <i class="fa fa-bookmark reader-bookmark__icon reader-bookmark__icon_ghost" wfd-invisible="true"></i>
            </span>
          </div>
                      <div class="reader-header-action reader-header-action_icon" data-reader-modal="chapters" data-media-down="md" wfd-invisible="true">
          <span class="reader-header__icon">
            <i class="fa fa-list-ol"></i>
          </span>
        </div>
        <div class="dropdown">
          <div data-dropdown="" class="reader-header-action reader-header-action_icon" data-media-down="md" aria-expanded="false" wfd-invisible="true">
            <span class="reader-header__icon">
              <i class="fa fa-ellipsis-v"></i>
            </span>
          </div>
          <div class="menu-template" wfd-invisible="true">
            
          </div>

        </div>
        <div class="reader-header-action reader-header-action_icon" tabindex="-1" data-open-modal="#image-error-message" data-media-up="md">
          <span class="reader-header__icon">
            <i class="fa fa-exclamation"></i>
          </span>
        </div>
        <div class="reader-header-action reader-header-action_icon" tabindex="-1" data-reader-modal="settings" data-media-up="md">
          <span class="reader-header__icon">
            <i class="fa fa-cog"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
<!-- :Шапка -->





        

<!-- -->
            <div class="reader-view">
      <div class="reader-view__container" style="max-width: 1536px;">
                      <div class="reader-view__wrap" data-p="1" wfd-invisible="true">
                        <img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/1_6WWN.png">
                        <img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/1_6WWN.png">
                        <img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/1_6WWN.png">
                        <img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/1_6WWN.png">
                        <img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/1_6WWN.png">
                      </div><div class="reader-view__wrap hidden" data-p="2" wfd-invisible="true"><img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/2_AwjK.png"></div><div class="reader-view__wrap hidden" data-p="3" wfd-invisible="true"><img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/3_HG53.png"></div><div class="reader-view__wrap hidden" data-p="4" wfd-invisible="true"><img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/4_lr9z.png"></div><div class="reader-view__wrap hidden" data-p="5" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="6" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="7" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="8" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="9" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="10" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="11" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="12" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="13" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="14" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="15" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="16" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="17" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="18" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="19" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="20" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="21" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="22" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="23" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="24" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="25" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="26" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="27" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="28" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="29" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="30" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="31" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="32" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="33" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="34" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="35" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="36" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="37" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="38" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="39" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="40" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="41" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="42" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="43" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="44" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="45" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="46" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="47" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="48" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="49" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="50" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="51" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="52" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="53" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="54" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="55" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="56" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="57" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="58" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="59" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="60" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="61" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="62" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="63" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="64" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="65" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="66" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="67" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="68" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="69" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="70" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="71" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="72" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="73" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="74" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="75" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="76" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="77" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="78" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="79" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="80" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="81" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="82" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="83" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="84" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="85" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="86" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="87" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="88" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="89" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="90" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="91" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="92" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="93" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="94" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="95" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="96" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="97" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="98" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="99" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="100" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="101" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="102" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="103" data-loaded="false" wfd-invisible="true"><img></div><div class="reader-view__wrap hidden" data-p="104" data-loaded="false" wfd-invisible="true"><img></div>
                    </div>
    </div>
    <!-- пагинация -->
                    <div class="reader-footer">
          <div class="reader-pages">
            <label class="button reader-pages__label reader-footer__btn" for="reader-pages">
              <span>Страница 1 / 104</span>
              <i class="fa fa-caret-up fa-fw"></i>
            </label>
            <select id="reader-pages"><option value="1" selected="true">Страница 1 / 104</option><option value="2">Страница 2 / 104</option><option value="3">Страница 3 / 104</option><option value="4">Страница 4 / 104</option><option value="5">Страница 5 / 104</option><option value="6">Страница 6 / 104</option><option value="7">Страница 7 / 104</option><option value="8">Страница 8 / 104</option><option value="9">Страница 9 / 104</option><option value="10">Страница 10 / 104</option><option value="11">Страница 11 / 104</option><option value="12">Страница 12 / 104</option><option value="13">Страница 13 / 104</option><option value="14">Страница 14 / 104</option><option value="15">Страница 15 / 104</option><option value="16">Страница 16 / 104</option><option value="17">Страница 17 / 104</option><option value="18">Страница 18 / 104</option><option value="19">Страница 19 / 104</option><option value="20">Страница 20 / 104</option><option value="21">Страница 21 / 104</option><option value="22">Страница 22 / 104</option><option value="23">Страница 23 / 104</option><option value="24">Страница 24 / 104</option><option value="25">Страница 25 / 104</option><option value="26">Страница 26 / 104</option><option value="27">Страница 27 / 104</option><option value="28">Страница 28 / 104</option><option value="29">Страница 29 / 104</option><option value="30">Страница 30 / 104</option><option value="31">Страница 31 / 104</option><option value="32">Страница 32 / 104</option><option value="33">Страница 33 / 104</option><option value="34">Страница 34 / 104</option><option value="35">Страница 35 / 104</option><option value="36">Страница 36 / 104</option><option value="37">Страница 37 / 104</option><option value="38">Страница 38 / 104</option><option value="39">Страница 39 / 104</option><option value="40">Страница 40 / 104</option><option value="41">Страница 41 / 104</option><option value="42">Страница 42 / 104</option><option value="43">Страница 43 / 104</option><option value="44">Страница 44 / 104</option><option value="45">Страница 45 / 104</option><option value="46">Страница 46 / 104</option><option value="47">Страница 47 / 104</option><option value="48">Страница 48 / 104</option><option value="49">Страница 49 / 104</option><option value="50">Страница 50 / 104</option><option value="51">Страница 51 / 104</option><option value="52">Страница 52 / 104</option><option value="53">Страница 53 / 104</option><option value="54">Страница 54 / 104</option><option value="55">Страница 55 / 104</option><option value="56">Страница 56 / 104</option><option value="57">Страница 57 / 104</option><option value="58">Страница 58 / 104</option><option value="59">Страница 59 / 104</option><option value="60">Страница 60 / 104</option><option value="61">Страница 61 / 104</option><option value="62">Страница 62 / 104</option><option value="63">Страница 63 / 104</option><option value="64">Страница 64 / 104</option><option value="65">Страница 65 / 104</option><option value="66">Страница 66 / 104</option><option value="67">Страница 67 / 104</option><option value="68">Страница 68 / 104</option><option value="69">Страница 69 / 104</option><option value="70">Страница 70 / 104</option><option value="71">Страница 71 / 104</option><option value="72">Страница 72 / 104</option><option value="73">Страница 73 / 104</option><option value="74">Страница 74 / 104</option><option value="75">Страница 75 / 104</option><option value="76">Страница 76 / 104</option><option value="77">Страница 77 / 104</option><option value="78">Страница 78 / 104</option><option value="79">Страница 79 / 104</option><option value="80">Страница 80 / 104</option><option value="81">Страница 81 / 104</option><option value="82">Страница 82 / 104</option><option value="83">Страница 83 / 104</option><option value="84">Страница 84 / 104</option><option value="85">Страница 85 / 104</option><option value="86">Страница 86 / 104</option><option value="87">Страница 87 / 104</option><option value="88">Страница 88 / 104</option><option value="89">Страница 89 / 104</option><option value="90">Страница 90 / 104</option><option value="91">Страница 91 / 104</option><option value="92">Страница 92 / 104</option><option value="93">Страница 93 / 104</option><option value="94">Страница 94 / 104</option><option value="95">Страница 95 / 104</option><option value="96">Страница 96 / 104</option><option value="97">Страница 97 / 104</option><option value="98">Страница 98 / 104</option><option value="99">Страница 99 / 104</option><option value="100">Страница 100 / 104</option><option value="101">Страница 101 / 104</option><option value="102">Страница 102 / 104</option><option value="103">Страница 103 / 104</option><option value="104">Страница 104 / 104</option></select>
          </div>

                          <button class="button reader-comments-toggler reader-footer__btn hidden" data-reader-comments-toggler="" wfd-invisible="true">
            <i class="fa fa-arrow-left"></i>
            <i class="fa fa-comment fa-fw"></i>
          </button>
          
          <div class="reader-paginate hidden" wfd-invisible="true">
            <button class="button button_icon reader-paginate__item reader-paginate__item_left reader-footer__btn" data-direction="prev">
              <i class="fa fa-chevron-left"></i>
            </button>
            <button class="button button_icon reader-paginate__item reader-paginate__item_right reader-footer__btn" data-direction="next">
              <i class="fa fa-chevron-right"></i>
            </button>
          </div>
        </div>
                <!-- пагинация -->
        <!-- -->


                        <div class="section ads" style="">
<div class="ads__wrap">
<div class="ads__title">Реклама</div>
<div id="yandex_rtb_R-A-247350-8" style="max-height: 220px;"><yatag class="e1d7a22c2 lca0b0a62"><style type="text/css" wfd-invisible="true">.lca0b0a62{opacity: !important;white-space:normal !important;visibility:visible !important}.lca0b0a62,.lca0b0a62 yatag{display:block !important;font-family:inherit !important}.lca0b0a62,.lca0b0a62,.lca0b0a62 a,.lca0b0a62 b,.lca0b0a62 em,.lca0b0a62 iframe,.lca0b0a62 img,.lca0b0a62 table,.lca0b0a62 tbody,.lca0b0a62 td,.lca0b0a62 tr,.lca0b0a62 yatag{-webkit-box-sizing:content-box !important;box-sizing:content-box !important;color:inherit !important;font-size:inherit !important;font-weight:inherit !important;-webkit-hyphens:manual !important;-ms-hyphens:manual !important;hyphens:manual !important;-webkit-transition:none !important;-o-transition:none !important;transition:none !important}.lca0b0a62,.lca0b0a62 a,.lca0b0a62 b,.lca0b0a62 em,.lca0b0a62 iframe,.lca0b0a62 img,.lca0b0a62 table,.lca0b0a62 tbody,.lca0b0a62 td,.lca0b0a62 tr{background:none !important;border:none !important;border-radius:0 !important;border-spacing:0 !important;border-collapse:collapse !important;clear:none !important;float:none !important;font-variant:normal !important;letter-spacing:normal !important;line-height:normal !important;margin:0 !important;max-height:none !important;max-width:none !important;min-height:0 !important;min-width:0 !important;outline:none !important;padding:0 !important;position:static !important;text-align:left !important;text-decoration:none !important;text-indent:0 !important;text-transform:none !important;vertical-align:baseline !important;visibility:inherit !important;word-spacing:normal !important}.lca0b0a62,.lca0b0a62 a,.lca0b0a62 b,.lca0b0a62 em,.lca0b0a62 img,.lca0b0a62 table,.lca0b0a62 tbody,.lca0b0a62 td,.lca0b0a62 tr{height:auto !important}.lca0b0a62 table{display:table !important;empty-cells:hide !important;table-layout:fixed !important}.lca0b0a62 table,.lca0b0a62 td{font-size:100% !important}.lca0b0a62 td{display:table-cell !important;vertical-align:middle !important}.lca0b0a62{width:auto !important;height:auto !important;overflow:visible !important}.lca0b0a62 .t9c97d40f{position:relative !important;margin:auto !important;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-webkit-box-pack:center !important;-ms-flex-pack:center !important;justify-content:center !important;-webkit-box-align:center !important;-ms-flex-align:center !important;align-items:center !important;overflow:hidden !important}.lca0b0a62 .yc359ceef{padding:10px 16px 20px !important}.lca0b0a62 .sb818afa0,.lca0b0a62 .t6d393bc2{position:absolute !important;z-index:1 !important;top:0 !important;left:0 !important;right:0 !important;bottom:0 !important;width:100% !important;height:100% !important;display:none !important}.lca0b0a62 .cd6324e87{width:100% !important;height:100% !important;position:absolute !important;pointer-events:none !important}.lca0b0a62 .pcbe2f588{position:relative !important;z-index:2 !important}.lca0b0a62 .r80d623ff{position:relative !important;top:0 !important;left:0 !important;width:100% !important;height:100% !important;-webkit-transform-origin:0 0 !important;transform-origin:0 0 !important}.lca0b0a62 .r80d623ff iframe{position:absolute !important;top:0 !important;left:0 !important;width:100% !important;height:100% !important}.lca0b0a62 .u5cb47060{position:absolute !important;width:100% !important;right:0 !important;top:0 !important;z-index:20 !important}.lca0b0a62 .wacb8c478{position:absolute !important;z-index:21 !important;top:0 !important;left:0 !important;width:100% !important;height:100% !important}.lca0b0a62 .m45ca664a{position:absolute !important;top:0 !important;left:0 !important;z-index:10 !important;height:16px !important;padding:0 4px !important;font-size:11px !important;line-height:16px !important;color:#000 !important;text-decoration:none !important;background:#fff !important;border:1px solid #e5e5e5 !important;border-bottom-right-radius:3px !important;cursor:pointer !important}.lca0b0a62 .g9f2d0d0e{border:1px solid #303050 !important}.lca0b0a62 .k6e28a5aa{max-width:100% !important;max-height:100% !important}.lca0b0a62 .k6e28a5aa .sb818afa0,.lca0b0a62 .k6e28a5aa .t6d393bc2{display:block !important}.lca0b0a62 .k6e28a5aa .t6d393bc2{-webkit-filter:blur(10px) saturate(0) contrast(400%) !important;filter:blur(10px) saturate(0) contrast(400%) !important}.lca0b0a62 .k6e28a5aa .sb818afa0{background-color:rgba(38,38,38,.9) !important}.lca0b0a62 .a61475db8,.lca0b0a62 .le7dfb290{visibility:hidden !important;opacity:0 !important}.lca0b0a62 .le7dfb290{max-width:1px !important;max-height:1px !important}.lca0b0a62 .t1852724a{position:absolute !important;bottom:20px !important;left:16px !important;right:16px !important;z-index:3 !important;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important}.lca0b0a62 .r8c041e99{height:48px !important;line-height:48px !important;font-size:16px !important;border-radius:8px !important;text-align:center !important;font-weight:700 !important;-ms-flex-item-align:stretch !important;align-self:stretch !important;padding:0 20px !important;white-space:nowrap !important;min-width:0 !important}.lca0b0a62 .f22ed6ba2{background:-webkit-gradient(linear,left top,left bottom,from(#efefef),to(#e5e5e5)) !important;background:-o-linear-gradient(top,#efefef 0,#e5e5e5 100%) !important;background:linear-gradient(180deg,#efefef,#e5e5e5) !important;margin-right:8px !important;-webkit-box-flex:2 !important;-ms-flex:2 1 !important;flex:2 1 !important}.lca0b0a62 .e54183e7c{background:-webkit-gradient(linear,left top,right top,color-stop(-40%,#f60),color-stop(20%,rgba(255,102,0,0))),-webkit-gradient(linear,right top,left top,color-stop(-40%,#f60),color-stop(20%,rgba(255,102,0,0))),-webkit-gradient(linear,left bottom,left top,color-stop(-80%,#f60),color-stop(80%,#fd0)) !important;background:-o-linear-gradient(left,#f60 -40%,rgba(255,102,0,0) 20%),-o-linear-gradient(right,#f60 -40%,rgba(255,102,0,0) 20%),-o-linear-gradient(bottom,#f60 -80%,#fd0 80%) !important;background:linear-gradient(90deg,#f60 -40%,rgba(255,102,0,0) 20%),linear-gradient(270deg,#f60 -40%,rgba(255,102,0,0) 20%),linear-gradient(0deg,#f60 -80%,#fd0 80%) !important;-webkit-box-flex:3 !important;-ms-flex:3 1 !important;flex:3 1 !important}.lca0b0a62 .naeef9056{display:inline-block !important;margin-left:8px !important}.lca0b0a62 .u69f573ff{position:absolute !important;left:-1000px !important;top:-1000px !important;width:1px !important;height:1px !important;display:block !important}.lca0b0a62 .v5d6cd92b{cursor:pointer !important;position:absolute !important;right:4px !important;top:4px !important;z-index:10 !important}.lca0b0a62 .v5d6cd92b.ff45f6b0e{position:relative !important;right:unset !important;top:unset !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b{display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-webkit-box-align:center !important;-ms-flex-align:center !important;align-items:center !important;-webkit-box-pack:center !important;-ms-flex-pack:center !important;justify-content:center !important;pointer-events:auto !important;border-radius:50% !important;-webkit-user-select:none !important;-moz-user-select:none !important;-ms-user-select:none !important;user-select:none !important;-webkit-tap-highlight-color:transparent !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b:before{content:"" !important;position:absolute !important;top:-4px !important;left:50% !important;-webkit-transform:translateX(-50%) !important;transform:translateX(-50%) !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b.ff45f6b0e:before{top:50% !important;-webkit-transform:translate(-50%,-50%) !important;transform:translate(-50%,-50%) !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b.c5bdf0765:hover{background-color:unset!important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b:hover .cf8fa73db{opacity:.8 !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b.x80694dd0 .cf8fa73db{background-color:#fff !important;opacity:.8 !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b.x80694dd0 .f9f592b95 svg{fill:#575c66 !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b.c13886948 .cf8fa73db,.lca0b0a62 .k1f2f0a3e.v5d6cd92b.iae847bea .cf8fa73db{background:none !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b.c13886948:hover{background-color:#e9e9e9 !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b.iae847bea:hover{background-color:rgba(248,250,255,.2) !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b .f9f592b95 svg{fill:var(--tertiary-color) !important}.lca0b0a62 .k1f2f0a3e.k413bec05{width:12px !important;height:12px !important}.lca0b0a62 .k1f2f0a3e.k413bec05:before{width:28px !important;height:28px !important}.lca0b0a62 .k1f2f0a3e.k413bec05 .f9f592b95{-webkit-transform:scale(.6) !important;transform:scale(.6) !important}.lca0b0a62 .k1f2f0a3e.k18de65fd{width:16px !important;height:16px !important}.lca0b0a62 .k1f2f0a3e.k18de65fd:before{width:32px !important;height:32px !important}.lca0b0a62 .k1f2f0a3e.k18de65fd .f9f592b95{-webkit-transform:scale(.8) !important;transform:scale(.8) !important}.lca0b0a62 .k1f2f0a3e.ua4eff723{width:24px !important;height:24px !important}.lca0b0a62 .k1f2f0a3e.ua4eff723:before{width:42px !important;height:42px !important}.lca0b0a62 .k1f2f0a3e.f3b24a082{width:28px !important;height:28px !important}.lca0b0a62 .k1f2f0a3e.f3b24a082:before{width:42px !important;height:42px !important}.lca0b0a62 .k1f2f0a3e.bcd0afdda{width:32px !important;height:32px !important}.lca0b0a62 .k1f2f0a3e.bcd0afdda:before{width:48px !important;height:48px !important}.lca0b0a62 .k1f2f0a3e.v5d6cd92b.ie817dd2a{-webkit-transform:rotate(90deg) !important;transform:rotate(90deg) !important}.lca0b0a62 .cf8fa73db{height:100% !important;width:100% !important;position:absolute !important;top:0 !important;left:0 !important;z-index:-1 !important;border-radius:inherit !important;-webkit-transition:opacity .15s !important;-o-transition:opacity .15s !important;transition:opacity .15s !important;-webkit-transition:background-color .5s ease-in-out !important;-o-transition:background-color .5s ease-in-out !important;transition:background-color .5s ease-in-out !important;color:var(--secondary-color) !important;background:var(--label-bg-color) !important}.lca0b0a62 .cf8fa73db.n2fc9dfd4:hover{opacity:.5 !important}.lca0b0a62 .cf8fa73db.wb9d760f6:hover{opacity:.9 !important}.lca0b0a62 .cf8fa73db.q34b92291{background:none !important}.lca0b0a62 .k1f2f0a3e .f9f592b95{display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-webkit-box-align:center !important;-ms-flex-align:center !important;align-items:center !important;-webkit-box-pack:center !important;-ms-flex-pack:center !important;justify-content:center !important;pointer-events:none !important;-webkit-transition:fill .5s ease-in-out !important;-o-transition:fill .5s ease-in-out !important;transition:fill .5s ease-in-out !important}.lca0b0a62 .k1f2f0a3e .f9f592b95 svg{fill:var(--tertiary-color) !important}@-webkit-keyframes pdb010b3b{0%,to{opacity:0 !important;visibility:hidden !important}4%,96%{visibility:visible !important;opacity:1 !important}}@keyframes pdb010b3b{0%,to{opacity:0 !important;visibility:hidden !important}4%,96%{visibility:visible !important;opacity:1 !important}}.lca0b0a62 .o3c2f5cd2{margin-left:2px !important;pointer-events:auto !important;font-family:inherit !important;position:relative !important;-ms-flex-item-align:center !important;align-self:center !important}.lca0b0a62 .fb7cd0d77>.o3c2f5cd2:first-child{margin-left:0 !important}.lca0b0a62 .o3c2f5cd2.tcb77cd84{margin-right:2px !important;margin-left:0 !important}.lca0b0a62 .fb7cd0d77>.o3c2f5cd2.tcb77cd84:first-child{margin-right:0 !important}.lca0b0a62 .fb7cd0d77{display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-webkit-box-align:center !important;-ms-flex-align:center !important;align-items:center !important;cursor:pointer !important;position:absolute !important;left:4px !important;top:4px !important;z-index:10 !important;font-family:YS Text Variable,Helvetica,Arial,sans-serif !important;white-space:nowrap !important;height:12px !important;line-height:normal !important;-webkit-box-sizing:border-box !important;box-sizing:border-box !important;padding:0 4px !important;border-radius:16px !important;font-size:8px !important;text-transform:uppercase !important;letter-spacing:.125em !important;pointer-events:none !important;text-decoration:none !important;-webkit-transition:color .5s ease-in-out !important;-o-transition:color .5s ease-in-out !important;transition:color .5s ease-in-out !important;color:var(--secondary-color) !important;background:var(--label-bg-color) !important}.lca0b0a62 .fb7cd0d77.maa388535{padding:0 1px 0 4px !important}.lca0b0a62 .fb7cd0d77.tcb77cd84.maa388535{padding:0 4px 0 1px !important}.lca0b0a62 .fb7cd0d77.ue06cdd61,.lca0b0a62 .fb7cd0d77.tcb77cd84.ue06cdd61{padding:0 !important}.lca0b0a62 .fb7cd0d77>a{text-decoration:none !important;color:inherit !important}.lca0b0a62 .fb7cd0d77.x80694dd0{color:rgba(87,92,102,.8) !important;background-color:hsla(0,0%,100%,.8) !important}.lca0b0a62 .fb7cd0d77.v472517d7,.lca0b0a62 .fb7cd0d77.y8b9af82b{top:auto !important;left:auto !important;right:0 !important;bottom:0 !important;background:none !important;text-shadow:none !important;font-size:7px !important;padding:0 !important;height:auto !important;opacity:.8 !important;-webkit-backdrop-filter:none !important;backdrop-filter:none !important}.lca0b0a62 .fb7cd0d77.q34b92291{background:none !important}.lca0b0a62 .fb7cd0d77.g9ac2a4c7{max-width:calc(100% - 42px) !important}.lca0b0a62 .fb7cd0d77:empty{display:none !important}.lca0b0a62 .mf11e718{margin:0 2px !important}.lca0b0a62 .fb7cd0d77>.mf11e718:first-child{display:none !important}.lca0b0a62 .o3e4dec54{text-decoration:none !important;pointer-events:auto !important;color:inherit !important}</style><yatag class="u69f573ff"></yatag><yatag class="t9c97d40f e3ca8e97b"><yatag class="pcbe2f588" style="width: 800px !important; height: 99px !important;"><yatag id="ya_partner_R-A-247350-8-yandex_rtb_R-A-247350-8" class="r80d623ff" style="width: 728px !important; height: 90px !important; transform: scale(1.1) !important;"><div></div></yatag><yatag class="fb7cd0d77 x80694dd0 h93b063af" data-test="AdKebabAndLabel--adLabelContent" data-label="true"><span>Реклама</span></yatag><yatag><yatag data-close="true" data-new-adtune="true" data-sticky-adtune="false" class="k1f2f0a3e v5d6cd92b x80694dd0 k18de65fd f97014cac" language="1" hidelabel="true"><yatag class="cf8fa73db g5b2082d q34b92291"></yatag><yatag class="f9f592b95"><svg width="8" height="20" viewBox="0 0 8 20" fill="white" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="4" r="1.5"></circle><circle cx="4" cy="10" r="1.5"></circle><circle cx="4" cy="16" r="1.5"></circle></svg></yatag></yatag></yatag></yatag></yatag></yatag></div>
<script wfd-invisible="true">
window.yaContextCb.push(()=>{
  Ya.Context.AdvManager.render({
  renderTo: 'yandex_rtb_R-A-247350-8',
  blockId: 'R-A-247350-8'
  })
})
</script>
</div>
</div>
                   
                                   

<!-- Like -->
    <div class="container container_center">
  <div class="reader-review has-team">
                <div class="reader-review-team">
        <div class="reader-review-team__covers">
                            <div style="background-image: url(https://mangalib.me/uploads/team/slivkateam/cover/CvhRCohAKTBu_250x350.jpg?)" class="reader-review-team__cover"></div>
                        </div>
        <span class="reader-review-team__body">
          <div class="reader-review-team__title text-muted small text-truncate">Над главой работали</div>

          <div class="reader-review-team__name text-truncate">
                                <span>
                <a class="link-default" href="https://mangalib.me/team/slivkateam">
                  SlivkaTeam
                </a>
              </span>
                            </div>
        </span>
      </div>
              <div class="reader-review__right">
                  <div class="reader-review-btn is-full " data-reader-like="">
        <div class="reader-review-btn__icon">
          <i class="fa fa-heart-o"></i>
          <i class="fa fa-heart" wfd-invisible="true"></i>
          <i class="fa fa-heart reader-review-btn__icon_ghost" wfd-invisible="true"></i>
        </div>
        <div class="reader-review-btn__text">
          <div class="reader-review-btn__text-up">
            Сказать спасибо
          </div>
          <div class="reader-review-btn__stats reader-review-btn__stats_full">
            поблагодарило: <span data-like-count="">36</span>
          </div>
        </div>
      </div>
      <div class="reader-review-btn is-short " data-reader-like="" wfd-invisible="true">
        <div class="reader-review-btn__icon">
          <i class="fa fa-heart-o"></i>
          <i class="fa fa-heart" wfd-invisible="true"></i>
          <i class="fa fa-heart reader-review-btn__icon_ghost" wfd-invisible="true"></i>
        </div>
        <div class="reader-review-btn__text">
          <div class="reader-review-btn__stats reader-review-btn__stats_short" data-like-count="">
            36
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Like end -->

<!-- :Переход по главам -->
<div class="container container_center hidden" id="reader-next" wfd-invisible="true">
  <div class="reader-next ">
    
    
                <div class="reader-next__buttons">
                        <button disabled="disabled" class="reader-next__btn button text-truncate button_label">
            <i class="fa fa-fw fa-chevron-left icon"></i>
            <span>Предыдущая глава</span>
          </button>
                      <a class="reader-next__btn button text-truncate button_label button_label_right" href="https://mangalib.me/iyagi-dlersunen-namza/v1/c2" tabindex="-1">
          <span>Следующая глава</span>
          <i class="fa fa-fw fa-chevron-right icon"></i>
        </a>
      </div>
            </div>
</div>
<!-- :Переход по главам -->

<!-- :Комментарии -->
                  <div class="reader-comments">
      <div class="container container_center">
        <div class="reader-comments-drag" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" wfd-invisible="true"></div>
        
        <div class="reader-comments-head" wfd-invisible="true">
          <div class="reader-comments-head__toggler" data-reader-comments-toggler="">
            <i class="fa fa-arrow-left"></i>
            <b>Комментарии</b>
          </div>
        </div>
        <section><div class="comments-header"><div class="dropdown"><button data-dropdown-trigger="" class="button button_light button_sm comments-header__btn comments-header__btn_sort">
  Новые
  <i class="fa fa-sort"></i></button> <!----></div> <button class="button button_light button_sm comments-header__btn comments-header__btn_settings">
Настройки
<i class="fa fa-sliders"></i></button> <!----> <a href="https://mangalib.me/faq?section=8&amp;answer=37" class="comments-header__rules rules-btn ml-10">
Правила
<div class="rules-btn__dot" wfd-invisible="true"></div></a></div> <div class="comments"><!----> <div class="comments__form" style=""><div class="comments__pseudo-form">
Написать комментарий...
</div></div> <!----> <!----> <div class="comments-list"><div id="comment_187528887" class="comment"><div class="comment__body"><div class="comment__head"><a href="https://mangalib.me/user/542071" class="comment__user"><img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/9UqLkGJ8GRa0.jpg" alt="Илин" class="comment__avatar"> <span class="comment__username text-truncate">Илин</span></a> <time class="comment__date-time"><time datetime="Sun Apr 23 2023 11:17:57 GMT+0500 (Екатеринбург, стандартное время)">около 2 часов назад</time></time></div> <div class="comment__content"><div>Я буду олдом когда эта штука выстрелит</div></div> <!----> <div class="comment__controls"><button class="button_link">
  ответить
</button> <div class="dropdown comment__dropdown"><div data-dropdown-trigger="" class="comment__control comment__control_dropdown"><svg><use xlink:href="#icon-extra"></use></svg></div> <!----></div> <div class="comment__rating"><div data-action="1" class="comment__rating-action"><svg class="comment__rating-icon"><use xlink:href="#icon-arrow-up"></use></svg></div> <div data-vote="0_0" class="comment__rating-value">
    0
  </div> <div data-action="0" class="comment__rating-action"><svg class="comment__rating-icon"><use xlink:href="#icon-arrow-down"></use></svg></div></div></div> <!----></div> <!----> <!----></div><div id="comment_187247160" class="comment"><div class="comment__body"><div class="comment__head"><a href="https://mangalib.me/user/6685565" class="comment__user"><img src="./Чтение манги Человек, внемлющий историям глава 1 [Страница 1]_files/FTbco7iXnmL9.jpg" alt="Karmain" class="comment__avatar"> <span class="comment__username text-truncate">Karmain</span></a> <time class="comment__date-time"><time datetime="Fri Apr 21 2023 03:51:48 GMT+0500 (Екатеринбург, стандартное время)">2 дня назад</time></time></div> <div class="comment__content"><div>21.04.23<br>8:51<br>Погнали 🚀</div></div> <!----> <div class="comment__controls"><button class="button_link">
  ответить
</button> <div class="dropdown comment__dropdown"><div data-dropdown-trigger="" class="comment__control comment__control_dropdown"><svg><use xlink:href="#icon-extra"></use></svg></div> <!----></div> <div class="comment__rating"><div data-action="1" class="comment__rating-action"><svg class="comment__rating-icon"><use xlink:href="#icon-arrow-up"></use></svg></div> <div data-vote="1_0" class="comment__rating-value comment__rating-value_positive">
    1
  </div> <div data-action="0" class="comment__rating-action"><svg class="comment__rating-icon"><use xlink:href="#icon-arrow-down"></use></svg></div></div></div> <!----></div> <!----> <!----></div> <!----></div> <div class="comments__load-page"><!----></div></div></section>
      </div>
    </div>
              <!-- :Комментарии -->
</div>
    </div>

        
    <div class="tabs__content">
      <div data-latest-updates="user"></div>
    </div>
      </div>  
    </div>