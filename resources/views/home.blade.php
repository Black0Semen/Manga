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
      @foreach($comic as $value)
        <div class="hot-media-item media-card-wrap media-card-wrap_sm">
          <a href="/comic/{{$value->id_comic}}" title="Читать последнюю главу. " class="hot-media-item__card media-card" style="background-image: url(&#39;https://cover.imglib.info/uploads/cover/twice-princess/cover/dNiTGN5LQRBd_250x350.jpg&#39;)">
            <div class="media-card__caption">
              <div class="media-card__title">Том 2 Глава 61</div>
            </div>
          </a>
          <a href="/comic/{{$value->id_comic}}" class="hot-media-item__name line-clamp link-default">{{$value->title}}</a>
        </div>
      @endforeach
</section>
  
    

    
     
      <section class="section paper tabs" id="latest-updates" data-tabs-id="tabs_1">
  <div class="section__header section__header_tabs">
    <strong class="section__header-title">Свежие главы</strong>
          
      </div>
  <div class="section__body">
    <div class="updates tabs__content tabs__content_show">
                  <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/seed">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/seed/cover/2jJPfrsBbeYP_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/seed/cover/2jJPfrsBbeYP_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/seed">Семя</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/seed">Seed</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/seed/v2/c56?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 56</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/twice-princess">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/twice-princess/cover/dNiTGN5LQRBd_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/twice-princess/cover/dNiTGN5LQRBd_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/twice-princess">Двуликая принцесса</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/twice-princess">du eolgului hwangnyeo</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/twice-princess/v2/c61?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 61</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/pumgyeog-eul-baebanhand">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/pumgyeog-eul-baebanhand/cover/whpKGEBIheNJ_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/pumgyeog-eul-baebanhand/cover/whpKGEBIheNJ_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/pumgyeog-eul-baebanhand">Поступиться гордостью</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/pumgyeog-eul-baebanhand">pumgyeog-eul baebanhand</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/pumgyeog-eul-baebanhand/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/kyosei-tensei">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/kyosei-tensei/cover/vDLodanNlad1_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/kyosei-tensei/cover/vDLodanNlad1_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/kyosei-tensei">Кастрация: Возрождение</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/kyosei-tensei">Kyosei Tensei</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/kyosei-tensei/v2/c12?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 12</strong>
                                      <span class="updates__chapter-name text-truncate">Место которому принадлежим.</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/princess-strategy">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/princess-strategy/cover/V6GeAKNIwdow_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/princess-strategy/cover/V6GeAKNIwdow_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/princess-strategy">Завоевать сердце папочки. Система принцессы</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/princess-strategy">Xitong zhi xiao gongzhu gongue</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/princess-strategy/v1/c51?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 51</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/bing-uijaleul-wihan-teughye">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/bing-uijaleul-wihan-teughye/cover/IRp6A65CpNl9_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/bing-uijaleul-wihan-teughye/cover/IRp6A65CpNl9_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/bing-uijaleul-wihan-teughye">Привилегия попаданки</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/bing-uijaleul-wihan-teughye">bing-uijaleul wihan teughye</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/bing-uijaleul-wihan-teughye/v2/c45?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 45</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/banjjog">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/banjjog/cover/yeFHYnEH1mhb_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/banjjog/cover/yeFHYnEH1mhb_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/banjjog">Обезображенная половина</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/banjjog">banjjog</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/banjjog/v1/c26?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 26</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/oddess-of-victory-nikke-official-four-panel-comics">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/oddess-of-victory-nikke-official-four-panel-comics/cover/OZaL6ff0zr46_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/oddess-of-victory-nikke-official-four-panel-comics/cover/OZaL6ff0zr46_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/oddess-of-victory-nikke-official-four-panel-comics">GODDESS OF VICTORY: NIKKE Официальный комикс</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/oddess-of-victory-nikke-official-four-panel-comics">GODDESS OF VICTORY: NIKKE Official Four-Panel Comics</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/oddess-of-victory-nikke-official-four-panel-comics/v1/c11?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 11</strong>
                                      <span class="updates__chapter-name text-truncate">Цель на год</span>
                                                    </a>
                              <a href="https://mangalib.me/oddess-of-victory-nikke-official-four-panel-comics/v1/c10?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 10</strong>
                                      <span class="updates__chapter-name text-truncate">Счастливого Рождества</span>
                                                    </a>
                              <a href="https://mangalib.me/oddess-of-victory-nikke-official-four-panel-comics/v1/c9?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 9</strong>
                                      <span class="updates__chapter-name text-truncate">Будни  генерального  директора</span>
                                                    </a>
                              <a href="https://mangalib.me/oddess-of-victory-nikke-official-four-panel-comics/v1/c8?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 8</strong>
                                      <span class="updates__chapter-name text-truncate">Пожертвования принадлежат всем</span>
                                                    </a>
                          </div>
                                        <button class="updates__more" data-text="свернуть">показать еще 1 главу</button>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/kalkkeut-e-ibsul-webtoon">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/kalkkeut-e-ibsul-webtoon/cover/BPk0F5l4jCks_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/kalkkeut-e-ibsul-webtoon/cover/BPk0F5l4jCks_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/kalkkeut-e-ibsul-webtoon">Губы на острие меча</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/kalkkeut-e-ibsul-webtoon">kalkkeut-e ibsul (webtoon)</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/kalkkeut-e-ibsul-webtoon/v1/c15?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 15</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/nega-juggileul-balal-ttaega-iss-eossda">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/nega-juggileul-balal-ttaega-iss-eossda/cover/NwJn3HLZ9had_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/nega-juggileul-balal-ttaega-iss-eossda/cover/NwJn3HLZ9had_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/nega-juggileul-balal-ttaega-iss-eossda">Были времена, когда я желал тебе смерти</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/nega-juggileul-balal-ttaega-iss-eossda">nega juggileul balal ttaega iss-eossda</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/nega-juggileul-balal-ttaega-iss-eossda/v2/c62?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 62</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/player">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/player/cover/cMckCEFFKdGM_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/player/cover/cMckCEFFKdGM_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/player">Игрок</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/player">Peulleieo</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/player/v1/c86?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 86</strong>
                                                    </a>
                              <a href="https://mangalib.me/player/v1/c85?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 85</strong>
                                                    </a>
                              <a href="https://mangalib.me/player/v1/c84?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 84</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/wo-de-ka-pai-keyi-wuxian-hecheng">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/wo-de-ka-pai-keyi-wuxian-hecheng/cover/NCbEDPGrD7Aj_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/wo-de-ka-pai-keyi-wuxian-hecheng/cover/NCbEDPGrD7Aj_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/wo-de-ka-pai-keyi-wuxian-hecheng">Мои карты можно синтезировать бесконечно</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/wo-de-ka-pai-keyi-wuxian-hecheng">Wo De Ka Pai Keyi Wuxian Hecheng</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/wo-de-ka-pai-keyi-wuxian-hecheng/v1/c9?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 9</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/sakuya-no-sex-ga-saikou-datta-kara-ore-to-kekkon-shiyou">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/sakuya-no-sex-ga-saikou-datta-kara-ore-to-kekkon-shiyou/cover/5vnTidS8D6ig_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/sakuya-no-sex-ga-saikou-datta-kara-ore-to-kekkon-shiyou/cover/5vnTidS8D6ig_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/sakuya-no-sex-ga-saikou-datta-kara-ore-to-kekkon-shiyou">Ты мой лучший партнёр, поэтому выходи за меня</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/sakuya-no-sex-ga-saikou-datta-kara-ore-to-kekkon-shiyou">Sakuya no Sex ga Saikou datta kara, Ore to Kekkon Shiyou</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/sakuya-no-sex-ga-saikou-datta-kara-ore-to-kekkon-shiyou/v1/c8?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 8</strong>
                                                    </a>
                              <a href="https://mangalib.me/sakuya-no-sex-ga-saikou-datta-kara-ore-to-kekkon-shiyou/v1/c7?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 7</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/gto-paradise-lost">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/gto-paradise-lost/cover/HthNv4WbCGIO_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/gto-paradise-lost/cover/HthNv4WbCGIO_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/gto-paradise-lost">Крутой Учитель Онидзука: Потерянный Рай</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/gto-paradise-lost">GTO - Paradise Lost</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/gto-paradise-lost/v18/c151?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 18 Глава 151</strong>
                                      <span class="updates__chapter-name text-truncate">Команда Онидзуки, врываемся!</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/chun-no-ongaeshi">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/chun-no-ongaeshi/cover/bOBhZiOtZvVK_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/chun-no-ongaeshi/cover/bOBhZiOtZvVK_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/chun-no-ongaeshi">Чун возвращается!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/chun-no-ongaeshi">Chun no Ongaeshi</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/chun-no-ongaeshi/v1/c5?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 5</strong>
                                      <span class="updates__chapter-name text-truncate">Воссоединение</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/isekai-saikou-no-kizoku-harem-wo-fuyasu-hodo-tsuyoku-naru">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/isekai-saikou-no-kizoku-harem-wo-fuyasu-hodo-tsuyoku-naru/cover/Sl5PobHY3yf4_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/isekai-saikou-no-kizoku-harem-wo-fuyasu-hodo-tsuyoku-naru/cover/Sl5PobHY3yf4_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/isekai-saikou-no-kizoku-harem-wo-fuyasu-hodo-tsuyoku-naru">Лучший дворянин в другом мире: чем больше мой гарем, тем сильнее я</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/isekai-saikou-no-kizoku-harem-wo-fuyasu-hodo-tsuyoku-naru">Isekai Saikou no Kizoku, Harem wo Fuyasu Hodo Tsuyoku Naru</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/isekai-saikou-no-kizoku-harem-wo-fuyasu-hodo-tsuyoku-naru/v1/c7?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 7</strong>
                                                    </a>
                              <a href="https://mangalib.me/isekai-saikou-no-kizoku-harem-wo-fuyasu-hodo-tsuyoku-naru/v1/c6?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 6</strong>
                                                    </a>
                              <a href="https://mangalib.me/isekai-saikou-no-kizoku-harem-wo-fuyasu-hodo-tsuyoku-naru/v1/c5?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 5</strong>
                                                    </a>
                              <a href="https://mangalib.me/isekai-saikou-no-kizoku-harem-wo-fuyasu-hodo-tsuyoku-naru/v1/c4?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 4</strong>
                                                    </a>
                          </div>
                                        <button class="updates__more" data-text="свернуть">показать еще 1 главу</button>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/samehada-otoko-to-momojiri-onna">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/samehada-otoko-to-momojiri-onna/cover/pzIhKSowyc3z_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/samehada-otoko-to-momojiri-onna/cover/pzIhKSowyc3z_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/samehada-otoko-to-momojiri-onna">Мужчина с кожей акулы и девушка с персиковым бедром</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/samehada-otoko-to-momojiri-onna">Samehada-Otoko to Momojiri-Onna</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/samehada-otoko-to-momojiri-onna/v1/c2?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 2</strong>
                                      <span class="updates__chapter-name text-truncate">Часть 2</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/tengoku-de-akuma-ga-boku-wo-miwaku-suru">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/tengoku-de-akuma-ga-boku-wo-miwaku-suru/cover/YN0F9fV3COFE_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/tengoku-de-akuma-ga-boku-wo-miwaku-suru/cover/YN0F9fV3COFE_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/tengoku-de-akuma-ga-boku-wo-miwaku-suru">Дьявол очаровал меня в райской темнице</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/tengoku-de-akuma-ga-boku-wo-miwaku-suru">Tengoku de Akuma ga Boku wo Miwaku Suru</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/tengoku-de-akuma-ga-boku-wo-miwaku-suru/v1/c4?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 4</strong>
                                      <span class="updates__chapter-name text-truncate">Джира</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/agnyeoneun-malioneteu">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/agnyeoneun-malioneteu/cover/X3JODkP7qquO_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/agnyeoneun-malioneteu/cover/X3JODkP7qquO_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/agnyeoneun-malioneteu">Злодейка-марионетка</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/agnyeoneun-malioneteu">Agnyeoneun Malioneteu</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/agnyeoneun-malioneteu/v2/c78?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 78</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/skip-to-loafer">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/skip-to-loafer/cover/5mg0nWTLS26Q_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/skip-to-loafer/cover/5mg0nWTLS26Q_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/skip-to-loafer">Долой безделье!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/skip-to-loafer">Skip to Loafer</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/skip-to-loafer/v6/c31?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 6 Глава 31</strong>
                                      <span class="updates__chapter-name text-truncate">Волнительный день святого Валентина, часть 2</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/kokuyo-chan-to-shiratama-kun-no-kawatta-kankei">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/kokuyo-chan-to-shiratama-kun-no-kawatta-kankei/cover/8qaVv0kYVZr9_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/kokuyo-chan-to-shiratama-kun-no-kawatta-kankei/cover/8qaVv0kYVZr9_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/kokuyo-chan-to-shiratama-kun-no-kawatta-kankei">Необычные отношения между Кокуё-чан и Ширатама-куном.</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/kokuyo-chan-to-shiratama-kun-no-kawatta-kankei">Kokuyo-chan to Shiratama-kun no Kawatta Kankei</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/kokuyo-chan-to-shiratama-kun-no-kawatta-kankei/v1/c2?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 2</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/lag">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/lag/cover/tWMEoFdDuuWE_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/lag/cover/tWMEoFdDuuWE_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/lag">Безграничные навыки</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/lag">lag</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/lag/v1/c38?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 38</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">OEL-манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/bond-by-fire">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/bond-by-fire/cover/yXpQSFI0dSPp_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/bond-by-fire/cover/yXpQSFI0dSPp_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/bond-by-fire">Огненная связь</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/bond-by-fire">Bond by Fire</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/bond-by-fire/v1/c5.1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 5.1</strong>
                                      <span class="updates__chapter-name text-truncate">Цыплята</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/road-to-kingdom">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/road-to-kingdom/cover/aBqB3yoIz3bw_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/road-to-kingdom/cover/aBqB3yoIz3bw_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/road-to-kingdom">Дорога в королевство</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/road-to-kingdom">Oukoku e Tsuzuku Michi</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/road-to-kingdom/v8/c50?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 8 Глава 50</strong>
                                      <span class="updates__chapter-name text-truncate">Решающая битва. Часть 3.</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/yeosinnim-ui-holang-i-gonglyagbeob">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/yeosinnim-ui-holang-i-gonglyagbeob/cover/WJQ6EMtqUCv5_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/yeosinnim-ui-holang-i-gonglyagbeob/cover/WJQ6EMtqUCv5_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/yeosinnim-ui-holang-i-gonglyagbeob">Стратегия богини по захвату тигров</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/yeosinnim-ui-holang-i-gonglyagbeob">yeosinnim-ui holang-i gonglyagbeob</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/yeosinnim-ui-holang-i-gonglyagbeob/v1/c6?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 6</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/hige-wo-soru-soshite-joshikosei-wo-hirou">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/hige-wo-soru-soshite-joshikosei-wo-hirou/cover/oUfPmTHnA7ln_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/hige-wo-soru-soshite-joshikosei-wo-hirou/cover/oUfPmTHnA7ln_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/hige-wo-soru-soshite-joshikosei-wo-hirou">Я побрился. Затем привёл старшеклассницу домой</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/hige-wo-soru-soshite-joshikosei-wo-hirou">Hige Wo Soru. Soshite Joshikosei Wo Hirou</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/hige-wo-soru-soshite-joshikosei-wo-hirou/v6/c35?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 6 Глава 35</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/sunao-osananajimi-chan">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/sunao-osananajimi-chan/cover/vQ1x2O8oZulh_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/sunao-osananajimi-chan/cover/vQ1x2O8oZulh_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/sunao-osananajimi-chan">Верная подруга детства</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/sunao-osananajimi-chan">Sunao Osananajimi-chan</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/sunao-osananajimi-chan/v1/c4?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 4</strong>
                                      <span class="updates__chapter-name text-truncate">Подруга детства, которая пишет "жена" в опросе о будущей работе</span>
                                                    </a>
                              <a href="https://mangalib.me/sunao-osananajimi-chan/v1/c3?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 3</strong>
                                      <span class="updates__chapter-name text-truncate">Друг детства, который готовит для нее бентос</span>
                                                    </a>
                              <a href="https://mangalib.me/sunao-osananajimi-chan/v1/c2?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 2</strong>
                                      <span class="updates__chapter-name text-truncate">Друзья детства, которые рады, что на них смотрят как на пару</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/meshinuma">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/meshinuma/cover/tKRC8csPOf55_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/meshinuma/cover/tKRC8csPOf55_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/meshinuma">Мешинума</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/meshinuma">Meshinuma</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/meshinuma/v4/c48?bid=8287&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 4 Глава 48</strong>
                                      <span class="updates__chapter-name text-truncate">Очень большой эхомаки… Приятного аппетита.</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/other-world-warrior">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/other-world-warrior/cover/BCgmadOqb0Lu_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/other-world-warrior/cover/BCgmadOqb0Lu_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/other-world-warrior">Воин из иного мира</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/other-world-warrior">Ichawon yongbyeong</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/other-world-warrior/v5/c201?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 5 Глава 201</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/tora-wa-ryuu-wo-mada-tabenai">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/tora-wa-ryuu-wo-mada-tabenai/cover/E3Kq8TE20bes_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/tora-wa-ryuu-wo-mada-tabenai/cover/E3Kq8TE20bes_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/tora-wa-ryuu-wo-mada-tabenai">Тигр еще не съел дракона</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/tora-wa-ryuu-wo-mada-tabenai">Tora wa ryuu wo mada tabenai</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/tora-wa-ryuu-wo-mada-tabenai/v1/c4?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 4</strong>
                                      <span class="updates__chapter-name text-truncate">Дождь во время засухи</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/cheon-haru">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/cheon-haru/cover/bjFIGY77AR5K_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/cheon-haru/cover/bjFIGY77AR5K_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/cheon-haru">Алая Императрица</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/cheon-haru">Cheon haru</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/cheon-haru/v1/c20?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 20</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/nes-siui-bimil">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/nes-siui-bimil/cover/G1NCoHRrIyZG_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/nes-siui-bimil/cover/G1NCoHRrIyZG_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/nes-siui-bimil">Секрет Нетси</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/nes-siui-bimil">nes-siui bimil</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/nes-siui-bimil/v1/c11?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 11</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/safely-endangered">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/safely-endangered/cover/cover_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/safely-endangered/cover/cover_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/safely-endangered">Под угрозой исчезновения</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/safely-endangered">Safely Endangered</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/safely-endangered/v1/c279?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 279</strong>
                                      <span class="updates__chapter-name text-truncate">Пришло время</span>
                                                    </a>
                              <a href="https://mangalib.me/safely-endangered/v1/c278?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 278</strong>
                                      <span class="updates__chapter-name text-truncate">#ПроблемыПризраков</span>
                                                    </a>
                              <a href="https://mangalib.me/safely-endangered/v1/c277?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 277</strong>
                                      <span class="updates__chapter-name text-truncate">кружка</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/heroine-wa-zetsubou-shimashita">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/heroine-wa-zetsubou-shimashita/cover/o0U7hJFz6Prn_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/heroine-wa-zetsubou-shimashita/cover/o0U7hJFz6Prn_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/heroine-wa-zetsubou-shimashita">Героиня была в отчаянии</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/heroine-wa-zetsubou-shimashita">Heroine wa Zetsubou shimashita</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/heroine-wa-zetsubou-shimashita/v9/c89?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 9 Глава 89</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/overlord">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/overlord/cover/3FfSTMkZTWHg_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/overlord/cover/3FfSTMkZTWHg_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/overlord">Повелитель</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/overlord">Overlord</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/overlord/v18/c75?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 18 Глава 75</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/tyutoriori-nomu-oryoptta">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/tyutoriori-nomu-oryoptta/cover/9ViHQYgDu0D3_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/tyutoriori-nomu-oryoptta/cover/9ViHQYgDu0D3_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/tyutoriori-nomu-oryoptta">Невероятное обучение</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/tyutoriori-nomu-oryoptta">tyutoriori nomu oryoptta</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/tyutoriori-nomu-oryoptta/v1/c93?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 93</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/wo-bushi-da-mowang">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/wo-bushi-da-mowang/cover/IIOE6LFHg3iR_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/wo-bushi-da-mowang/cover/IIOE6LFHg3iR_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/wo-bushi-da-mowang">Я не князь тьмы!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/wo-bushi-da-mowang">Wo bushi da mowang</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/wo-bushi-da-mowang/v1/c137?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 137</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/my-little-pony-friendship-is-magic">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/my-little-pony-friendship-is-magic/cover/8ChRHH7ZHZKi_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/my-little-pony-friendship-is-magic/cover/8ChRHH7ZHZKi_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/my-little-pony-friendship-is-magic">Мой маленький пони: Дружба - это чудо</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/my-little-pony-friendship-is-magic">My Little Pony: Friendship is Magic</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/my-little-pony-friendship-is-magic/v1/c2?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 2</strong>
                                      <span class="updates__chapter-name text-truncate">Возвращение Королевы Кризалис 2</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/jomgan">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/jomgan/cover/oS34oGApfQF8_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/jomgan/cover/oS34oGApfQF8_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/jomgan">Зомган</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/jomgan">jomgan</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/jomgan/v1/c27?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 27</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/koroshi-ai">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/koroshi-ai/cover/SZ5fS1VPWdla_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/koroshi-ai/cover/SZ5fS1VPWdla_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/koroshi-ai">Убивающая любовь</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/koroshi-ai">Koroshi Ai</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/koroshi-ai/v12/c68?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 12 Глава 68</strong>
                                      <span class="updates__chapter-name text-truncate">Feel Strange</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/kimi-janakya-dame-na-dorei-shoujo">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/kimi-janakya-dame-na-dorei-shoujo/cover/1Ic94fipYGBB_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/kimi-janakya-dame-na-dorei-shoujo/cover/1Ic94fipYGBB_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/kimi-janakya-dame-na-dorei-shoujo">Ты, должно быть, рабыня</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/kimi-janakya-dame-na-dorei-shoujo">Kimi janakya Dame na Dorei Shoujo</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/kimi-janakya-dame-na-dorei-shoujo/v1/c28?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 28</strong>
                                      <span class="updates__chapter-name text-truncate">С кем ты будешь обедать?</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/lebel-eob-dagteo-choegiseog">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/lebel-eob-dagteo-choegiseog/cover/qjUJRRpacUeA_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/lebel-eob-dagteo-choegiseog/cover/qjUJRRpacUeA_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/lebel-eob-dagteo-choegiseog">Система идеального врача</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/lebel-eob-dagteo-choegiseog">lebel-eob dagteo choegiseog</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/lebel-eob-dagteo-choegiseog/v1/c46?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 46</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/deo-laibeu">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/deo-laibeu/cover/IyPitSf2Pc87_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/deo-laibeu/cover/IyPitSf2Pc87_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/deo-laibeu">Система жизни</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/deo-laibeu">deo laibeu</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/deo-laibeu/v2/c127?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 127</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/candy-amp-cigarettes">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/candy-amp-cigarettes/cover/1KDLG0IHvYZC_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/candy-amp-cigarettes/cover/1KDLG0IHvYZC_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/candy-amp-cigarettes">Сладости &amp;amp; Сигареты</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/candy-amp-cigarettes">Candy &amp; Cigarettes</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/candy-amp-cigarettes/v6/c27?bid=5259&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 6 Глава 27</strong>
                                      <span class="updates__chapter-name text-truncate">Новый мировой порядок</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/emmy-the-robot">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/emmy-the-robot/cover/6SYgM7PI2PTy_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/emmy-the-robot/cover/6SYgM7PI2PTy_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/emmy-the-robot">Робот Эмми</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/emmy-the-robot">Emmy the Robot</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/emmy-the-robot/v1/c24?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 24</strong>
                                      <span class="updates__chapter-name text-truncate">Сны</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/xie-wang-de-qing-cheng-kuang-fei">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/xie-wang-de-qing-cheng-kuang-fei/cover/emx3BBEchK5V_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/xie-wang-de-qing-cheng-kuang-fei/cover/emx3BBEchK5V_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/xie-wang-de-qing-cheng-kuang-fei">Очарование безумной наложницы</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/xie-wang-de-qing-cheng-kuang-fei">Qingcheng kuang fei</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/xie-wang-de-qing-cheng-kuang-fei/v1/c72?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 72</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/geunyang-ag-yeog-eulo-salgessseubnida">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/geunyang-ag-yeog-eulo-salgessseubnida/cover/cjIyfsq7toHO_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/geunyang-ag-yeog-eulo-salgessseubnida/cover/cjIyfsq7toHO_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/geunyang-ag-yeog-eulo-salgessseubnida">Я просто буду жить, как злодейка</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/geunyang-ag-yeog-eulo-salgessseubnida">geunyang ag-yeog-eulo salgessseubnida</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/geunyang-ag-yeog-eulo-salgessseubnida/v2/c69?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 69</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/yeowangnim-an-dwaeyo-manhwa">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/yeowangnim-an-dwaeyo-manhwa/cover/pIq28kwTRIHz_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/yeowangnim-an-dwaeyo-manhwa/cover/pIq28kwTRIHz_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/yeowangnim-an-dwaeyo-manhwa">Королева, не делайте этого!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/yeowangnim-an-dwaeyo-manhwa">yeowangnim an dwaeyo! (manhwa)</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/yeowangnim-an-dwaeyo-manhwa/v1/c33?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 33</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/yu-xue-shang-hou-leng-fu-qiang-chong">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/yu-xue-shang-hou-leng-fu-qiang-chong/cover/Z2qiS0KuPzLR_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/yu-xue-shang-hou-leng-fu-qiang-chong/cover/Z2qiS0KuPzLR_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/yu-xue-shang-hou-leng-fu-qiang-chong">Императрица кровавых купцов и сильное увлечение холодного мужа</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/yu-xue-shang-hou-leng-fu-qiang-chong">Yu Xue Shang Hou : Leng Fu Qiang Chong</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/yu-xue-shang-hou-leng-fu-qiang-chong/v1/c173?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 173</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/gucheongugeom">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/gucheongugeom/cover/YpPKuoO2gV0P_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/gucheongugeom/cover/YpPKuoO2gV0P_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/gucheongugeom">Мастер девяти небес</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/gucheongugeom">gucheongugeom</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/gucheongugeom/v1/c7?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 7</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/agnyeo-kalunaga-jag-ajyeoss-eoyo">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/agnyeo-kalunaga-jag-ajyeoss-eoyo/cover/fTJ5opoLUzVW_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/agnyeo-kalunaga-jag-ajyeoss-eoyo/cover/fTJ5opoLUzVW_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/agnyeo-kalunaga-jag-ajyeoss-eoyo">Злодейка Каруна стала младше</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/agnyeo-kalunaga-jag-ajyeoss-eoyo">agnyeo kalunaga jag-ajyeoss-eoyo</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/agnyeo-kalunaga-jag-ajyeoss-eoyo/v1/c33?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 33</strong>
                                                    </a>
                              <a href="https://mangalib.me/agnyeo-kalunaga-jag-ajyeoss-eoyo/v1/c32?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 32</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/raendeomchaeting-ui-geunyeo">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/raendeomchaeting-ui-geunyeo/cover/Prk0bcp2GCUF_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/raendeomchaeting-ui-geunyeo/cover/Prk0bcp2GCUF_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/raendeomchaeting-ui-geunyeo">Девушка из анонимного чата!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/raendeomchaeting-ui-geunyeo">Raendeomchaeting-ui geunyeo!</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/raendeomchaeting-ui-geunyeo/v30/c272?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 30 Глава 272</strong>
                                      <span class="updates__chapter-name text-truncate">Выживание лузера</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/kouya-ni-kemono-doukokusu">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/kouya-ni-kemono-doukokusu/cover/rDSeBOcgtusY_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/kouya-ni-kemono-doukokusu/cover/rDSeBOcgtusY_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/kouya-ni-kemono-doukokusu">Плач зверей в пустоши</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/kouya-ni-kemono-doukokusu">Kouya ni Kemono Doukokusu</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/kouya-ni-kemono-doukokusu/v1/c6?bid=12050&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 6</strong>
                                      <span class="updates__chapter-name text-truncate">Скольжение</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/jangssisega-howimusa">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/jangssisega-howimusa/cover/zuf2yLKWyq7L_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/jangssisega-howimusa/cover/zuf2yLKWyq7L_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/jangssisega-howimusa">Защитник</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/jangssisega-howimusa">Jangssisega Howimusa</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/jangssisega-howimusa/v1/c186?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 186</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/bite-marks">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/bite-marks/cover/9WbSgShUjP_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/bite-marks/cover/9WbSgShUjP_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/bite-marks">След Укуса</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/bite-marks">Kami Ato</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/bite-marks/v1/c26?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 26</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/jemul-hwangnyeonim">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/jemul-hwangnyeonim/cover/pDNppMml1Mm2_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/jemul-hwangnyeonim/cover/pDNppMml1Mm2_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/jemul-hwangnyeonim">Жертва Принцессы</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/jemul-hwangnyeonim">Jemul Hwangnyeonim</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/jemul-hwangnyeonim/v2/c75?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 75</strong>
                                                    </a>
                              <a href="https://mangalib.me/jemul-hwangnyeonim/v2/c74?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 74</strong>
                                                    </a>
                              <a href="https://mangalib.me/jemul-hwangnyeonim/v2/c73?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 73</strong>
                                                    </a>
                              <a href="https://mangalib.me/jemul-hwangnyeonim/v2/c72?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 72</strong>
                                                    </a>
                          </div>
                                        <button class="updates__more" data-text="свернуть">показать еще 1 главу</button>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/gongpogeim-ui-ag-yeog-eun-bammada-yeoju-ingong-ui-kkum-eul-kkunda">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/gongpogeim-ui-ag-yeog-eun-bammada-yeoju-ingong-ui-kkum-eul-kkunda/cover/oB7Z7fdFl8SE_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/gongpogeim-ui-ag-yeog-eun-bammada-yeoju-ingong-ui-kkum-eul-kkunda/cover/oB7Z7fdFl8SE_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/gongpogeim-ui-ag-yeog-eun-bammada-yeoju-ingong-ui-kkum-eul-kkunda">Каждую ночь злодею хоррор-игры снится главная героиня</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/gongpogeim-ui-ag-yeog-eun-bammada-yeoju-ingong-ui-kkum-eul-kkunda">gongpogeim-ui ag-yeog-eun bammada yeoju-ingong-ui kkum-eul kkunda</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/gongpogeim-ui-ag-yeog-eun-bammada-yeoju-ingong-ui-kkum-eul-kkunda/v1/c2?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 2</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/kouhai-futago-chan">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/kouhai-futago-chan/cover/gjwAzp2ZFSbp_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/kouhai-futago-chan/cover/gjwAzp2ZFSbp_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/kouhai-futago-chan">Близняшки</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/kouhai-futago-chan">Kouhai Futago-chan</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/kouhai-futago-chan/v1/c5?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 5</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/the-last-bloodline">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/the-last-bloodline/cover/q1Pntlg1crAy_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/the-last-bloodline/cover/q1Pntlg1crAy_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/the-last-bloodline">Последняя из рода</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/the-last-bloodline">The Last Bloodline</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/the-last-bloodline/v1/c14?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 14</strong>
                                      <span class="updates__chapter-name text-truncate">Кусь</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/shen-meng-ju-ven-guan">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/shen-meng-ju-ven-guan/cover/qhiVeBXtf18n_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/shen-meng-ju-ven-guan/cover/qhiVeBXtf18n_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/shen-meng-ju-ven-guan">Мир забытых сновидений</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/shen-meng-ju-ven-guan">сhеn меng ju веn guаn</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/shen-meng-ju-ven-guan/v1/c14?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 14</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/xinzoruos-genshin-impact-twitter-shorts">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/xinzoruos-genshin-impact-twitter-shorts/cover/PGW6EPWCA69u_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/xinzoruos-genshin-impact-twitter-shorts/cover/PGW6EPWCA69u_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/xinzoruos-genshin-impact-twitter-shorts">Зарисовки по Геншин Импакт от Сянзоруо</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/xinzoruos-genshin-impact-twitter-shorts">Xinzoruo's Genshin Impact Twitter Shorts</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/xinzoruos-genshin-impact-twitter-shorts/v1/c185?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 185</strong>
                                      <span class="updates__chapter-name text-truncate">Е Лань, что ты делаешь?</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/nampyeon-eun-dwaessgo-dn-ina-beollyeobnid">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/nampyeon-eun-dwaessgo-dn-ina-beollyeobnid/cover/nNqFLJOqkfd5_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/nampyeon-eun-dwaessgo-dn-ina-beollyeobnid/cover/nNqFLJOqkfd5_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/nampyeon-eun-dwaessgo-dn-ina-beollyeobnid">К чёрту мужа, я стану богатой!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/nampyeon-eun-dwaessgo-dn-ina-beollyeobnid">Nampyeon-eun dwaessgo, dn-ina beollyeobnid</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/nampyeon-eun-dwaessgo-dn-ina-beollyeobnid/v1/c17?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 17</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/ajeossi-nae-gibun-wae-ilaeyo">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/ajeossi-nae-gibun-wae-ilaeyo/cover/G9Jjk765T7Qo_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/ajeossi-nae-gibun-wae-ilaeyo/cover/G9Jjk765T7Qo_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/ajeossi-nae-gibun-wae-ilaeyo">Любовь по найму</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/ajeossi-nae-gibun-wae-ilaeyo">ajeossi, nae gibun wae ilaeyo?</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/ajeossi-nae-gibun-wae-ilaeyo/v1/c6?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 6</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/konna-imouto-ga-ite-hoshii">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/konna-imouto-ga-ite-hoshii/cover/BGkJCq9vfTNy_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/konna-imouto-ga-ite-hoshii/cover/BGkJCq9vfTNy_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/konna-imouto-ga-ite-hoshii">Желанная сестрёнка</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/konna-imouto-ga-ite-hoshii">Konna Imouto ga Ite Hoshii</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/konna-imouto-ga-ite-hoshii/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/kimi-no-koto-ga-dai-dai-dai-dai-daisuki-na-100-hito-no-kareshi">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/kimi-no-koto-ga-dai-dai-dai-dai-daisuki-na-100-hito-no-kareshi/cover/sL2JhVZIdv9w_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/kimi-no-koto-ga-dai-dai-dai-dai-daisuki-na-100-hito-no-kareshi/cover/sL2JhVZIdv9w_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/kimi-no-koto-ga-dai-dai-dai-dai-daisuki-na-100-hito-no-kareshi">100 девушек, которые очень-очень-очень-очень-очень сильно любят тебя</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/kimi-no-koto-ga-dai-dai-dai-dai-daisuki-na-100-hito-no-kareshi">Kimi no koto ga daidaidaidaidai suki na 100-nin no Kanojo</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/kimi-no-koto-ga-dai-dai-dai-dai-daisuki-na-100-hito-no-kareshi/v14/c123?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 14 Глава 123</strong>
                                      <span class="updates__chapter-name text-truncate">Влюблённая дева</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/archenemy-and-hero">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/archenemy-and-hero/cover/jRZLnYFhHR0Z_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/archenemy-and-hero/cover/jRZLnYFhHR0Z_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/archenemy-and-hero">Королева демонов и Герой: «Стань моим, Герой» — «Я отказываюсь!»</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/archenemy-and-hero">Maoyuu Maou Yuusha - "Kono Watashi no Mono Tonare, Yuusha yo" "Kotowaru!"</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/archenemy-and-hero/v14/c51?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 14 Глава 51</strong>
                                      <span class="updates__chapter-name text-truncate">Это то, чего хочет Дух!</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/clouds-are-blooming">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/clouds-are-blooming/cover/sXETAIk9li3d_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/clouds-are-blooming/cover/sXETAIk9li3d_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/clouds-are-blooming">Облачный цветок</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/clouds-are-blooming">Clouds are blooming</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/clouds-are-blooming/v1/c99?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 99</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Руманга</div>
                                          <a href="https://mangalib.me/vsyu-svoyu-soznatelnuyu-zizn-ya-byl-ryboi">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/vsyu-svoyu-soznatelnuyu-zizn-ya-byl-ryboi/cover/T2x9VLnBNJCH_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/vsyu-svoyu-soznatelnuyu-zizn-ya-byl-ryboi/cover/T2x9VLnBNJCH_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/vsyu-svoyu-soznatelnuyu-zizn-ya-byl-ryboi">Всю Свою Сознательную Жизнь Я Был Рыбой</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/vsyu-svoyu-soznatelnuyu-zizn-ya-byl-ryboi">Всю Свою Сознательную Жизнь Я Был Рыбой</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/vsyu-svoyu-soznatelnuyu-zizn-ya-byl-ryboi/v1/c20?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 20</strong>
                                      <span class="updates__chapter-name text-truncate">Щупальце и Его Друзья</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">OEL-манга</div>
                                          <a href="https://mangalib.me/go-away-romeo-new">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/go-away-romeo-new/cover/fFOSHgeWDeYd_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/go-away-romeo-new/cover/fFOSHgeWDeYd_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/go-away-romeo-new">Прочь, Ромео! (Перезапуск)</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/go-away-romeo-new">Go Away, Romeo (new)</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/go-away-romeo-new/v1/c11?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 11</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/poggun-oppaga-ses-ilaeyo">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/poggun-oppaga-ses-ilaeyo/cover/v8fBrxN0tHso_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/poggun-oppaga-ses-ilaeyo/cover/v8fBrxN0tHso_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/poggun-oppaga-ses-ilaeyo">У неë три брата тирана</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/poggun-oppaga-ses-ilaeyo">Poggun oppaga ses-ilaeyo</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/poggun-oppaga-ses-ilaeyo/v2/c79?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 79</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/revelup-mothanen-player">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/revelup-mothanen-player/cover/zNCF6jX24FsB_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/revelup-mothanen-player/cover/zNCF6jX24FsB_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/revelup-mothanen-player">Игрок, который не может повысить уровень</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/revelup-mothanen-player">lebel-eob moshaneun peulleieo</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/revelup-mothanen-player/v2/c97?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 97</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/bai-ze-yiwen-lu">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/bai-ze-yiwen-lu/cover/7bZENG51d5eN_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/bai-ze-yiwen-lu/cover/7bZENG51d5eN_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/bai-ze-yiwen-lu">Необычная коллекция Бай Цзэ</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/bai-ze-yiwen-lu">Bai Ze yiwen lu</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/bai-ze-yiwen-lu/v1/c28?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 28</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/uninhabited-wall">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/uninhabited-wall/cover/i89wYK2ZaqpV_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/uninhabited-wall/cover/i89wYK2ZaqpV_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/uninhabited-wall">Мастер боевых искусств Ли Гвак</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/uninhabited-wall">Uninhabited Wall</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/uninhabited-wall/v1/c31?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 31</strong>
                                                    </a>
                              <a href="https://mangalib.me/uninhabited-wall/v1/c30?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 30</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/wieo">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/wieo/cover/CFMiWdY55uv0_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/wieo/cover/CFMiWdY55uv0_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/wieo">Неприступная леди</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/wieo">wieo</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/wieo/v1/c45?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 45</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/death-march-kara-hajimaru-isekai-kyousoukyoku">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/death-march-kara-hajimaru-isekai-kyousoukyoku/cover/9hpviwIVm7v1_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/death-march-kara-hajimaru-isekai-kyousoukyoku/cover/9hpviwIVm7v1_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/death-march-kara-hajimaru-isekai-kyousoukyoku">Марш Смерти под рапсодию параллельного мирa</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/death-march-kara-hajimaru-isekai-kyousoukyoku">Death March kara Hajimaru Isekai Kyousoukyoku</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/death-march-kara-hajimaru-isekai-kyousoukyoku/v14/c89?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 14 Глава 89</strong>
                                      <span class="updates__chapter-name text-truncate">Ночь, о которой никто не знал</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/petto-to-go-shujin-samana-kankei-no-osananajimi">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/petto-to-go-shujin-samana-kankei-no-osananajimi/cover/rOfNq9iueVCF_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/petto-to-go-shujin-samana-kankei-no-osananajimi/cover/rOfNq9iueVCF_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/petto-to-go-shujin-samana-kankei-no-osananajimi">Друзья детства с отношениями домашнего животного и хозяина</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/petto-to-go-shujin-samana-kankei-no-osananajimi">petto to go shujin samana kankei no osananajimi</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/petto-to-go-shujin-samana-kankei-no-osananajimi/v1/c1?bid=13345&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/seonbaeneun-nappayo">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/seonbaeneun-nappayo/cover/z12iI7eUBAsA_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/seonbaeneun-nappayo/cover/z12iI7eUBAsA_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/seonbaeneun-nappayo">Старший — это плохо!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/seonbaeneun-nappayo">seonbaeneun nappayo!</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/seonbaeneun-nappayo/v1/c9?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 9</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/bugbu-daegong-bu-in-chuwoseo-mos-hagesseubnida">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/bugbu-daegong-bu-in-chuwoseo-mos-hagesseubnida/cover/VVoeijK5a2qz_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/bugbu-daegong-bu-in-chuwoseo-mos-hagesseubnida/cover/VVoeijK5a2qz_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/bugbu-daegong-bu-in-chuwoseo-mos-hagesseubnida">Великий северный герцог, я не могу остаться из-за холода</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/bugbu-daegong-bu-in-chuwoseo-mos-hagesseubnida">bugbu daegong bu-in, chuwoseo mos hagesseubnida</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/bugbu-daegong-bu-in-chuwoseo-mos-hagesseubnida/v1/c15?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 15</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/tomodachino-anechanni-koishita-hanashi">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/tomodachino-anechanni-koishita-hanashi/cover/9NtKkrAG1KeN_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/tomodachino-anechanni-koishita-hanashi/cover/9NtKkrAG1KeN_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/tomodachino-anechanni-koishita-hanashi">История о влюбленности в сестру моего друга</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/tomodachino-anechanni-koishita-hanashi">Tomodachino anechan'ni koishita hanashi</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/tomodachino-anechanni-koishita-hanashi/v1/c24?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 24</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/super-danganronpa-2-nanami-chiaki-no-sayonara-zetsubo-daiboken">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/super-danganronpa-2-nanami-chiaki-no-sayonara-zetsubo-daiboken/cover/EtTtbuuAE4Qj_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/super-danganronpa-2-nanami-chiaki-no-sayonara-zetsubo-daiboken/cover/EtTtbuuAE4Qj_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/super-danganronpa-2-nanami-chiaki-no-sayonara-zetsubo-daiboken">Супер Данганронпа 2: Квест Чиаки Нанами "Прощай Отчаяние"</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/super-danganronpa-2-nanami-chiaki-no-sayonara-zetsubo-daiboken">Super Danganronpa 2 - Nanami Chiaki no Sayonara Zetsubou Daibouken</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/super-danganronpa-2-nanami-chiaki-no-sayonara-zetsubo-daiboken/v1/c3?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 3</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/tipanieseo-moning-kiseuleul">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/tipanieseo-moning-kiseuleul/cover/hZ139J2dP0Uz_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/tipanieseo-moning-kiseuleul/cover/hZ139J2dP0Uz_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/tipanieseo-moning-kiseuleul">Утренний поцелуй от Тиффани</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/tipanieseo-moning-kiseuleul">tipanieseo moning kiseuleul</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/tipanieseo-moning-kiseuleul/v1/c27?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 27</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/dinaunseu">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/dinaunseu/cover/6DOL9QPwiTj3_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/dinaunseu/cover/6DOL9QPwiTj3_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/dinaunseu">Денонсирование</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/dinaunseu">dinaunseu</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/dinaunseu/v1/c3?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 3</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Руманга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/granitnye-volny">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/granitnye-volny/cover/3gLlpOhHkUN4_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/granitnye-volny/cover/3gLlpOhHkUN4_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/granitnye-volny">Гранитные волны</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/granitnye-volny">Гранитные волны</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/granitnye-volny/v1/c10?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 10</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/the-doctor">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/the-doctor/cover/FE49S34tee4v_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/the-doctor/cover/FE49S34tee4v_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/the-doctor">Доктор</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/the-doctor">yīshēng cuītàixiù</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/the-doctor/v3/c41?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 3 Глава 41</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/kage-no-jitsuryokusha-ni-naritakute">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/kage-no-jitsuryokusha-ni-naritakute/cover/i6E4XZ6FgeRN_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/kage-no-jitsuryokusha-ni-naritakute/cover/i6E4XZ6FgeRN_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/kage-no-jitsuryokusha-ni-naritakute">Восхождение в тени</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/kage-no-jitsuryokusha-ni-naritakute">Kage no Jitsuryokusha ni Naritakute</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/kage-no-jitsuryokusha-ni-naritakute/v9/c50?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 9 Глава 50</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/hwangje-ui-aileul-sumgineun-bangbeob">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/hwangje-ui-aileul-sumgineun-bangbeob/cover/On9pg98zHR3N_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/hwangje-ui-aileul-sumgineun-bangbeob/cover/On9pg98zHR3N_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/hwangje-ui-aileul-sumgineun-bangbeob">Как скрыть ребенка Императора</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/hwangje-ui-aileul-sumgineun-bangbeob">hwangje-ui aileul sumgineun bangbeob</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/hwangje-ui-aileul-sumgineun-bangbeob/v2/c55?bid=8584&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 55</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/99ganghwanamumongdung-i">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/99ganghwanamumongdung-i/cover/2TlwXvEAMk5V_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/99ganghwanamumongdung-i/cover/2TlwXvEAMk5V_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/99ganghwanamumongdung-i">Усиленная деревянная палка 99+ уровня</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/99ganghwanamumongdung-i">99ganghwanamumongdung-i</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/99ganghwanamumongdung-i/v1/c47?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 47</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/nae-nampyeon-eun-naega-jeonghanda">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/nae-nampyeon-eun-naega-jeonghanda/cover/yz0XxtM8ksBu_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/nae-nampyeon-eun-naega-jeonghanda/cover/yz0XxtM8ksBu_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/nae-nampyeon-eun-naega-jeonghanda">Мой муж - это мой выбор</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/nae-nampyeon-eun-naega-jeonghanda">Nae Nampyeon-eun Naega Jeonghanda</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/nae-nampyeon-eun-naega-jeonghanda/v1/c17?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 17</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/budeuleoun-poggun">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/budeuleoun-poggun/cover/kL7yjhbhJLDm_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/budeuleoun-poggun/cover/kL7yjhbhJLDm_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/budeuleoun-poggun">Нежный тиран</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/budeuleoun-poggun">budeuleoun poggun</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/budeuleoun-poggun/v1/c67?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 67</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/namjuneun-jeongjunghi-sayanghagessseubnida">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/namjuneun-jeongjunghi-sayanghagessseubnida/cover/ucjSJ0jmJufk_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/namjuneun-jeongjunghi-sayanghagessseubnida/cover/ucjSJ0jmJufk_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/namjuneun-jeongjunghi-sayanghagessseubnida">Пожалуй, откажусь от главного героя!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/namjuneun-jeongjunghi-sayanghagessseubnida">namjuneun jeongjunghi sayanghagessseubnida!</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/namjuneun-jeongjunghi-sayanghagessseubnida/v2/c34?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 34</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/i-got-a-fake-job-at-the-academy">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/i-got-a-fake-job-at-the-academy/cover/Vs2AHfhCRsTf_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/i-got-a-fake-job-at-the-academy/cover/Vs2AHfhCRsTf_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/i-got-a-fake-job-at-the-academy">Профессор академии под прикрытием</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/i-got-a-fake-job-at-the-academy">akademie wijangchwieobdanghaessda</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/i-got-a-fake-job-at-the-academy/v1/c41?bid=10814&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 41</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/yongsa-dongsaeng-eun-akademi-goinmul">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/yongsa-dongsaeng-eun-akademi-goinmul/cover/fLs17BwKcnAd_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/yongsa-dongsaeng-eun-akademi-goinmul/cover/fLs17BwKcnAd_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/yongsa-dongsaeng-eun-akademi-goinmul">Младший брат погибшего героя</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/yongsa-dongsaeng-eun-akademi-goinmul">yongsa dongsаeng-eun akademi goinmul</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/yongsa-dongsaeng-eun-akademi-goinmul/v1/c13?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 13</strong>
                                                    </a>
                              <a href="https://mangalib.me/yongsa-dongsaeng-eun-akademi-goinmul/v1/c12?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 12</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/hugung-ui-chodae">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/hugung-ui-chodae/cover/d9mu7BbXZ8XA_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/hugung-ui-chodae/cover/d9mu7BbXZ8XA_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/hugung-ui-chodae">Приглашение наложницы</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/hugung-ui-chodae">hugung-ui chodae</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/hugung-ui-chodae/v1/c11?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 11</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/gongjag-bu-in-ui-eunmilhan-jibpil">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/gongjag-bu-in-ui-eunmilhan-jibpil/cover/qOmany5ZTtD8_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/gongjag-bu-in-ui-eunmilhan-jibpil/cover/qOmany5ZTtD8_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/gongjag-bu-in-ui-eunmilhan-jibpil">Тайное письмо герцогини</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/gongjag-bu-in-ui-eunmilhan-jibpil">gongjak buine eunmilhan jippil</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/gongjag-bu-in-ui-eunmilhan-jibpil/v1/c40?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 40</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/nekoda-biyori">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/nekoda-biyori/cover/gHjS9t6SeXXw_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/nekoda-biyori/cover/gHjS9t6SeXXw_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/nekoda-biyori">Прекрасные деньки Нэкоты</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/nekoda-biyori">Nekota biyori</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/nekoda-biyori/v1/c6?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 6</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/the-office-on-the-first-floor">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/the-office-on-the-first-floor/cover/t1z4xYPgWk5f_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/the-office-on-the-first-floor/cover/t1z4xYPgWk5f_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/the-office-on-the-first-floor">Офисные беседы с Нуной</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/the-office-on-the-first-floor">Opiseu nuna iyagi</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/the-office-on-the-first-floor/v1/c53?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 53</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/nerd-and-jock">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/nerd-and-jock/cover/GV7mJSoCMY2e_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/nerd-and-jock/cover/GV7mJSoCMY2e_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/nerd-and-jock">Ботан и Качок</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/nerd-and-jock">Nerd and Jock</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/nerd-and-jock/v1/c188.3?bid=12170&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 188.3</strong>
                                      <span class="updates__chapter-name text-truncate">Тигрица и Готка 3</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/aojiao-wangye-tai-nan-zhui">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/aojiao-wangye-tai-nan-zhui/cover/sSOO2bZdR8pL_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/aojiao-wangye-tai-nan-zhui/cover/sSOO2bZdR8pL_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/aojiao-wangye-tai-nan-zhui">Слишком сложно преследовать цундере-принца</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/aojiao-wangye-tai-nan-zhui">Aojiao Wangye Tai Nan Zhui</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/aojiao-wangye-tai-nan-zhui/v1/c168?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 168</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/hua-yu-yinni-zhi-wu-kua">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/hua-yu-yinni-zhi-wu-kua/cover/Qjx7dTumN9Nl_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/hua-yu-yinni-zhi-wu-kua/cover/Qjx7dTumN9Nl_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/hua-yu-yinni-zhi-wu-kua">Птица, укрытая цветами</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/hua-yu-yinni-zhi-wu-kua">Hua yu yinni zhi wu</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/hua-yu-yinni-zhi-wu-kua/v1/c80?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 80</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/scarlet-lady-a-miraculous-ladybug-fanfic">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/scarlet-lady-a-miraculous-ladybug-fanfic/cover/4HhBRatpX7Nk_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/scarlet-lady-a-miraculous-ladybug-fanfic/cover/4HhBRatpX7Nk_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/scarlet-lady-a-miraculous-ladybug-fanfic">Алая Леди</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/scarlet-lady-a-miraculous-ladybug-fanfic">Scarlet Lady: Tales of Chloe The Ladybug</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/scarlet-lady-a-miraculous-ladybug-fanfic/v2/c222?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 222</strong>
                                      <span class="updates__chapter-name text-truncate">Последняя деталь</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/qing-yunian">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/qing-yunian/cover/R9jvaWHpAImk_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/qing-yunian/cover/R9jvaWHpAImk_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/qing-yunian">Отмечаем не один год</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/qing-yunian">Qìng yúnián</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/qing-yunian/v1/c4?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 4</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/shijou-saikyou-orc-san-no-tanoshii-tanetsuke-harem-zukuri">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/shijou-saikyou-orc-san-no-tanoshii-tanetsuke-harem-zukuri/cover/QxScTvO8MsTa_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/shijou-saikyou-orc-san-no-tanoshii-tanetsuke-harem-zukuri/cover/QxScTvO8MsTa_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/shijou-saikyou-orc-san-no-tanoshii-tanetsuke-harem-zukuri">Веселая жизнь самого могущественного орка в истории, создающего гарем в альтернативном мире</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/shijou-saikyou-orc-san-no-tanoshii-tanetsuke-harem-zukuri">Shijou Saikyou Orc-san no Tanoshii Tanetsuke Harem Zukuri</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/shijou-saikyou-orc-san-no-tanoshii-tanetsuke-harem-zukuri/v8/c80?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 8 Глава 80</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/abaga-namu-gangham">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/abaga-namu-gangham/cover/Z2FgQU8H9Jdh_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/abaga-namu-gangham/cover/Z2FgQU8H9Jdh_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/abaga-namu-gangham">Мой папа слишком сильный</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/abaga-namu-gangham">Appaga neomu gangham</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/abaga-namu-gangham/v2/c115?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 115</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/giant-killing">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/giant-killing/cover/9b0335Fl4qKQ_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/giant-killing/cover/9b0335Fl4qKQ_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/giant-killing">Вынос Гигантов</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/giant-killing">Giant Killing</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/giant-killing/v31/c300?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 31 Глава 300</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/sukina-ningen-no-otokonoko-to-nakayoku-naritai-kitsune-no-onnanoko">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/sukina-ningen-no-otokonoko-to-nakayoku-naritai-kitsune-no-onnanoko/cover/GSbyJalB6rre_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/sukina-ningen-no-otokonoko-to-nakayoku-naritai-kitsune-no-onnanoko/cover/GSbyJalB6rre_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/sukina-ningen-no-otokonoko-to-nakayoku-naritai-kitsune-no-onnanoko">Девочка-лиса, которая хочет подружиться с человеческим мальчиком, что ей нравится</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/sukina-ningen-no-otokonoko-to-nakayoku-naritai-kitsune-no-onnanoko">Sukina ningen no otokonoko to nakayoku naritai kitsune no onnanoko</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/sukina-ningen-no-otokonoko-to-nakayoku-naritai-kitsune-no-onnanoko/v1/c10?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 10</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/nae-ttal-eun-deulaegon">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/nae-ttal-eun-deulaegon/cover/4pmhlpXtkBY0_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/nae-ttal-eun-deulaegon/cover/4pmhlpXtkBY0_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/nae-ttal-eun-deulaegon">Моя дочь - дракон!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/nae-ttal-eun-deulaegon">nae ttal-eun deulaegon!</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/nae-ttal-eun-deulaegon/v1/c40?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 40</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/monkey-peak">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/monkey-peak/cover/GG41r3DN6wiI_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/monkey-peak/cover/GG41r3DN6wiI_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/monkey-peak">Обезьяний пик</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/monkey-peak">Monkey Peak</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/monkey-peak/v6/c51?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 6 Глава 51</strong>
                                      <span class="updates__chapter-name text-truncate">Хижина Мицукура</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/dangsine-jugeumeul-bachil-sigan">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/dangsine-jugeumeul-bachil-sigan/cover/2nQ3UZKTzdvf_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/dangsine-jugeumeul-bachil-sigan/cover/2nQ3UZKTzdvf_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/dangsine-jugeumeul-bachil-sigan">Время, за которое ты отдала свою жизнь</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/dangsine-jugeumeul-bachil-sigan">dangsine jugeumeul bachil sigan</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/dangsine-jugeumeul-bachil-sigan/v1/c36?bid=12302&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 36</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/duke-i-regressed">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/duke-i-regressed/cover/ayVXYYFwMUcx_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/duke-i-regressed/cover/ayVXYYFwMUcx_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/duke-i-regressed">Я переродился молодым Герцогом</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/duke-i-regressed">hoegwihaessdeoni gongjag</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/duke-i-regressed/v1/c57?bid=10142&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 57</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/yongsagogyo-deonjeongonglyaggwa">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/yongsagogyo-deonjeongonglyaggwa/cover/Acv30PKjfSqV_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/yongsagogyo-deonjeongonglyaggwa/cover/Acv30PKjfSqV_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/yongsagogyo-deonjeongonglyaggwa">Академия воинов - факультет рейдов на подземелья</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/yongsagogyo-deonjeongonglyaggwa">yongsagogyo deonjeongonglyaggwa</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/yongsagogyo-deonjeongonglyaggwa/v1/c31?bid=12485&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 31</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/the-amazing-world-of-gumball-issue-1">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/the-amazing-world-of-gumball-issue-1/cover/3ibqvidBTZuT_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/the-amazing-world-of-gumball-issue-1/cover/3ibqvidBTZuT_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/the-amazing-world-of-gumball-issue-1">Удивительный мир Гамбола</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/the-amazing-world-of-gumball-issue-1">The Amazing World of Gumball Issue 1</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/the-amazing-world-of-gumball-issue-1/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                      <span class="updates__chapter-name text-truncate">Выпуск 1</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/dragon-ball-full-color-edition">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/dragon-ball-full-color-edition/cover/0bD4zbAayBEt_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/dragon-ball-full-color-edition/cover/0bD4zbAayBEt_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/dragon-ball-full-color-edition">Драконий Жемчуг – Цветная Версия</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/dragon-ball-full-color-edition">Dragon Ball Kanzenban – Full Color Edition</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/dragon-ball-full-color-edition/v6/c74?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 6 Глава 74</strong>
                                      <span class="updates__chapter-name text-truncate">Пиратская ловушка</span>
                                                    </a>
                              <a href="https://mangalib.me/dragon-ball-full-color-edition/v6/c73?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 6 Глава 73</strong>
                                      <span class="updates__chapter-name text-truncate">Просчет генерала Блю</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/killer-boss-raises-foxes-online">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/killer-boss-raises-foxes-online/cover/u5V3kiyQkenc_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/killer-boss-raises-foxes-online/cover/u5V3kiyQkenc_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/killer-boss-raises-foxes-online">Босс-убийца выращивает лисицу онлайн</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/killer-boss-raises-foxes-online">Sha Shou Da Lao Zai Xian Yang Hu</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/killer-boss-raises-foxes-online/v1/c14?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 14</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/netoroplivyy-fermer-v-drugom-mire">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/netoroplivyy-fermer-v-drugom-mire/cover/GZRqFl8SOdvn_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/netoroplivyy-fermer-v-drugom-mire/cover/GZRqFl8SOdvn_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/netoroplivyy-fermer-v-drugom-mire">Неторопливый фермер в другом мире</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/netoroplivyy-fermer-v-drugom-mire">Isekai Nonbiri Nouka</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/netoroplivyy-fermer-v-drugom-mire/v10/c193?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 10 Глава 193</strong>
                                      <span class="updates__chapter-name text-truncate">Храм и рыцарь (3)</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/kori-senman">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/kori-senman/cover/Ivn34E1zADYg_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/kori-senman/cover/Ivn34E1zADYg_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/kori-senman">Лис и маленький тануки</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/kori-senman">Kori Senman</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/kori-senman/v3/c17?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 3 Глава 17</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/boyfriend-of-the-dead">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/boyfriend-of-the-dead/cover/hGLkkqUqz1b0_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/boyfriend-of-the-dead/cover/hGLkkqUqz1b0_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/boyfriend-of-the-dead">Мой мёртвый парень</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/boyfriend-of-the-dead">Boyfriend of the Dead</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/boyfriend-of-the-dead/v1/c174?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 174</strong>
                                      <span class="updates__chapter-name text-truncate">И снова гербарий</span>
                                                    </a>
                              <a href="https://mangalib.me/boyfriend-of-the-dead/v1/c173?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 173</strong>
                                      <span class="updates__chapter-name text-truncate">Почти</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/winteo-ulpeu">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/winteo-ulpeu/cover/nyKCi9taRnMx_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/winteo-ulpeu/cover/nyKCi9taRnMx_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/winteo-ulpeu">Зимний волк</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/winteo-ulpeu">winteo ulpeu</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c22?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 22</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c21?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 21</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c20?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 20</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c19?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 19</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c18?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 18</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c17?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 17</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c16?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 16</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c15?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 15</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c14?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 14</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c13?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 13</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c12?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 12</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c11?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 11</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c10?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 10</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c9?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 9</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c8?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 8</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c7?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 7</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c6?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 6</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c5?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 5</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c4?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 4</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c3?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 3</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c2?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 2</strong>
                                                    </a>
                              <a href="https://mangalib.me/winteo-ulpeu/v1/c1?bid=13359&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                                    </a>
                          </div>
                                        <button class="updates__more" data-text="свернуть">показать еще 19 глав</button>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/contract-concubine">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/contract-concubine/cover/tQ9nFz56o3mc_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/contract-concubine/cover/tQ9nFz56o3mc_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/contract-concubine">Наложница по Контракту</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/contract-concubine">Hugung Gyeyak</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/contract-concubine/v2/c143?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 143</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/fran-to-shishou-no-nichijou">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/fran-to-shishou-no-nichijou/cover/teunqi9h7D7L_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/fran-to-shishou-no-nichijou/cover/teunqi9h7D7L_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/fran-to-shishou-no-nichijou">~ Повседневная жизнь Фран и Мастера ~</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/fran-to-shishou-no-nichijou">~Fran to Shishou no Nichijou~</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/fran-to-shishou-no-nichijou/v1/c11?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 11</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/organisms-from-an-ancient-cosmos">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/organisms-from-an-ancient-cosmos/cover/IMgQrA3KuXci_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/organisms-from-an-ancient-cosmos/cover/IMgQrA3KuXci_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/organisms-from-an-ancient-cosmos">Организмы из Древнего Космоса</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/organisms-from-an-ancient-cosmos">Organisms from an Ancient Cosmos</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/organisms-from-an-ancient-cosmos/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/i-will-become-the-mother-of-this-warrior">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/i-will-become-the-mother-of-this-warrior/cover/j2493gzRF0Iw_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/i-will-become-the-mother-of-this-warrior/cover/j2493gzRF0Iw_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/i-will-become-the-mother-of-this-warrior">Я стану матерью воина</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/i-will-become-the-mother-of-this-warrior">yongsaui eomeoniga doegessseubnida</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/i-will-become-the-mother-of-this-warrior/v1/c22?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 22</strong>
                                                    </a>
                              <a href="https://mangalib.me/i-will-become-the-mother-of-this-warrior/v1/c21?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 21</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/a-haseyo-geumsujeo-deul-eogabnida">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/a-haseyo-geumsujeo-deul-eogabnida/cover/4sWze8FQoGm9_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/a-haseyo-geumsujeo-deul-eogabnida/cover/4sWze8FQoGm9_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/a-haseyo-geumsujeo-deul-eogabnida">Вперёд, купим счастье за деньги!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/a-haseyo-geumsujeo-deul-eogabnida">a haseyo, geumsujeo deul-eogabnida</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/a-haseyo-geumsujeo-deul-eogabnida/v2/c62?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 62</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/hendesu-ka">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/hendesu-ka/cover/jHcUjzISGCzD_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/hendesu-ka/cover/jHcUjzISGCzD_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/hendesu-ka">Это странно?</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/hendesu-ka">Hendesu ka…?</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/hendesu-ka/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                      <span class="updates__chapter-name text-truncate">Сингл</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/x-men-vol-6">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/x-men-vol-6/cover/SAxp4vxYvrRQ_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/x-men-vol-6/cover/SAxp4vxYvrRQ_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/x-men-vol-6">Люди Икс том 6</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/x-men-vol-6">X-Men vol. 6</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/x-men-vol-6/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                      <span class="updates__chapter-name text-truncate">Бесстрашные: Часть 1 «В деревьях»</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/lan-chi">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/lan-chi/cover/ZvyhoF7ZdbgI_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/lan-chi/cover/ZvyhoF7ZdbgI_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/lan-chi">Голубые крылья</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/lan-chi">Lan chi</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/lan-chi/v1/c98?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 98</strong>
                                      <span class="updates__chapter-name text-truncate">Он Победитель</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/one-wheat-mark">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/one-wheat-mark/cover/0HEAMDKehdcf_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/one-wheat-mark/cover/0HEAMDKehdcf_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/one-wheat-mark">одна пшеничная марка</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/one-wheat-mark">one wheat mark</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/one-wheat-mark/v1/c10?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 10</strong>
                                      <span class="updates__chapter-name text-truncate">10 глава - обычная регистрация в дискорде</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/du-myeong-ui-sangsog-in">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/du-myeong-ui-sangsog-in/cover/kiS5IoVY4smg_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/du-myeong-ui-sangsog-in/cover/kiS5IoVY4smg_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/du-myeong-ui-sangsog-in">Два наследника</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/du-myeong-ui-sangsog-in">du myeong-ui sangsog-in</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/du-myeong-ui-sangsog-in/v2/c32?bid=9638&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 32</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/eternal-first-god">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/eternal-first-god/cover/EjZ58bYJsqbz_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/eternal-first-god/cover/EjZ58bYJsqbz_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/eternal-first-god">Вечный первый бог</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/eternal-first-god">Eternal first god</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/eternal-first-god/v1/c168?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 168</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/sokkubchinguga-jibchag-nampyeon-i-doeeossda">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/sokkubchinguga-jibchag-nampyeon-i-doeeossda/cover/EaHvT1ERDZxw_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/sokkubchinguga-jibchag-nampyeon-i-doeeossda/cover/EaHvT1ERDZxw_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/sokkubchinguga-jibchag-nampyeon-i-doeeossda">Друг детства стал одержимым мужем</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/sokkubchinguga-jibchag-nampyeon-i-doeeossda">Sokkubchinguga jibchag nampyeon-i doeeossda</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/sokkubchinguga-jibchag-nampyeon-i-doeeossda/v1/c17?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 17</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/tensei-shitara-slime-datta-ken-mabutsu-no-kuni-no-arukikata-colored">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/tensei-shitara-slime-datta-ken-mabutsu-no-kuni-no-arukikata-colored/cover/uxb3bxrAJRsP_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/tensei-shitara-slime-datta-ken-mabutsu-no-kuni-no-arukikata-colored/cover/uxb3bxrAJRsP_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/tensei-shitara-slime-datta-ken-mabutsu-no-kuni-no-arukikata-colored">О моём перерождении в слизь: Шагая по стране монстров (Цветная версия)</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/tensei-shitara-slime-datta-ken-mabutsu-no-kuni-no-arukikata-colored">Tensei Shitara Slime Datta Ken: Mabutsu no Kuni no Arukikata (Colored)</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/tensei-shitara-slime-datta-ken-mabutsu-no-kuni-no-arukikata-colored/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                      <span class="updates__chapter-name text-truncate">Киоск такояки✩Три звёзды!!!</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/sorangi">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/sorangi/cover/YgNl2zBldwnI_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/sorangi/cover/YgNl2zBldwnI_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/sorangi">Мастерская Соран</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/sorangi">Sorang Workshop</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/sorangi/v1/c8?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 8</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">OEL-манга</div>
                                          <a href="https://mangalib.me/1hp-club-remake">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/1hp-club-remake/cover/7XJrTfDdhM66_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/1hp-club-remake/cover/7XJrTfDdhM66_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/1hp-club-remake">Клуб 1-HP (Перезапуск)</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/1hp-club-remake">1HP club (Remake)</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/1hp-club-remake/v1/c67?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 67</strong>
                                      <span class="updates__chapter-name text-truncate">Тяжёлая атлетика</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Руманга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/bagrovyi-sad">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/bagrovyi-sad/cover/CucrkaoKPUnx_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/bagrovyi-sad/cover/CucrkaoKPUnx_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/bagrovyi-sad">Багровый сад.</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/bagrovyi-sad">Багровый сад.</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/bagrovyi-sad/v1/c0?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 0</strong>
                                      <span class="updates__chapter-name text-truncate">Пролог.</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/gal-sen">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/gal-sen/cover/rx8BF1YdaAyY_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/gal-sen/cover/rx8BF1YdaAyY_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/gal-sen">Гяру-учительница</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/gal-sen">Gal-sen</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/gal-sen/v5/c39?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 5 Глава 39</strong>
                                      <span class="updates__chapter-name text-truncate">Вкус учителя</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/getsuyobi-no-tawawa">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/getsuyobi-no-tawawa/cover/pYXBAuzhOcid_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/getsuyobi-no-tawawa/cover/pYXBAuzhOcid_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/getsuyobi-no-tawawa">Тавава по Понедельникам</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/getsuyobi-no-tawawa">Getsuyoubi no Tawawa (serialization)</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/getsuyobi-no-tawawa/v5/c42?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 5 Глава 42</strong>
                                      <span class="updates__chapter-name text-truncate">Имото-чан, часть 1</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/meme-girls">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/meme-girls/cover/cover_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/meme-girls/cover/cover_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/meme-girls">Девчонки-мемы</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/meme-girls">Meme Girls</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/meme-girls/v1/c178?bid=3724&amp;ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 178</strong>
                                      <span class="updates__chapter-name text-truncate">Девочки сезоны</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Руманга</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/vikkafobiya">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/vikkafobiya/cover/2gyOaZ0XLb8c_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/vikkafobiya/cover/2gyOaZ0XLb8c_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/vikkafobiya">Виккафобия</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/vikkafobiya">Виккафобия</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/vikkafobiya/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                      <span class="updates__chapter-name text-truncate">Кто есть монстр?</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/burakku-rokku-chan">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/burakku-rokku-chan/cover/aKkbJww5FZ2Y_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/burakku-rokku-chan/cover/aKkbJww5FZ2Y_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/burakku-rokku-chan">Блэк Рок-чан</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/burakku-rokku-chan">Burakku Rokku-chan</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/burakku-rokku-chan/v1/c1.5?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1.5</strong>
                                      <span class="updates__chapter-name text-truncate">(Перезалив)</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                          <a href="https://mangalib.me/rewrite">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/rewrite/cover/NBQnhgIy4XQA_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/rewrite/cover/NBQnhgIy4XQA_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/rewrite">Перепись</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/rewrite">Re:Write</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/rewrite/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                      <span class="updates__chapter-name text-truncate">очки</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Руманга</div>
                                          <a href="https://mangalib.me/put-mez-dvux-rek">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/put-mez-dvux-rek/cover/5rsGZbjNWZ64_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/put-mez-dvux-rek/cover/5rsGZbjNWZ64_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                                  <div class="m-label m-label_success">новое </div>
                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/put-mez-dvux-rek">Путь меж двух рек</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/put-mez-dvux-rek">Путь меж двух рек</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/put-mez-dvux-rek/v1/c3?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 3</strong>
                                      <span class="updates__chapter-name text-truncate">Во тьму</span>
                                                    </a>
                              <a href="https://mangalib.me/put-mez-dvux-rek/v1/c2?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 2</strong>
                                      <span class="updates__chapter-name text-truncate">Отречение</span>
                                                    </a>
                              <a href="https://mangalib.me/put-mez-dvux-rek/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                      <span class="updates__chapter-name text-truncate">Царство людей и демонов</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/nuna-na-museowo">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/nuna-na-museowo/cover/XmhqS7BlgY76_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/nuna-na-museowo/cover/XmhqS7BlgY76_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/nuna-na-museowo">Нуна! Я боюсь!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/nuna-na-museowo">Nuna! Na museowo</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/nuna-na-museowo/v1/c1?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 1</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Комикс</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/iris-complex">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/iris-complex/cover/WwQrs6jlSKiD_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/iris-complex/cover/WwQrs6jlSKiD_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/iris-complex">Комплекс Ирис</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/iris-complex">Iris Complex</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/iris-complex/v1/c19?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 19</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/poggun-ui-beon-yeoggiga-doeeobeolyeossda">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/poggun-ui-beon-yeoggiga-doeeobeolyeossda/cover/zxJmhhYWqROb_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/poggun-ui-beon-yeoggiga-doeeobeolyeossda/cover/zxJmhhYWqROb_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/poggun-ui-beon-yeoggiga-doeeobeolyeossda">Я стала переводчиком тирана</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/poggun-ui-beon-yeoggiga-doeeobeolyeossda">poggunui beonyeoggiga doeeobeolyeossda</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/poggun-ui-beon-yeoggiga-doeeobeolyeossda/v1/c47?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 47</strong>
                                                    </a>
                              <a href="https://mangalib.me/poggun-ui-beon-yeoggiga-doeeobeolyeossda/v1/c46?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 46</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/aydin">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/aydin/cover/f4AloD1oE1VN_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/aydin/cover/f4AloD1oE1VN_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/aydin">Айдин</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/aydin">Aydin</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/aydin/v2/c75?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 75</strong>
                                                    </a>
                              <a href="https://mangalib.me/aydin/v2/c74?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 74</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Маньхуа</div>
                                          <a href="https://mangalib.me/guomin-xiao-cao-shi-nusheng">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/guomin-xiao-cao-shi-nusheng/cover/go1M0fnRv0Bw_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/guomin-xiao-cao-shi-nusheng/cover/go1M0fnRv0Bw_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/guomin-xiao-cao-shi-nusheng">Неотразимый принц школы - девушка!</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/guomin-xiao-cao-shi-nusheng">Guomin Xiao Cao Shi Nusheng</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/guomin-xiao-cao-shi-nusheng/v1/c259?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 259</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/gongjaggaui-99beonjjae-sinbu">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/gongjaggaui-99beonjjae-sinbu/cover/PBFi6I0ryGal_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/gongjaggaui-99beonjjae-sinbu/cover/PBFi6I0ryGal_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/gongjaggaui-99beonjjae-sinbu">99-ая невеста герцога</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/gongjaggaui-99beonjjae-sinbu">gongjaggaui 99beonjjae sinbu</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/gongjaggaui-99beonjjae-sinbu/v2/c59?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 59</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                          <a href="https://mangalib.me/uchuu-kenetsukan">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/uchuu-kenetsukan/cover/daJukeQ8qWV5_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/uchuu-kenetsukan/cover/daJukeQ8qWV5_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/uchuu-kenetsukan">Космическая цензура</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/uchuu-kenetsukan">Uchuu Kenetsukan</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/uchuu-kenetsukan/v1/c7?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 7</strong>
                                      <span class="updates__chapter-name text-truncate">Через паводок</span>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                          <a href="https://mangalib.me/myolyeong-ui-hwangja">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/myolyeong-ui-hwangja/cover/EIlkTGsznkZJ_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/myolyeong-ui-hwangja/cover/EIlkTGsznkZJ_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                  <div class="m-label m-label_alert">популярное</div>
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/myolyeong-ui-hwangja">Расцвет принца</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/myolyeong-ui-hwangja">myolyeong-ui hwangja</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/myolyeong-ui-hwangja/v1/c69?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 69</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">OEL-манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/ordeal">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/ordeal/cover/P5F1IdNUmN3H_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/ordeal/cover/P5F1IdNUmN3H_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/ordeal">Испытание</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/ordeal">Ordeal</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/ordeal/v2/c63?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 63</strong>
                                                    </a>
                              <a href="https://mangalib.me/ordeal/v2/c62?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 62</strong>
                                                    </a>
                              <a href="https://mangalib.me/ordeal/v2/c61?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 2 Глава 61</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манхва</div>
                                            <div class="updates__warning">18+</div>
                    <a href="https://mangalib.me/posigdongmul">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/posigdongmul/cover/adGL0RJg8wb0_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/posigdongmul/cover/adGL0RJg8wb0_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/posigdongmul">Хищник</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/posigdongmul">The Predator</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/posigdongmul/v1/c48?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 48</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
            <div class="updates__item">
        <div class="updates__left">
                                    <div class="updates__type">Манга</div>
                                            <div class="updates__warning">16+</div>
                    <a href="https://mangalib.me/futago-tachi-no-sho-jijou">
          <div class="cover cover_responsive lazyload updates__cover" style="background-image: url(&quot;https://cover.imglib.info/uploads/cover/futago-tachi-no-sho-jijou/cover/dr7j9WVDwpHt_thumb.jpg&quot;);" data-src="https://cover.imglib.info/uploads/cover/futago-tachi-no-sho-jijou/cover/dr7j9WVDwpHt_thumb.jpg" data-was-processed="true"></div>
          </a>
        </div>
        <div class="updates__right">
          <div class="updates__header">
            <div class="updates__header-top">
              <div class="updates__labels">
                                              </div>
              <h4 class="updates__name">
                <a class="link-default" href="https://mangalib.me/futago-tachi-no-sho-jijou">Обстоятельства близнецов</a>
              </h4>
            </div>
            <div class="updates__header-bottom">
              <div class="updates__date">Сегодня</div>
                              <h6 class="updates__name updates__name_rus">
                  <a href="https://mangalib.me/futago-tachi-no-sho-jijou">Futago-tachi no Shojijou</a>
                </h6>
                          </div>
          </div>
          <div class="updates__body">
            <div class="updates__chapters">
                              <a href="https://mangalib.me/futago-tachi-no-sho-jijou/v1/c62?ui=5740535" class="updates__chapter">
                  <strong class="updates__chapter-vol">Том 1 Глава 62</strong>
                                                    </a>
                          </div>
                      </div>
        </div>
      </div>
      
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
    <span class="aside__title-inner">Новинки</span>
  </h3>

            <a href="https://mangalib.me/i-alone-level-up" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/MqLYFST4k4mY_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/i-alone-level-up/cover/MqLYFST4k4mY_thumb.jpg" alt="Na Honjaman Lebel-eob" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Поднятие уровня в одиночку
                      </h3>
                  <h4 class="manga-list-item__subtitle">Na Honjaman Lebel-eob</h4>
                  <h4 class="manga-list-item__subtitle">32884842 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
          <a href="https://mangalib.me/toukyou-revengers" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/wQGZ2gLGskyp_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/toukyou-revengers/cover/wQGZ2gLGskyp_thumb.jpg" alt="Tokyo Revengers" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Токийские мстители
                      </h3>
                  <h4 class="manga-list-item__subtitle">Tokyo Revengers</h4>
                  <h4 class="manga-list-item__subtitle">19147099 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
          <a href="https://mangalib.me/the-beginning-after-the-end" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/r1uqydHG5iuV_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/the-beginning-after-the-end/cover/r1uqydHG5iuV_thumb.jpg" alt="The Beginning After the End" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Начало после конца
                      </h3>
                  <h4 class="manga-list-item__subtitle">The Beginning After the End</h4>
                  <h4 class="manga-list-item__subtitle">18308829 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
          <a href="https://mangalib.me/boku_no_hero_academia" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/gsxwjPY74rJK_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/boku_no_hero_academia/cover/gsxwjPY74rJK_thumb.jpg" alt="Boku no Hero Academia" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Моя геройская академия
                      </h3>
                  <h4 class="manga-list-item__subtitle">Boku no Hero Academia</h4>
                  <h4 class="manga-list-item__subtitle">17331227 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
          <a href="https://mangalib.me/one-piece" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/A9t2lrW1knhM_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/one-piece/cover/A9t2lrW1knhM_thumb.jpg" alt="One Piece" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Ван Пис
                      </h3>
                  <h4 class="manga-list-item__subtitle">One Piece</h4>
                  <h4 class="manga-list-item__subtitle">16311265 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
          <a href="https://mangalib.me/onepunchman" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/UpnOxHineJj6_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/onepunchman/cover/UpnOxHineJj6_thumb.jpg" alt="Onepunch-Man" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Ванпанчмен
                      </h3>
                  <h4 class="manga-list-item__subtitle">Onepunch-Man</h4>
                  <h4 class="manga-list-item__subtitle">15601859 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
          <a href="https://mangalib.me/suddenly-became-a-princess-one-day-" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/vhfCFony5DTj_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/suddenly-became-a-princess-one-day-/cover/vhfCFony5DTj_thumb.jpg" alt="ane nal gongjuga doeyoveriossda" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Однажды я стала принцессой
                      </h3>
                  <h4 class="manga-list-item__subtitle">ane nal gongjuga doeyoveriossda</h4>
                  <h4 class="manga-list-item__subtitle">11996795 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
          <a href="https://mangalib.me/shingeki-no-kyojin" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/u1I7IbRDyfGd_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/shingeki-no-kyojin/cover/u1I7IbRDyfGd_thumb.jpg" alt="Shingeki no Kyojin" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Атака Титанов
                      </h3>
                  <h4 class="manga-list-item__subtitle">Shingeki no Kyojin</h4>
                  <h4 class="manga-list-item__subtitle">11505914 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
          <a href="https://mangalib.me/wind-breaker" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/RWDstYRkXMxO_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/wind-breaker/cover/RWDstYRkXMxO_thumb.jpg" alt="windeubeuleikeo" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Ветролом
                      </h3>
                  <h4 class="manga-list-item__subtitle">windeubeuleikeo</h4>
                  <h4 class="manga-list-item__subtitle">11054716 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
          <a href="https://mangalib.me/kimetsu-no-yaiba" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/4KagQthKA49B_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/kimetsu-no-yaiba/cover/4KagQthKA49B_thumb.jpg" alt="Kimetsu no Yaiba" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Клинок, рассекающий демонов
                      </h3>
                  <h4 class="manga-list-item__subtitle">Kimetsu no Yaiba</h4>
                  <h4 class="manga-list-item__subtitle">10898415 <i class="fa fa-eye"></i></h4>
        </div>
      </a>
      </div>

      <div class="aside__panel paper">
  <h3 class="aside__title">
        <span class="aside__title-inner">Популярное</span>
  </h3>
            <a href="https://mangalib.me/organisms-from-an-ancient-cosmos" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/IMgQrA3KuXci_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/organisms-from-an-ancient-cosmos/cover/IMgQrA3KuXci_thumb.jpg" alt="Organisms from an Ancient Cosmos" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Организмы из Древнего Космоса
                      </h3>
                  <h4 class="manga-list-item__subtitle">Organisms from an Ancient Cosmos</h4>
                </div>
      </a>
          <a href="https://mangalib.me/x-men-vol-6" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/SAxp4vxYvrRQ_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/x-men-vol-6/cover/SAxp4vxYvrRQ_thumb.jpg" alt="X-Men vol. 6" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Люди Икс том 6
                      </h3>
                  <h4 class="manga-list-item__subtitle">X-Men vol. 6</h4>
                </div>
      </a>
          <a href="https://mangalib.me/tensei-shitara-slime-datta-ken-mabutsu-no-kuni-no-arukikata-colored" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/uxb3bxrAJRsP_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/tensei-shitara-slime-datta-ken-mabutsu-no-kuni-no-arukikata-colored/cover/uxb3bxrAJRsP_thumb.jpg" alt="Tensei Shitara Slime Datta Ken: Mabutsu no Kuni no Arukikata (Colored)" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            О моём перерождении в слизь: Шагая по стране монстров (Цветная версия)
                      </h3>
                  <h4 class="manga-list-item__subtitle">Tensei Shitara Slime Datta Ken: Mabutsu no Kuni no Arukikata (Colored)</h4>
                </div>
      </a>
          <a href="https://mangalib.me/leobeuleteo" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/4zghcy40tofW_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/leobeuleteo/cover/4zghcy40tofW_thumb.jpg" alt="Leobeuleteo" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Любовное письмо (Tan Jung)
                      </h3>
                  <h4 class="manga-list-item__subtitle">Leobeuleteo</h4>
                </div>
      </a>
          <a href="https://mangalib.me/ayakashi-koi-tsumugi-hakanaki-otome-wa-youko-no-ou-ni-dekiaisareru" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/YAVEMUGWhZuD_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/ayakashi-koi-tsumugi-hakanaki-otome-wa-youko-no-ou-ni-dekiaisareru/cover/YAVEMUGWhZuD_thumb.jpg" alt="Ayakashi Koi Tsumugi - Hakanaki Otome wa Youko no Ou ni Dekiaisareru" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Аякаши Кои. Король лис-демонов который любит мимолетную деву
                      </h3>
                  <h4 class="manga-list-item__subtitle">Ayakashi Koi Tsumugi - Hakanaki Otome wa Youko no Ou ni Dekiaisareru</h4>
                </div>
      </a>
          <a href="https://mangalib.me/tatta-hitokoto" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/4Fo09Vi6jMLk_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/tatta-hitokoto/cover/4Fo09Vi6jMLk_thumb.jpg" alt="Tatta Hitokoto" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Всего несколько слов
                      </h3>
                  <h4 class="manga-list-item__subtitle">Tatta Hitokoto</h4>
                </div>
      </a>
          <a href="https://mangalib.me/a-story-about-hiring-a-poor-girl" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/gOk3fEsire2w_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/a-story-about-hiring-a-poor-girl/cover/gOk3fEsire2w_thumb.jpg" alt="Binbōna on&#39;nanoko o yatou hanashi" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            История о приме на работу бедной девушки
                      </h3>
                  <h4 class="manga-list-item__subtitle">Binbōna on'nanoko o yatou hanashi</h4>
                </div>
      </a>
          <a href="https://mangalib.me/tsuma-no-kigen-de-tenkou-ga-kawaru-hanashi-raw" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/SljCpRGpROgw_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/tsuma-no-kigen-de-tenkou-ga-kawaru-hanashi-raw/cover/SljCpRGpROgw_thumb.jpg" alt="Tsuma no Kigen de Tenkou ga Kawaru Hanashi Raw" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            История о том, как настроение моей жены меняет погоду
                      </h3>
                  <h4 class="manga-list-item__subtitle">Tsuma no Kigen de Tenkou ga Kawaru Hanashi Raw</h4>
                </div>
      </a>
          <a href="https://mangalib.me/hendesu-ka" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/jHcUjzISGCzD_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/hendesu-ka/cover/jHcUjzISGCzD_thumb.jpg" alt="Hendesu ka…?" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Это странно?
                      </h3>
                  <h4 class="manga-list-item__subtitle">Hendesu ka…?</h4>
                </div>
      </a>
          <a href="https://mangalib.me/kaiju-jiu-yao-996" class="manga-list-item list-item">
        <img class="manga-list-item__cover lazyload shadow-sm loaded" src="./главная_files/TPy2bGeYAvvw_thumb.jpg" data-src="https://cover.imglib.info/uploads/cover/kaiju-jiu-yao-996/cover/TPy2bGeYAvvw_thumb.jpg" alt="Kaiju Jiu Yao 996" data-was-processed="true">
        <div class="manga-list-item__body">
          <h3 class="manga-list-item__title">
                            Система 996
                      </h3>
                  <h4 class="manga-list-item__subtitle">Kaiju Jiu Yao 996</h4>
                </div>
      </a>
      </div>
      </div>
</div>

              </div>