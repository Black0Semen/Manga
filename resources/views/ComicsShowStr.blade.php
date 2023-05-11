@extends('layouts')
@section('content')
<div class="page" id="main-page">
      <div class="page__inner">
          <div class="container container_offset container_responsive">
    <div class=" page__wrapper page__wrapper_left  paper manga-search">
    <div class="reader">


            <div class="reader-view">
            <div id="media_type" data-type="manga" class="media-name section">
          <div class="media-name__body">
            @foreach($comic as $comic)
            <div class="media-name__main">{{$comic->title}}</div>
            
                                          <div class="media-name__alt">{{$comic->eng_title}}</div>
                                          
                                    </div>
                                  
          <div class="media-rating-wrap">
            <div> 
              @foreach($glava as $glava)
              <div class="media-name__main">Глава {{$glava->number}}</div>
            </div>
          </div>

        </div>
          <div class="reader-pages">
            <label class="button reader-pages__label reader-footer__btn" for="reader-pages">
              <span>Глава {{$glava->number}} / {{App\Models\Glava::WHERE('id_comic','=',$comic->id_comic)->count()}}</span>
            </label>
            <select id="reader-pages"><option value="1" selected="true">Глава {{$glava->number}}</option></select>
          </div> 
          @endforeach
          @endforeach
            <div class="reader-footer">         
        </div>
      <div class="reader-view__container" style="max-width: 1536px;">
                      <div class="reader-view__wrap" data-p="1" wfd-invisible="true">                     
                        @foreach($photo as $value)
                        <img src="{{ asset('/storage/glava/' . $title . '/' .$id.'/'.$value->photo) }}">
                        @endforeach
                      </div>
                    </div>
    </div>
    
    <div class="container container_center">
  <div class="reader-review has-team">
  @foreach($team as $team)
                <div class="reader-review-team">
        <div class="reader-review-team__covers">
                            <div style="background-image: url(https://mangalib.me/uploads/team/slivkateam/cover/CvhRCohAKTBu_250x350.jpg?)" class="reader-review-team__cover"></div>
                        </div>
        <span class="reader-review-team__body">
          <div class="reader-review-team__title text-muted small text-truncate">Команда</div>
          <div class="reader-review-team__name text-truncate">
                                <span>
                <a class="link-default" href="{{ asset('/team/'.$team->id_team) }}">
                  {{$team->title}}
                </a>
              </span>
                            </div>
        </span>
  </div>
  @endforeach
  <div class="comment__controls">
      <div>
      <div class="comment__rating-value">
           Поддержи главу
        </div>
        <button data-action="1" class="button comment__rating-action">
        <span>+</span>
        </button>  
        <span>500</span>
        <button data-action="0" class="button comment__rating-action">
        <span>-</span>
        </button> 
      </div>
    </div> 
</div>
  <!-- Like end -->
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
</div>
    </div>

        
    <div class="tabs__content">
      <div data-latest-updates="user"></div>
    </div>
      </div>  
    </div>