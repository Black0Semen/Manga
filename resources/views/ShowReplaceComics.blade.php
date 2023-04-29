@extends('layouts')
@section('content')
    <div class="page" id="main-page">
	<div class="page__inner">
        
        
        <div class="container container_offset">

  <div class="page__wrapper page__wrapper_left">
   
    <section class="section paper">
  
</section>
  
    

    
     
      <section class="section paper tabs" id="latest-updates" data-tabs-id="tabs_1">
      <div class="page__inner">
        
        
          <div class="container container_responsive container_offset">
    <div class="paper">
    <div class="media-name__body">
            <div class="media-name__main">Редактирование комикса</div>
            
                                          <div class="media-name__alt">The Duke’s Imposter Sister</div>
                                    </div>
      <div>
      <div class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
    <p>
        Обложка
      </p>
    <input type="file" placeholder="Обложка" class="form__input">
      </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Оригинальное название
      </p>
          <input type="text" placeholder="Оригинальное название" class="form__input"> 
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Русскоязычное название
      </p>
          <input type="text" placeholder="Русскоязычное название" class="form__input"> 
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Год релиза
      </p>
          <input type="text" placeholder="Год релиза" class="form__input">
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Автор
      </p>
          <input type="text" placeholder="Автор" class="form__input">
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Художник
      </p>
          <input type="text" placeholder="Художние" class="form__input">
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Издатель
      </p>
          <input type="text" placeholder="Издатель" class="form__input">
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Ссылка на оригинал
      </p>
          <input type="text" placeholder="Ссылка на оригинал" class="form__input">
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Описание
      </p>
          <textarea class="form__input manga-search__input" style="resize: none; height: 100px ; "></textarea>
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
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="1"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="2"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="3"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="4"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="5"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">            
              <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="6"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
          </li> 
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
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="1"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="2"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="3"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="4"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">
            <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="5"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
            </li>
            <li class="menu__item">            
              <label class="control search-filter__checkbox">
              <input type="checkbox" class="control__input" value="6"> 
              <span class="control__indicator control__indicator_checkbox control__indicator_sm">
              </span> 
              <span class="control__text">
                Манга
              </span>
            </label>
          </li> 
                          </div></div></div></div>
          </div>
</ul>
          </div>
        </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Статус
      </p>
          <select type="text" placeholder="Статус" class="form__input">
            <option class="text-truncate" value="1">Rescue Team</option>
            <option class="text-truncate" value="2">Rescue555555555 Team</option>
            <option class="text-truncate" value="3">Rescue 444444Team</option>
          </select>
        </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Статус перевода
      </p>
          <select type="text" placeholder="Статус перевода" class="form__input">
            <option class="text-truncate" value="1">Rescue Team</option>
            <option class="text-truncate" value="2">Rescue555555555 Team</option>
            <option class="text-truncate" value="3">Rescue 444444Team</option>
          </select>
        </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Тип
      </p>
          <select type="text" placeholder="Тип" class="form__input">
            <option class="text-truncate" value="1">Rescue Team</option>
            <option class="text-truncate" value="2">Rescue555555555 Team</option>
            <option class="text-truncate" value="3">Rescue 444444Team</option>
          </select>
        </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Возрастной рейтинг
      </p>
          <select type="text" placeholder="Возрастной рейтинг" class="form__input">
            <option class="text-truncate" value="1">Rescue Team</option>
            <option class="text-truncate" value="2">Rescue555555555 Team</option>
            <option class="text-truncate" value="3">Rescue 444444Team</option>
          </select>
        </div>
  </div>
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
        
  </div>
  
</div>

              </div>