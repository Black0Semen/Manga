@extends('layouts')
@section('content')
    <div class="page" id="main-page">
	<div class="page__inner">
        
        
        <div class="container container_offset">

  <div class="page__wrapper page__wrapper_left">
   
    <section class="section paper">
  
</section>
  
    

    
<form method="post" enctype="multipart/form-data"> 
    @csrf 
      <section class="section paper tabs" id="latest-updates" data-tabs-id="tabs_1">
      <div class="page__inner">
        
        
          <div class="container container_responsive container_offset">
    <div class="paper">
    <div class="media-name__body">
            <div class="media-name__main">Добавление комикса</div>
                                    </div>
      <div>
      <div class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
    <p>
        Обложка
      </p>
    <input type="file"id="image" name="image" placeholder="Глава" class="form__input">
      </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Оригинальное название
      </p>
          <input type="text" placeholder="Оригинальное название" name="original_title" id="original_title" class="form__input"> 
          
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
          Английское название
          </p>
          <input type="text" placeholder="Английское название" name="eng_title" id="eng_title" class="form__input"> 
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Русскоязычное название
      </p>
          <input type="text" placeholder="Русскоязычное название" name="title" id="title" class="form__input"> 

          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Год релиза
      </p>
          <input type="text" name="date" id="date" placeholder="Год релиза" class="form__input">
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Ссылка на оригинал
      </p>
          <input type="text" placeholder="Ссылка на оригинал" class="form__input">
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Описание
      </p>
          <textarea class="form__input manga-search__input" id="opisanie" name="opisanie" style="resize: none; height: 100px ; "></textarea>
        </div> 
        <div class="search-filter-submenu">
          <div class="search-filter-submenu__name">
            Жанры
          </div> 
          <div class="search-filter-submenu__right">
          <ul class="dropdown">
          <svg class="header-right-menu__avatar" data-dropdown="" data-tippy-placement="bottom-end" aria-expanded="false" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z"></path></svg>
          <div class="menu-template">
            <div data-tippy-root="" id="tippy-4" style="height:200px; width:auto;overflow:auto; z-index: 9999;visibility: visible;margin: 0px;margin-left: 128px;margin-top: -1455px;position: absolute;inset: 0px auto auto 0px;transform: translate(755.2px, 1504.8px);"><div class="tippy-box" data-state="visible" tabindex="-1" data-theme="dropdown" data-animation="shift-toward" role="tooltip" style="max-width: 350px; transition-duration: 200ms;" data-placement="bottom-end"><div class="tippy-content" data-state="visible" style="transition-duration: 200ms;"><div class="menu header-dropdown">
            @foreach(App\Models\Janr::all() as $value)
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" name="janrChoose[]" value="{{$value->id_janr}}"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                {{$value->janr}}
              </span>
            </label>
            </li>
            @endforeach
                          </div></div></div></div>
          </div>
</ul>
          </div>
        </div>
        <div class="search-filter-submenu">
          <div class="search-filter-submenu__name">
            Теги
          </div> 
          <div class="search-filter-submenu__right">
          <ul class="dropdown">
          <svg class="header-right-menu__avatar" data-dropdown="" data-tippy-placement="bottom-end" aria-expanded="false" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z"></path></svg>
          <div class="menu-template">
            <div data-tippy-root="" id="tippy-4" style="height:200px; width:auto;overflow:auto; z-index: 9999;visibility: visible;margin: 0px;margin-left: 128px;margin-top: -1455px;position: absolute;inset: 0px auto auto 0px;transform: translate(755.2px, 1504.8px);"><div class="tippy-box" data-state="visible" tabindex="-1" data-theme="dropdown" data-animation="shift-toward" role="tooltip" style="max-width: 350px; transition-duration: 200ms;" data-placement="bottom-end"><div class="tippy-content" data-state="visible" style="transition-duration: 200ms;"><div class="menu header-dropdown">
            @foreach(App\Models\Tags::all() as $value)
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="{{$value->id_tag}}"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                {{$value->tag}}
              </span>
            </label>
            </li>
            @endforeach
                          </div></div></div></div>
          </div>
</ul>
          </div>
        </div>

        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Статус
      </p>
          <select type="text" name="type" placeholder="Команда переводчиков" class="form__input">
          @foreach(App\Models\ComicStatus::all() as $value)
            <option class="text-truncate" value="{{$value->id_status}}">{{$value->status}}</option>
          @endforeach
          </select>
        </div>

        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Тип
      </p>
          <select type="text" name="type" placeholder="Команда переводчиков" class="form__input">
          @foreach(App\Models\ComicType::all() as $value)
            <option class="text-truncate" value="{{$value->id_type}}">{{$value->type}}</option>
          @endforeach
          </select>
        </div>

        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Возрастной рейтинг
      </p>
          <select type="text" name="ogr" placeholder="Команда переводчиков" class="form__input">
          @foreach(App\Models\ComicOgr::all() as $value)
            <option class="text-truncate" value="{{$value->id_ogr}}">{{$value->ogr}}</option>
          @endforeach
          </select>
        </div>
  </div><br>
      <div class="_3LRPmC9-gheW_3DDwziWi_0 Lw4uT0l7O6yniFgR8Z7zQ_0">
        <button class="_3KhAJh7zsjUJI-s2OGbY8v_0 button button_green">
      Отправить
    </button>
    <button class="button">
      Отменить
    </button>
  </div>
  </div>

              </div>
</section>
</form>  
  </div>
  
</div>

              </div>