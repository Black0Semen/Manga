@extends('layouts')
@section('content')
    <div class="page" id="main-page">
	<div class="page__inner">
        
        
        <div class="container container_offset">

  <div class="page__wrapper page__wrapper_left">
   
    <section class="section paper">
  
</section>
  
    

    
     @foreach($comic as $value)
      <section class="section paper tabs" id="latest-updates" data-tabs-id="tabs_1">
      <div class="page__inner">
        
        
          <div class="container container_responsive container_offset">
    <div class="paper">
    <div class="media-name__body">
            <div class="media-name__main">Редактирование комикса</div>
            
                                          <div class="media-name__alt">{{$value->eng_title}}</div>
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
          <input type="text" placeholder="Оригинальное название" value="{{$value->orig_title}}" class="form__input"> 
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Русскоязычное название
      </p>
          <input type="text" placeholder="Русскоязычное название" value="{{$value->title}} "class="form__input"> 
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Год релиза
      </p>
          <input type="text" placeholder="Год релиза" value="{{$value->date}}" class="form__input">
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Ссылка на оригинал
      </p>
          <input type="text" placeholder="Ссылка на оригинал" value="{{$value->link_original}}" class="form__input">
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Описание
      </p>
          <textarea class="form__input manga-search__input" style="resize: none; height: 100px ; ">{{$value->opisanie}}</textarea>
        </div> 
        <div class="search-filter-submenu">
          <div class="search-filter-submenu__name">
            Жанры
          </div> 
          <div class="checkselect">
          @foreach(App\Models\Janr::all() as $janr)
        
          @if(in_array($janr->id_janr, $alljanr))
          <label><input type="checkbox" name="chooseJanr[]" value="{{$janr->id_janr}}" checked> {{$janr->janr}}</label>
          @else()
          <label><input type="checkbox" name="chooseJanr[]" value="{{$janr->id_janr}}">{{$janr->janr}} </label>
          @endif
        
          @endforeach
	</div>
        </div>
        <div class="search-filter-submenu">
          <div class="search-filter-submenu__name">
            Теги
          </div> 
          <div class="checkselect">
          @foreach(App\Models\Tags::all() as $tag)
          @if(in_array($tag->id_tag, $alltags))
		      <label><input type="checkbox" name="chooseTags[]" value="{{$tag->id_tag}}" checked> {{$tag->tag}}</label>
          @else()
          <label><input type="checkbox" name="chooseTags[]" value="{{$tag->id_tag}}"> {{$tag->tag}}</label>
          @endif
    @endforeach
	</div>
        </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Статус перевода
      </p>

          <select type="text" placeholder="Статус перевода" class="form__input">
            @foreach(App\Models\ComicStatus::all() as $status)
            <option class="text-truncate" value="{{$status->id_status}}">{{$status->status}}</option>
            @endforeach
          </select>
        </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Тип
      </p>
          <select type="text" placeholder="Тип" class="form__input">
          @foreach(App\Models\ComicType::all() as $type)
            <option class="text-truncate" value="{{$type->id_type}}">{{$type->type}}</option>
            @endforeach
          </select>
        </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Возрастной рейтинг
      </p>
          <select type="text" placeholder="Возрастной рейтинг" class="form__input">
          @foreach(App\Models\ComicOgr::all() as $ogr)
            <option class="text-truncate" value="{{$ogr->id_ogr}}">{{$ogr->ogr}}</option>
          @endforeach
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
@endforeach
        
  </div>
  
</div>

              </div>