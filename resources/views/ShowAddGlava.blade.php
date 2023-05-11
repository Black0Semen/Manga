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
@foreach($comic as $value)
      <section class="section paper tabs" id="latest-updates" data-tabs-id="tabs_1">
      <div class="page__inner">
        
        
          <div class="container container_responsive container_offset">
    <div class="paper">
    <div class="media-name__body">
            <div class="media-name__main">Добавление главы к комиксу</div>
            
                                          <div class="media-name__alt">{{$value->title}}</div>
                                    </div>
      <div>
        <div>
          <input type="text" name="title" placeholder="Название главы" class="form__input"> 
          <input type="text" name="tom" placeholder="Том" class="form__input"> 
          <input type="text" name="number" placeholder="Номер главы" class="form__input">
        </div> 
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Команда
      </p>

          <select type="text" placeholder="Команда переводчиков" class="form__input">
          @foreach(App\Models\Team::all() as $value)
            <option class="text-truncate" value="{{$value->id_team}}">{{$value->title}}</option>
          @endforeach
          </select>

        </div>
  </div>
    <div class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
    <p>
        Загрузить файл
      </p>
    <input type="file" name="image[]" multiple placeholder="Глава" class="form__input">
      </div>
      <div class="_3LRPmC9-gheW_3DDwziWi_0 Lw4uT0l7O6yniFgR8Z7zQ_0">
        <button class="_3KhAJh7zsjUJI-s2OGbY8v_0 button button_green">
      Сохранить
    </button>
    <button class="button">
      Отменить
    </button>
  </div>
  </div>

              </div>
</section>
@endforeach
</form>
  </div>
  
</div>

              </div>
