<html>
<head>
    <meta charset="utf-8" />
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href={{asset('content\stylesheets\main.css')}}>
    <link rel="stylesheet" href="{{asset('content\stylesheets\dannye.css')}}"
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src={{asset('content\javascript\main.js')}}></script>
  </head>
<body>
<header class="header">
  <div class="header__inner">
    <div class="logoDiv">
      <div class="header__logo-wrapper">
        <img class="header__logo" width="50" src={{asset('content/photo/logo.png')}}>
        <div class="header__logo-text">

        </div>
      </div>
      <div class="header__web">
          <a href="/">Контент</a>
          <a href="/top">Топ</a>
          <a href="/order">Заказ</a>
          <a href="/search">Поиск</a><img width="20" src={{asset('content/photo/search.png')}}>
      </div>
    </div>
    <div class="PersonDiv">
      <div class="users__content">
        <a href="">Закладки</a>
        <a href="">Регистрация</a>
      </div>
      <div class="dropdown">
        <img src="content/photo/logo.png" onclick="myFunction()" class="droppng">
          <div id="myDropdown" class="dropdown-content">
            <a href="/user/">Профиль</a>
            <a href="#">О Нас</a>
            <a href="#">Контакты</a>
          </div>
      </div>
    </div>
  </div>
</header>
<section id="pageContent">
    @yield('content')
</section>
<footer>
		<div class="footer-limiter">
			<div class="footer-right">
				<a href="#"><img class="header__logo" width="50" src={{asset('content/photo/logo.png')}}><i class="fa fa-facebook"></i></a>
				<a href="#"><img class="header__logo" width="50" src={{asset('content/photo/logo.png')}}><i class="fa fa-twitter"></i></a>
				<a href="#"><img class="header__logo" width="50" src={{asset('content/photo/logo.png')}}><i class="fa fa-linkedin"></i></a>
			</div>
			<div class="footer-left">
        <a href="/">
          <h4>
            MyManga © 2022
          </h4>
        </a>        
				<p class="footer-links">Мы всегда рады вам!</p>
        <a>
          Задать вопрос
        </a>
			</div>
      <div class="footer-left">
        <p class="T">
          <a href="/">
            ПРАВИЛА САЙТА
          </a>
        </p>
        <p class="T">
          <a href="/">
            АВТОРСКОЕ ПРАВО
          </a>
        </p>  
        <p class="T">
          <a href="/">
            О НАС
          </a>
        </p>  
        <p class="T">
          <a href="/">
            DMCA
          </a>
        </p>        
			</div>
		</div>
	</footer>
</body>
</html>