@extends('layouts')
@section('content')
@foreach($user as $value)
    <div class="page" id="main-page">
      <div class="page__inner">   
  <div class="container container_offset team-profile">
    <div class="aside aside_left">
            <div class="paper section-body">
        <div class="team-profile__section">
          <div class="team-profile-users">
  <div class="team-profile__title">В составе команд<span class="small text-muted ml-5">{{App\Models\UserTeam::WHERE('id_user','=',$value->id)->count()}}</span></div>
  @foreach(App\Models\UserTeam::WHERE('id_user','=',$value->id)->get() as $teams)
  @foreach(App\Models\Team::WHERE('id_team','=',$teams->id_team)->get() as $team)
      <a class="team-profile-users__item link-default " href="https://mangalib.me/user/317188">
      <img src="./команда_files/X2pD0Z5SIDKU.jpg" class="team-profile-users__avatar avatar avatar_circle">
      <div class="team-profile-users__content">
        <div class="team-profile-users__name text-truncate">{{$team->title}}</div>
      </div>
    </a>
    @endforeach
    @endforeach
  </div>
        </div>
      </div>
    </div>
    <div class="page__wrapper page__wrapper_right">
      <div class="section paper section-body">
        <div class="team-profile__name"><img src="./команда_files/X2pD0Z5SIDKU.jpg" class="team-profile-users__avatar avatar avatar_circle">{{$value->name}}<a href="https://mangalib.me/team/6122/edit" class="small ml-10 text-muted">Настройки</a></div>
          <div class="team-profile__section">
            <div class="team-profile-stats">
  <div class="team-profile-stats__item">
    <div class="team-profile-stats__value">86</div>
    <div class="team-profile-stats__name">Глав прочитано:</div>
  </div>
  <div class="team-profile-stats__item">
    <div class="team-profile-stats__value">6854496</div>
    <div class="team-profile-stats__name">Кол-во лайков:</div>
  </div>
  <div class="team-profile-stats__item">
    <div class="team-profile-stats__value">1764</div>
    <div class="team-profile-stats__name">Кол-во комментариев:</div>
  </div>
</div>
          </div>
                      <div class="team-profile__section">
              <div class="team-profile__title">О себе</div>
              <div class="team-profile-description">Кfkhg kjgfvkugfvujt</div>
              <div class="comment__head">
              <div class="media-name__main">Комментарии</div>
                                    </div>
      <div>
      <a href="/user/4059002" class="comment__user">
        <span class="comment__username text-truncate">
          1.На англе глав на 20 больше
        </span>
      </a> 
      <time class="comment__date-time">
        <time>
          3 месяца назад к комику "ИЫВРЕЬЫЗКЕЛХЗЕК"
        </time>
      </time>
      </div>
      <div>
      <a href="/user/4059002" class="comment__user">
        <span class="comment__username text-truncate">
          1.На англе глав на 20 больше
        </span>
      </a> 
      <time class="comment__date-time">
        <time>
          3 месяца назад к комику "ИЫВРЕЬЫЗКЕЛХЗЕК"
        </time>
      </time>
      </div>
      <div>
      <a href="/user/4059002" class="comment__user">
        <span class="comment__username text-truncate">
          1.На англе глав на 20 больше
        </span>
      </a> 
      <time class="comment__date-time">
        <time>
          3 месяца назад к комику "ИЫВРЕЬЫЗКЕЛХЗЕК"
        </time>
      </time>
      </div>
      <div>
      <a href="/user/4059002" class="comment__user">
        <span class="comment__username text-truncate">
          1.На англе глав на 20 больше
        </span>
      </a> 
      <time class="comment__date-time">
        <time>
          3 месяца назад к комику "ИЫВРЕЬЫЗКЕЛХЗЕК"
        </time>
      </time>
      </div>
      <div>
      <a href="/user/4059002" class="comment__user">
        <span class="comment__username text-truncate">
          1.На англе глав на 20 больше
        </span>
      </a> 
      <time class="comment__date-time">
        <time>
          3 месяца назад к комику "ИЫВРЕЬЫЗКЕЛХЗЕК"
        </time>
      </time>
      </div>
      <div>
      <a href="/user/4059002" class="comment__user">
        <span class="comment__username text-truncate">
          1.На англе глав на 20 больше
        </span>
      </a> 
      <time class="comment__date-time">
        <time>
          3 месяца назад к комику "ИЫВРЕЬЫЗКЕЛХЗЕК"
        </time>
      </time>
      </div>
      <div>
      <a href="/user/4059002" class="comment__user">
        <span class="comment__username text-truncate">
          1.На англе глав на 20 больше
        </span>
      </a> 
      <time class="comment__date-time">
        <time>
          3 месяца назад к комику "ИЫВРЕЬЫЗКЕЛХЗЕК"
        </time>
      </time>
      </div>
    </div> 
            </div>
                </div>
          </div>
  </div>
              </div>
    </div>
    @endforeach