@extends('layouts')
@section('content')
<div class="page" id="main-page">
      <div class="page__inner">
          <div class="container container_offset container_responsive">
    <div class=" page__wrapper page__wrapper_left  paper manga-search">
      <div class="manga-search__head">
        <div class="manga-search__header">
          <h2 class="manga-search__title">
            <span>Каталог  </span>
          </h2>

                      <div class="dropdown">
              <button class="manga-search__sort-button" data-dropdown="" data-tippy-placement="bottom-end" data-sort="desc" aria-expanded="false">
                <i class="fa fa-fw fa-sort-amount-desc"></i>
                <i class="fa fa-fw fa-sort-amount-asc"></i>
                <span>По рейтингу</span>
                <i class="fa fa-fw fa-angle-down"></i>
              </button>
              <div class="menu-template">
                
              </div>
            </div>
                  </div>
        <input class="form__input manga-search__input" type="text" placeholder="Поиск по названию..." value="">
      </div>

      <div class="" id="manga-list">
  <div class="media-grid-wrap">
    <div class="media-cards-grid">
      <div class="media-card-wrap">
        <a class="media-card" href="/" style="background-image: url(/);">
        <div class="media-card__caption">
          <h5 class="media-card__subtitle">
            Манхва
          </h5>
          <h5 class="media-card__subtitle">

          </h5>
          <h3 class="media-card__title line-clamp">
            Поднятие уровня в одиночку
          </h3>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="media-grid-wrap">
    <div class="media-cards-grid">
      <div class="media-card-wrap">
        <a class="media-card" href="/" style="background-image: url(/);">
        <div class="media-card__caption">
          <h5 class="media-card__subtitle">
            Манхва
          </h5>
          <h5 class="media-card__subtitle">

          </h5>
          <h3 class="media-card__title line-clamp">
            Поднятие уровня в одиночку
          </h3>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="media-grid-wrap">
    <div class="media-cards-grid">
      <div class="media-card-wrap">
        <a class="media-card" href="/" style="background-image: url(/);">
        <div class="media-card__caption">
          <h5 class="media-card__subtitle">
            Манхва
          </h5>
          <h5 class="media-card__subtitle">

          </h5>
          <h3 class="media-card__title line-clamp">
            Поднятие уровня в одиночку
          </h3>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="media-grid-wrap">
    <div class="media-cards-grid">
      <div class="media-card-wrap">
        <a class="media-card" href="/" style="background-image: url(/);">
        <div class="media-card__caption">
          <h5 class="media-card__subtitle">
            Манхва
          </h5>
          <h5 class="media-card__subtitle">

          </h5>
          <h3 class="media-card__title line-clamp">
            Поднятие уровня в одиночку
          </h3>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="media-grid-wrap">
    <div class="media-cards-grid">
      <div class="media-card-wrap">
        <a class="media-card" href="/" style="background-image: url(/);">
        <div class="media-card__caption">
          <h5 class="media-card__subtitle">
            Манхва
          </h5>
          <h5 class="media-card__subtitle">

          </h5>
          <h3 class="media-card__title line-clamp">
            Поднятие уровня в одиночку
          </h3>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="media-grid-wrap">
    <div class="media-cards-grid">
      <div class="media-card-wrap">
        <a class="media-card" href="/" style="background-image: url(/);">
        <div class="media-card__caption">
          <h5 class="media-card__subtitle">
            Манхва
          </h5>
          <h5 class="media-card__subtitle">

          </h5>
          <h3 class="media-card__title line-clamp">
            Поднятие уровня в одиночку
          </h3>
        </div>
      </a>
    </div>
  </div>
</div>
    </div>

          <div class="paper search-filter"><div class="search-filter-layout"><!----> <div class="search-filter__wrap"><div class="search-filter__filters"><div class="search-filter-submenu"><div class="search-filter-submenu__name">
            Жанры
          </div> <div class="search-filter-submenu__right"><span class="search-filter-submenu__selected text-truncate">Любые</span> <i class="fa fa-chevron-right"></i></div></div> <div class="search-filter-submenu"><div class="search-filter-submenu__name">
            Теги
          </div> <div class="search-filter-submenu__right"><span class="search-filter-submenu__selected text-truncate">Любые</span> <i class="fa fa-chevron-right"></i></div></div> <!----> <div class="search-filter__group"><div class="search-filter__title">
            Количество глав
          </div> <div class="search-filter__content"><div class="search-filter__input-group"><input type="text" placeholder="От" class="form__input form__input_sm search-filter__input"> <span class="text-muted">—</span> <input type="text" placeholder="До" class="form__input form__input_sm search-filter__input"></div></div></div> <div class="search-filter__group"><div class="search-filter__title">
            Год выпуска
          </div> <div class="search-filter__content"><div class="search-filter__input-group"><input type="text" placeholder="От" class="form__input form__input_sm search-filter__input"> <span class="text-muted">—</span> <input type="text" placeholder="До" class="form__input form__input_sm search-filter__input"></div></div></div> <div class="search-filter__group"><div class="search-filter__title">
            Оценка
          </div> <div class="search-filter__content"><div class="search-filter__input-group"><input type="text" placeholder="От" class="form__input form__input_sm search-filter__input"> <span class="text-muted">—</span> <input type="text" placeholder="До" class="form__input form__input_sm search-filter__input"></div></div></div> <div class="search-filter__group"><div class="search-filter__title">
            Возрастной рейтинг
          </div> <div class="search-filter__content search-filter__checkbox-list search-filter__checkbox-list_caution search-filter__checkbox-list_flex"><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
    Отсутствует
  </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
    16+
  </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
    18+
  </span></div></div></div> <div class="search-filter__categories search-filter__group"><div class="search-filter__title">
            Тип
          </div> <div class="search-filter__content search-filter__checkbox-list search-filter__checkbox-list_flex"><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="1"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Манга</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="4"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">OEL-манга</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="5"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Манхва</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="6"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Маньхуа</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="8"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Руманга</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="9"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Комикс западный</span></label></div></div> <div class="search-filter__format search-filter__group"><div class="search-filter__title">
            Формат выпуска
          </div> <div class="search-filter__content search-filter__checkbox-list search-filter__checkbox-list_flex"><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              4-кома (Ёнкома)
            </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              Сборник
            </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              Додзинси
            </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              В цвете
            </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              Сингл
            </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              Веб
            </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              Вебтун
            </span></div></div></div> <div class="search-filter__status search-filter__group"><div class="search-filter__title">
            Статус перевода
          </div> <div class="search-filter__content search-filter__checkbox-list search-filter__checkbox-list_flex"><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="1"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Продолжается</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="2"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Завершен</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="3"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Заморожен</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="4"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Заброшен</span></label></div></div> <div class="search-filter__status search-filter__group"><div class="search-filter__title">
            Статус тайтла
          </div> <div class="search-filter__content search-filter__checkbox-list search-filter__checkbox-list_flex"><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="1"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Онгоинг</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="2"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Завершён</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="3"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Анонс</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="4"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Приостановлен</span></label><label class="control search-filter__checkbox"><input type="checkbox" class="control__input" value="5"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text">Выпуск прекращён</span></label></div></div> <div class="search-filter__group"><div class="search-filter__title">
            Другое
          </div> <div class="search-filter__content"><label class="control search-filter__checkbox"><input type="checkbox" class="control__input"> <span class="control__indicator control__indicator_checkbox control__indicator_top"></span> <span class="control__text">Нет перевода уже 3 месяца</span></label> <label class="control search-filter__checkbox"><input type="checkbox" class="control__input"> <span class="control__indicator control__indicator_checkbox control__indicator_top"></span> <span class="control__text">Лицензирован</span></label> <!----></div></div> <div class="search-filter__group"><div class="search-filter__title">
              Мои списки <span class="text-muted text-hover small ml-5">выделить все</span></div> <div class="search-filter__content search-filter__checkbox-list"><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
                Читаю
              </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
                В планах
              </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
                Брошено
              </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
                Прочитано
              </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
                Любимые
              </span></div></div></div></div></div> <div class="search-filter__buttons buttons-stretch"><button class="button">
        Сбросить
      </button> <button class="button button_green">
        Показать
      </button></div></div> <div class="search-filter-layout search-filter-layout_hidden"><div class="search-filter__head"><div class="search-filter__head-title"><i class="fa fa-arrow-left fa-fw small"></i> Теги
      </div> <span class="search-filter__reset text-hover text-muted">сбросить</span></div> <div class="search-filter-input"><input type="text" placeholder="Фильтр по тегам" class="search-filter-input__field form__input"> <div class="search-filter-input__clear" style="display: none;"><svg><use xlink:href="#icon-close"></use></svg></div></div> <div class="search-filter__wrap"><div class="search-filter-list-title">
          Популярные
        </div> <div class="search-filter__filters"><div class="search-filter__checkbox-list"><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              ГГ мужчина
              <span class="text-muted small search-filter__counter">11473</span></span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              ГГ женщина
              <span class="text-muted small search-filter__counter">10822</span></span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              Дружба
              <span class="text-muted small search-filter__counter">4250</span></span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              Магия
              <span class="text-muted small search-filter__counter">4089</span></span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              Навыки / способности
              <span class="text-muted small search-filter__counter">3885</span></span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              Насилие / жестокость
              <span class="text-muted small search-filter__counter">3856</span></span></div></div></div> <div class="search-filter-list-title">
        По алфавиту
      </div> <div class="search-filter__filters"><div class="search-filter__checkbox-list"><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            lgbt
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Азартные игры
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Алхимия
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Амнезия / Потеря памяти
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Ангелы
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Политика
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Полиция
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Преступники / Криминал
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Призраки / Духи
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Путешествие во времени
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Скрытие личности
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Спасение мира
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Спортивное тело
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Средневековье
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Стимпанк
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Супергерои
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Традиционные игры
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Умный ГГ
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Учитель / ученик
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            Философия
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">        Выбрать
      </button></div></div> <div class="search-filter-layout search-filter-layout_hidden"><div class="search-filter__head"><div class="search-filter__head-title"><i class="fa fa-arrow-left fa-fw small"></i> Жанры
      </div> <span class="search-filter__reset text-hover text-muted">сбросить</span></div> <div class="search-filter-input"><input type="text" placeholder="Фильтр по жанрам" class="search-filter-input__field form__input"> <div class="search-filter-input__clear" style="display: none;"><svg><use xlink:href="#icon-close"></use></svg></div></div> <div class="search-filter__wrap"><div class="search-filter-list-title">
          Популярные
        </div> <div class="search-filter__filters"><div class="search-filter__checkbox-list"><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              романтика
              <span class="text-muted small search-filter__counter">17933</span></span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
              комедия
              <span class="text-muted small search-filter__counter">15661</span></span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
        По алфавиту
      </div> <div class="search-filter__filters"><div class="search-filter__checkbox-list"><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            арт
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            безумие
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            боевик
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            боевые искусства
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            вампиры
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            военное
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            гарем
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            гендерная интрига
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            героическое фэнтези
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            демоны
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            детектив
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            юри
          </span></div><div class="control search-filter__checkbox"><input type="checkbox" class="control__input search-filter__with-exclude" value="0"> <span class="control__indicator control__indicator_checkbox control__indicator_sm"></span> <span class="control__text text-truncate">
            яой
          </span></div></div></div></div> <div class="search-filter__buttons buttons-stretch"><button class="button">
        Выбрать
      </button></div></div></div>
      </div>

        
              </div>