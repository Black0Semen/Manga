@extends('layouts')
@section('content')
<div class="page" id="main-page">
      <div class="page__inner">
          <div class="container container_offset container_responsive">
    <div class=" page__wrapper page__wrapper_left  paper manga-search">
      <div class="manga-search__head">
        <div class="manga-search__header">
          <h2 class="manga-search__title">
            <span>Каталог</span>
          </h2>
          <ul class="dropdown">
          <svg class="header-right-menu__avatar" data-dropdown="" data-tippy-placement="bottom-end" aria-expanded="false" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z"></path></svg>
          <div class="menu-template">
            <div data-tippy-root="" id="tippy-1" style="z-index: 3;visibility: visible;margin: 0px;margin-left: 128px;margin-top: -1455px;position: absolute;inset: 0px auto auto 0px;transform: translate(755.2px, 1504.8px);"><div class="tippy-box" data-state="visible" tabindex="-1" data-theme="dropdown" data-animation="shift-toward" role="tooltip" style="max-width: 350px; transition-duration: 200ms;" data-placement="bottom-end"><div class="tippy-content" data-state="visible" style="transition-duration: 200ms;"><div class="menu header-dropdown">
            <a style="text-decoration: none;"><li class="menu__item">По рейтингу</li></a>
            <a style="text-decoration: none;"><li class="menu__item">По просмотрам</li></a>
            <a style="text-decoration: none;"><li class="menu__item">По лайкам</li></a>
            <a style="text-decoration: none;"><li class="menu__item">По кол-ву глав</li></a>
            <a style="text-decoration: none;"><li class="menu__item">По новизне</li></a>
                          </div></div></div></div>
          </div>
</ul>
                  </div>
        <input class="form__input manga-search__input" type="text" placeholder="Поиск по названию..." value="">
      </div>
      <div class="media-grid-wrap">
    <div class="media-cards-grid">
    @foreach($comics as $comic)
      <div class="media-card-wrap">
        <?php
        $title = str_slug($comic->eng_title,'-');
        ?>
      <a class="media-card" href="/comic/{{$title}}" data-media-slug="agnyeo-neun-du-beon-sanda" data-media-id="35398" style="background-image: url(&quot;{{asset('/storage/uploads/' . $comic->image)}}&quot;);" data-src="{{asset('/storage/uploads/' . $comic->image)}}" data-was-processed="true">
        <div class="media-card__caption">
          <h5 class="media-card__subtitle">{{App\Models\ComicType::WHERE('id_type','=',$comic->id_type)->value('type')}}</h5>
                    <h3 class="media-card__title line-clamp">{{$comic->title}}</h3>
        </div>
              </a>
    </div>
    @endforeach
  </div>

  </div>
    </div>
          <div class="paper search-filter">
            <div class="search-filter-layout"><!----> 
          <div class="search-filter__wrap">
            <div class="search-filter__filters">
        <div class="search-filter-submenu">
            <div class="search-filter-submenu__name">
            Жанры
            </div> 
            <div class="checkselect">
            @foreach(App\Models\Janr::all() as $value)
		<label><input type="checkbox" name="chooseJanr[]" value="{{$value->id_janr}}"> {{$value->janr}}</label>
            @endforeach
	</div>
        </div> 
        <div class="search-filter-submenu">
          <div class="search-filter-submenu__name">
            Теги
          </div> 
          <div class="checkselect">
          @foreach(App\Models\Tags::all() as $value)
		<label><input type="checkbox" name="chooseTag[]" value="{{$value->id_tag}}"> {{$value->tag}}</label>
    @endforeach
	</div>
        </div>
        <div class="search-filter-submenu">
          <div class="search-filter-submenu__name">
            Статус перевода
          </div> 
          <div class="checkselect">
          @foreach(App\Models\ComicStatus::all() as $value)
		<label><input type="checkbox" name="chooseStatus[]" value="{{$value->id_status}}"> {{$value->status}}</label>
    @endforeach
	</div>
        </div>
        <div class="search-filter-submenu">
          <div class="search-filter-submenu__name">
            Тип
          </div> 
          <div class="checkselect">
          @foreach(App\Models\ComicType::all() as $value)
		<label><input type="checkbox" name="chooseType[]" value="{{$value->id_type}}"> {{$value->type}} </label>
    @endforeach
	</div>
        </div>
        <div class="search-filter__group"><div class="search-filter__title">
            Количество глав
          </div> <div class="search-filter__content"><div class="search-filter__input-group"><input type="text" placeholder="От" class="form__input form__input_sm search-filter__input"> <span class="text-muted">—</span> <input type="text" placeholder="До" class="form__input form__input_sm search-filter__input"></div></div></div> <div class="search-filter__group"><div class="search-filter__title">
            Год выпуска
          </div> <div class="search-filter__content"><div class="search-filter__input-group"><input type="text" placeholder="От" class="form__input form__input_sm search-filter__input"> <span class="text-muted">—</span> <input type="text" placeholder="До" class="form__input form__input_sm search-filter__input"></div></div></div> <div class="search-filter__group"><div class="search-filter__title">
            Оценка
          </div> <div class="search-filter__content"><div class="search-filter__input-group"><input type="text" placeholder="От" class="form__input form__input_sm search-filter__input"> <span class="text-muted">—</span> <input type="text" placeholder="До" class="form__input form__input_sm search-filter__input"></div></div></div>
          <button class="button" style="margin-left: 45px;">
        Сбросить
      </button> <button class="button button_green">
        Показать
      </button></div>
          </span></div></div></div></div> <div class="search-filter__buttons buttons-stretch"></div></div></div>
      </div>

        
              </div>