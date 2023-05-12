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
          <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>
        </div>

        @foreach(App\Models\Janr::all() as $value)       
              <input type="checkbox" name="janrChoose[]" value="{{$value->id_janr}}"> {{$value->janr}}
            @endforeach
        <div class="search-filter-submenu">
          <div class="search-filter-submenu__name">
            Теги
          </div> 
          <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
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
        Команда переводчиков
      </p>
          <select type="text" name="type" placeholder="Команда переводчиков" class="form__input">
          @foreach(App\Models\Team::all() as $value)
            <option class="text-truncate" value="{{$value->id_team}}">{{$value->title}}</option>
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