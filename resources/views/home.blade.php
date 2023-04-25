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
  
    

    <!-- Блок последних обновлений -->
     
      <section class="section paper tabs" id="latest-updates" data-tabs-id="tabs_1">
  <div class="section__header section__header_tabs">
    <strong class="section__header-title">Свежие главы</strong>
          
      </div>
  <div class="section__body">
    <div class="updates tabs__content tabs__content_show">
    @foreach($lastUpdated as $value)
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
                <a class="link-default" href="https://mangalib.me/seed">{{$value->title}}</a>
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
      @endforeach

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