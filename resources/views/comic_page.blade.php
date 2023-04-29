@extends('layouts')
@section('content')
@foreach($comic as $value)
    <div class="page">
      <div class="page__inner">
  <div class="container container_responsive">
    <div class="media-container">
      <div class="media-sidebar">
  <div>
        <div class="media-sidebar__cover paper">
      <img src="/" style="height: 30%;">
    </div>
  </div>

  <div class="media-sidebar__buttons">
                <button class="button button_block button_primary">
        <div>Добавить в список</div>
      </button>
      <button class="button button_block button_primary" onclick="window.location.href='/'">
        <div>Редактировать</div>
      </button>
      </div>
  <div class="media-info-list paper">
  @foreach(\App\Models\ComicType::WHERE('id_type','=',$value->id_type)->get() as $type)
    <a href="https://mangalib.me/manga-list?types%5B%5D=5" target="_blank" class="media-info-list__item">
      <div class="media-info-list__title">Тип</div>
      <div class="media-info-list__value">{{$type->type}}</div>
    </a>
  @endforeach
          <a href="https://mangalib.me/manga-list?year%5Bmin%5D=2023" target="_blank" class="media-info-list__item">
        <div class="media-info-list__title">Год релиза</div>
        <div class="media-info-list__value">{{$value->date}}</div>
      </a>
    
          <a href="https://mangalib.me/manga-list?status%5B%5D=1" target="_blank" class="media-info-list__item">
        <div class="media-info-list__title">Статус перевода</div>
        @foreach(App\Models\ComicStatus::WHERE('id_status','=',$value->status)->get() as $status)
        <div class="media-info-list__value text-capitalize">{{$status->status}}</div>
        @endforeach
      </a> 
              <div class="media-info-list__item">
       <div class="media-info-list__title">Просмотров</div>
       <div class="media-info-list__value text-capitalize">56 961</div>
     </div>
         
          <div class="media-info-list__item">
        <div class="media-info-list__title">Загружено глав</div>
        <div class="media-info-list__value text-capitalize">11</div>
        <div>
    <a href="/" data-place="left" aria-label="Добавить главу" class="media-chapter__icon media-chapter__icon_edit tooltip">
      Добавить главу
    </a> 
  </div>
      </div>
      </div>
</div>

      <div class="media-content media-content_side">
        <div id="media_type" data-type="manga" class="media-name section">
          <div class="media-name__body">
            <div class="media-name__main">{{$value->title}}</div>

            
                                          <div class="media-name__alt">The Duke’s Imposter Sister</div>
                                    </div>

          <div class="media-rating-wrap">
            <div class="media-rating media-rating_lg"> 
              <svg class="media-rating__star">
                <use xlink:href="#icon-star"></use>
              </svg>
              <div>{{$value->rating}}</div>
            </div>
            <button class="button" data-open-modal="#rating-modal">
                              <span>
                  Оценить
                </span>
                          </button>
          </div>
        </div>

        <div class="tabs paper" data-tabs-init="{ &quot;line&quot;: true, &quot;history&quot;: true }" data-tabs-id="tabs_1">
          <div class="media-tabs">
            <div class="tabs__wrapper">
              <ul class="tabs__list">
                <li class="tabs__item tabs__item_active" data-key="info">Информация</li>
                <li class="tabs__item tabs__item_active" data-key="chapters">Главы</li>
              <div class="tabs__line" style="display: block; width: 170px; transform: translateX(0px);"></div></ul>
            </div>
          </div>
          <div class="tabs__content">
            <div class="media-section media-section_info">
    <div class="media-description media-description_short">
      <div>
        {{$value->opisanie}}
      </div>
      <div class="media-tags">
        @foreach($tags as $tag)
        @foreach(App\Models\Tags::WHERE('id_tag','=',$tag->tag)->get() as $val)
                      <a href="" class="media-tag-item ">{{$val->tag}}</a>
                      @endforeach
                      @endforeach
          </div>
  </div>

  <div class="media-section media-section_teams">
    <div class="media-section__head">
      <div class="media-section__title">Переводчики</div>
    </div>

    <div class="team-list">
      @foreach(App\Models\Team::WHERE('title','=',$value->team)->get() as $command)
              <a href="/team/{{$command->id_team}}" class="team-list-item team-list-item_xs">
          <div class="team-list-item__cover" style="background-image: url(https://mangalib.me/uploads/team/melinoie-team/cover/evgbEDDlXq_250x350.jpg?)"></div>
          <div class="team-list-item__name">
          {{$command->title}}
          </div>
        </a>
          </div>
          @endforeach
       
  </div>

            
                          <div class="media-section media-section_slider" data-slider="similar">
  <div class="media-section__head">
    <div class="media-section__title">
      Похожее
          </div>
  </div>

  <div class="media-slider is-draggable">
    <div class="media-slider__wrap" style="transform: translate3d(0%, 0px, 0px);">
                      <div class="media-slider__item  media-slider__item_rate ">
                    <a href="https://mangalib.me/onnal-abaga-natanassda" class="manga-list-item manga-list-item_inline" title="Однажды появился мой отец">
            <div class="manga-list-item__cover" style="background-image: url(https://cover.imglib.info/uploads/cover/onnal-abaga-natanassda/cover/Vb7jNy6uxB03_thumb.jpg);"></div>
            <div class="manga-list-item__body">
              <div class="manga-list-item__name">
                Однажды появился мой отец
              </div>
              <div class="manga-list-item__meta">
                <span></span>
                <span></span>
              </div>
            </div>
                      </a>
        </div>
          </div>
  </div>
</div>
          <!-- START:Комментарии -->
          <h2 class="manga-search__title">
            <span>Комментарии</span>
          </h2>
          <div>
            <div class="media-section paper">             
                <section>
                <div class="comments__form">
                  <div class="comment-reply">
                    <div aria-placeholder="Написать комментарий..." class="comment-reply__editor is-dirty" contenteditable="true">
                      <div>
                        <br>
                      </div>
                    </div> 
                    <div class="comment-reply__controls">
                      <div class="comment-reply__right">
                        <!----> 
                        <button tabindex="-1" class="comment-reply__send button_md button button_primary">
                         Отправить
                        </button>
                      </div> 
                    </div>
                  </div>
                </div>
<!----> <!----> 
<div class="comment">
  <div class="comment__body">
    <div class="comment__head">
      <a href="/user/4059002" class="comment__user">
        <img src="/uploads/users/4059002/KZMVofNImN9A.gif" alt="4ернобородый" class="comment__avatar"> 
        <span class="comment__username text-truncate">
          4ернобородый
        </span>
      </a> 
      <time class="comment__date-time">
        <time>
          3 месяца назад
        </time>
      </time>
    </div> 
    <div class="comment__content">
      <div>
        На англе глав на 20 больше
      </div>
    </div> 
    <!----> 
    <div class="comment__controls">
      <div class="comment__rating">
        <button data-action="1" class="button comment__rating-action">
          <svg class="comment__rating-icon">
            <use xlink:href="#icon-arrow-up">

            </use>
          </svg>
        </button> 
        <div data-vote="3_5" class="comment__rating-value">
          -2
        </div> 
        <button data-action="0" class="button comment__rating-action">
          <svg class="comment__rating-icon">
            <use xlink:href="#icon-arrow-down">

            </use>
          </svg>
        </button>
      </div>
    </div> 
    <!---->
  </div> 
  <!----> <!---->
</div>
</div>
</div> 
<!---->
</div>
</div>
<!-- START:Главы -->
<div class="tabs__content">
  <div class="media-chapters paper section">
    <div class="media-section media-chapters-list">
      <div class="vue-recycle-scroller ready page-mode direction-vertical">
      <div class="vue-recycle-scroller__item-wrapper" style="min-height: 500px;">
      <div class="vue-recycle-scroller__item-view" style="transform: translateY(0px);">
      <div class="media-chapter">
        <div class="media-chapter__body">
        <div class="media-chapter__name text-truncate">
            <a href="/the-magic-chef-of-ice-and-fire/v2/c73?ui=5740535" class="link-default">
        Том 2 Глава 73 - Меч Сюаньцзи
      </a>
    </div> 
    <div class="media-chapter__username">
      <a href="/user/1063136" class="link-default">
        Ryslan31
      </a>
    </div> <!----> 
    <div class="media-chapter__date">
      20.04.2023
    </div>
  </div> 
  <div class="media-chapter__actions">
    <a href="/manga/the-magic-chef-of-ice-and-fire/chapter/2416092" data-place="left" aria-label="Редактировать главу" class="media-chapter__icon media-chapter__icon_edit tooltip">
      +
    </a> 
    <button data-place="left" aria-label="Удалить главу" class="button media-chapter__icon media-chapter__icon_edit tooltip">
      х
    </button> 
  </div>
</div>
</div>
</div> 
</div>
</div>
                      </div>
          <!-- END:Главы -->
</section>
                
                          </div>
          </div>
          <!-- END:Комментарии -->
          </div>
        </div>
    </div>
  </div>

              </div>
    </div>

    <div class="page-modals" tabindex="-1">
  <div class="modal" id="rating-modal">
  <div class="modal__inner" style="width: 263px;">
    <div class="modal__content">
      <div class="modal__header">
        <h4 class="modal__title text-center">Оценка</h4>
      </div>
      <div class="modal__body">
        <div class="text-center">
                                  <span class="rating__star rating__current" data-score="10">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                                  <span class="rating__star rating__current" data-score="9">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                                  <span class="rating__star rating__current" data-score="8">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                                  <span class="rating__star rating__current" data-score="7">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                                  <span class="rating__star rating__current" data-score="6">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                                  <span class="rating__star rating__current" data-score="5">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                                  <span class="rating__star rating__current" data-score="4">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                                  <span class="rating__star rating__current" data-score="3">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                                  <span class="rating__star rating__current" data-score="2">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                                  <span class="rating__star rating__current" data-score="1">
              <svg>
                <use xlink:href="#icon-star"></use>
              </svg>
            </span>
                  </div>

        <div class="text-center hidden">
          <div class="pb-10">Рейтинг от меня: <span data-user-score="">0</span></div>
          <button class="button" data-score="0">Удалить оценку</button>
        </div>
      </div>
    </div>
  </div>
</div>
            </div>
            @endforeach
