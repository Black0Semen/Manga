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
            <div class="media-name__main">Добавление команды</div>
                                    </div>
      <div>
      <div class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
    <p>
        Обложка
      </p>
    <input type="file" class="form__input" name="image" id="image">
      </div>
        <div>
        <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
      Название
      </p>
          <input type="text" placeholder="Название" class="form__input" name="title" id="title"> 
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
      Ссылка на группу
      </p>
          <input type="text" placeholder="Ссылка на группу" class="form__input" name="social_vk" id="social_vk"> 
          <p class="text-center text-muted _3qjIVhHEptuufiVk_wKbPe_0">
        Описание
      </p>
          <textarea class="form__input manga-search__input" name="opisanie" id="opisanie" style="resize: none; height: 100px ; "></textarea>
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
</form>
        
  </div>
  
</div>

              </div>