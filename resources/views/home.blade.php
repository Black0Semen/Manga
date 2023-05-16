@extends('layouts')
@section('content')
<div class="page" id="main-page">
      <div class="page__inner">
        
        
        <div class="container container_offset">

  <div class="page__wrapper page__wrapper_left">
   
<section class="section paper">
  <div class="section__body">
    <h2 class="page__title">Заманчивое предложение</h2>
    <div class="hot-media-wrap">
      @if($comic != null)
      @foreach($comic as $value)
        <div class="hot-media-item media-card-wrap media-card-wrap_sm">
          <?php
          $title = str_slug($value->eng_title, '-');
          ?>
          <a href="/comic/{{$title}}" title="Читать последнюю главу. " class="hot-media-item__card media-card" style="background-image: url(&#39;{{asset('/storage/uploads/' . $value->image)}}&#39;)">
            <div class="media-card__caption">
              <div class="media-card__title">Том 2 Глава 61</div>
            </div>
          </a>
          <a href="/comic/{{$value->title}}" class="hot-media-item__name line-clamp link-default">{{$value->title}}</a>
        </div>
      @endforeach
      @endif
</section>
  
    

    <!-- Блок последних обновлений -->
     
      <section class="section paper tabs" id="latest-updates" data-tabs-id="tabs_1">
  <div class="section__header section__header_tabs">
    <strong class="section__header-title">Свежие главы</strong>
          
      </div>
  <div class="section__body">
    <div class="updates tabs__content tabs__content_show">
      @isset($lastUpdated)
    @foreach($lastUpdated as $value)
    <div class="updates__item">
        <div class="updates__left">
          <?php
          $title = str_slug($value->eng_title, '-');
          ?>
        @foreach(\App\Models\ComicType::WHERE('id_type','=',$value->id_type)->get() as $type)
                                    <div class="updates__type">{{$type->type}}</div>
                                    @endforeach
                                          <a href="/comic/{{$title}}">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;{{asset('/storage/uploads/'.$value->image)}}&quot;);" data-src="{{asset('/storage/uploads/'.$value->image)}}" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="/comic/{{$title}}">{{$value->title}}</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="comic/{{$title}}">{{$value->eng_title}}</a>
                </h6>
                          </div>
          </div>
          @foreach(App\Models\Glava::WHERE('id_comic','=',$value->id_comic)->orderBy('created_at', 'desc')->limit(1)->get() as $val)
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="/comic/{{$title}}/{{$val->id_glava}}" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том {{$val->tom}} Глава {{$val->number}}</strong>
                                                    </a>
                          </div>
                      </div>
                      @endforeach

        </div>
      </div>  
      @endforeach
      @endisset

      <div data-latest-updates="all"></div>
    </div>



    <div class="tabs__content">
      <div data-latest-updates="user"></div>
    </div>
      </div>
</section>
        
  </div>
  <div class="aside aside_right home-sidebar">

    
    

     
      
      

      <div class="aside__panel paper">
  <h3 class="aside__title">
    <span class="aside__title-inner">Популярное</span>
  </h3>
            @foreach($popular as $pop)
            <a href="https://mangalib.me/i-alone-level-up" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/MqLYFST4k4mY_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/i-alone-level-up/cover/MqLYFST4k4mY_thumb.jpg" alt="Na Honjaman Lebel-eob" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            {{$pop->title}}
                      </h3>
                  <h4 class="manga-list-item__subtitle">{{$pop->eng_title}}</h4>
                  <h4 class="manga-list-item__subtitle"> {{$pop->views_count}} <i class="fa fa-eye"></i></h4>
        </div>
      </a>
      @endforeach
          
      </div>



      <div class="aside__panel paper">
  <h3 class="aside__title">
        <span class="aside__title-inner">Новинки</span>
  </h3>
  @foreach($new as $new)
  <?php
  $title = str_slug($new->eng_title, '-');
  ?>
            <a href="comic/{{$title}}" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="{{asset('/storage/uploads/' . $new->image)}}" data-src="{{asset('/storage/uploads/' . $new->image)}}" alt="{{$new->eng_title}}" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            {{$new->title}}
                      </h3>
                  <h4 class="manga-list-item__subtitle">{{$new->eng_title}}</h4>
                </div>
      </a>
          @endforeach
      </div>
      </div>
</div>

              </div>