<?php $isAuth = rand(1,0)?>
<?php $userName = 'Lemon'?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme: популярное</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="page">
<div style="display: none">
    <svg xmlns="http://www.w3.org/2000/svg"><symbol id="icon-arrow-right-ad" viewbox="0 0 6 9"><path d="M5.8 4L1.3.2C1-.1.5-.1.2.2s-.3.7 0 .9l4 3.4-4 3.4c-.3.3-.3.7 0 .9.2.1.4.2.6.2s.4-.1.5-.2L5.8 5c.3-.3.3-.7 0-1z"></path></symbol><symbol id="icon-attach" viewbox="0 0 10 20"><path d="M2.8 4.8v10.5c0 1.2 1 2.2 2.3 2.2s2.3-1 2.3-2.2V3.4C7.2 1.5 5.6 0 3.7 0 1.7 0 .1 1.5 0 3.4V15c0 2.7 2.2 5 5 5s5-2.2 5-5V2.9H8.7V15c0 2.1-1.7 3.8-3.7 3.8-2.1 0-3.7-1.7-3.7-3.8V3.6c0-1.3 1.1-2.3 2.4-2.3 1.3 0 2.4 1 2.4 2.3v11.7c0 .6-.5 1-1 1-.6 0-1-.4-1-1V4.8H2.8z"></path></symbol><symbol id="icon-close" viewbox="0 0 18 18"><path d="M18 1.3L16.7 0 9 7.7 1.3 0 0 1.3 7.7 9 0 16.7 1.3 18 9 10.3l7.7 7.7 1.3-1.3L10.3 9z"></path></symbol><symbol id="icon-comment" viewbox="0 0 19 17"><path d="M9.5 17c-1.5 0-2.9-.3-4.3-.9l-.3-.2-3.6.7c-.1 0-.3.1-.5 0-.5-.1-.8-.6-.7-1l.8-3.8-.3-.6v-.1C.2 10.3 0 9.4 0 8.5 0 3.8 4.3 0 9.5 0S19 3.8 19 8.5 14.7 17 9.5 17zM5 14.1c.2 0 .3 0 .4.1l.6.3c1 .5 2.2.7 3.4.7 4.2 0 7.6-3 7.6-6.7s-3.4-6.7-7.6-6.7-7.6 3-7.6 6.7c0 .7.1 1.4.4 2.1l.4.8c.1.2.1.4.1.5l-.5 2.7 2.7-.5H5z"></path></symbol><symbol id="icon-filter-link" viewbox="0 0 21 18"><path d="M18.4 10c1.1 1.9.4 4.4-1.6 5.5-.6.3-1.3.5-2.1.5h-4.2c-2.3 0-4.2-1.8-4.2-4s1.9-4 4.2-4h1c.6 0 1-.4 1-1s-.5-1-1-1h-1C7 6 4.2 8.7 4.2 12s2.8 6 6.3 6h4.2c3.5 0 6.3-2.7 6.3-6 0-1-.3-2.1-.8-3-.3-.5-.9-.6-1.4-.3-.6.2-.7.9-.4 1.3zM2.6 8c-1.1-2-.4-4.4 1.6-5.5.7-.3 1.4-.5 2.1-.5h4.2c2.3 0 4.2 1.8 4.2 4s-1.9 4-4.2 4h-1c-.6 0-1 .4-1 1s.5 1 1 1h1c3.5 0 6.3-2.7 6.3-6S14 0 10.5 0H6.3C2.8 0 0 2.7 0 6c0 1 .3 2.1.8 3 .3.5.9.6 1.4.3s.7-.9.4-1.3z"></path></symbol><symbol id="icon-filter-people" viewbox="0 0 19 18"><path d="M9.5 2c1.1 0 2.1 1 2.1 2.2V7c0 1.2-.9 2.2-2.1 2.2S7.4 8.2 7.4 7V4.2C7.4 3 8.4 2 9.5 2m1.4 12.5c1.5 0 3.5.8 4.8 1.5H3.3c1.3-.8 3.3-1.5 4.8-1.5h2.8M9.5 0C7.3 0 5.4 1.9 5.4 4.2V7c0 2.3 1.8 4.2 4.1 4.2s4.1-1.9 4.1-4.2V4.2c0-2.3-1.9-4.2-4.1-4.2zm1.4 12.5H8.1c-2.7 0-7.5 2.1-8.1 4.2V18h19v-1.4c-.7-2.1-5.4-4.1-8.1-4.1z"></path></symbol><symbol id="icon-filter-photo" viewbox="0 0 22 18"><path d="M11 5.5c-2.5 0-4.6 1.9-4.7 4.4s2 4.5 4.5 4.5 4.6-1.9 4.7-4.4c.1-2.5-2-4.5-4.5-4.5zm0 7.4c-1.7 0-3-1.2-3.1-2.9 0-1.6 1.3-2.9 3-3s3 1.2 3.1 2.9v.1c0 1.6-1.4 2.9-3 2.9zM0 5.3v11.8l1 .9h20l1-.9V5.3l-1-.9h-3.7l-1-3.7-.9-.7H6.6l-.9.7-1 3.7H1l-1 .9zm16.6.9H20v9.9H1.9V6.2h3.4l.9-.7 1-3.7h7.4l1 3.7 1 .7z"></path></symbol><symbol id="icon-filter-quote" viewbox="0 0 21 20"><path d="M21 15.4v-2.1c0-.3 0-.3-.3-.3h-3.5c-.2 0-.3.1-.3.3v3.6c0 .3 0 .3.3.3h2.1c.2 0 .2.1.2.2-.1.5-.5 1-1 1.1-.2 0-.3.1-.3.4v.8c0 .3 0 .3.3.3 1.3-.1 2.3-1.4 2.3-2.7.2-.7.2-1.3.2-1.9zM15 15.4v-2.1c0-.3 0-.3-.3-.3h-3.5c-.2 0-.3.1-.3.3v3.6c0 .3 0 .3.3.3h2.1c.2 0 .2.1.2.2-.1.5-.5 1-1 1.1-.2 0-.3.1-.3.4v.8c0 .3 0 .3.3.3 1.3-.1 2.3-1.4 2.3-2.7.2-.7.2-1.3.2-1.9zM0 4.6v2.1C0 7 0 7 .3 7h3.5c.1 0 .2-.1.2-.3V3.1c0-.3 0-.3-.3-.3H1.6c-.2 0-.2-.1-.2-.2.1-.5.5-1 1-1.1.2 0 .3-.1.3-.4V.3c0-.3-.1-.3-.4-.3C1 .2 0 1.4 0 2.7v1.9zM6 4.6v2.1c0 .3 0 .3.3.3h3.5c.1 0 .2-.1.2-.3V3.1c0-.3 0-.3-.3-.3H7.6c-.2 0-.2-.1-.2-.2.1-.5.5-1 1-1.1.2 0 .3-.1.3-.4V.3c0-.3-.1-.3-.4-.3C7 .2 6 1.4 6 2.7v1.9zM12 5h9v2h-9zM0 13h9v2H0zM0 9h21v2H0z"></path></symbol><symbol id="icon-filter-text" viewbox="0 0 20 21"><path d="M17.5 0h-15C1.1 0 0 1.1 0 2.4V21l4.2-4.1c.1-.1.3-.2.4-.2h13c1.4 0 2.5-1.1 2.5-2.4V2.4C20 1.1 18.9 0 17.5 0zM1.9 16.5V2.4c0-.3.3-.6.6-.6h15.1c.3 0 .6.2.6.6v11.9c0 .3-.3.6-.6.6h-13c-.7 0-1.3.3-1.7.7l-1 .9z"></path><path d="M5.3 5.9h9.4v1.9H5.3zM5.3 8.9H11v1.9H5.3z"></path></symbol><symbol id="icon-filter-video" viewbox="0 0 24 16"><path d="M23.5 2.1c-.3-.2-.7-.1-1 .1L17 6.1V3c0-1.7-1.3-3-3-3H3C1.3 0 0 1.3 0 3v10c0 1.7 1.3 3 3 3h11c1.7 0 3-1.3 3-3V9.9l5.4 3.9c.2.1.4.2.6.2.2 0 .3 0 .5-.1.3-.2.5-.5.5-.9V3c0-.4-.2-.7-.5-.9zM15 13c0 .6-.4 1-1 1H3c-.6 0-1-.4-1-1V3c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v10zm7-1.9L17.7 8 22 4.9v6.2z"></path><circle cx="5.5" cy="5.5" r="1.5"></circle></symbol><symbol id="icon-heart-active" viewbox="0 0 20 17"><path d="M18.5 1.5c-2-2-5.3-2-7.3 0L10 2.7 8.8 1.5c-2-2-5.3-2-7.3 0s-2 5.2 0 7.2l1.2 1.2L10 17l7.3-7.2 1.2-1.2c2-1.9 2-5.1 0-7.1z"></path></symbol><symbol id="icon-heart" viewbox="0 0 20 17"><path d="M18.5 1.5c-2-2-5.3-2-7.3 0L10 2.7 8.8 1.5c-2-2-5.3-2-7.3 0s-2 5.2 0 7.2l1.2 1.2L10 17l7.3-7.2 1.2-1.2c2-1.9 2-5.1 0-7.1zm-3.6 8.3L10 14.6 5.1 9.8 2.7 7.5C1.4 6.1 1.4 4 2.7 2.7c1.3-1.3 3.5-1.3 4.9 0L10 5.1l2.4-2.4c1.3-1.3 3.5-1.3 4.9 0 1.3 1.3 1.3 3.5 0 4.8l-2.4 2.3z"></path></symbol><symbol id="icon-htmlacademy" viewbox="0 0 27 34"><path d="M13.6 0h-.2L0 1.4V26l13.5 8L27 26V1.4L13.6 0zm5.7 16.8l-.9.5-5-3v1.4l3.8 2.3-.8.5-3-1.8v1.4l1.9 1.1-1.8 1.1L2 13.6l11.4-6.8L25 13.5l-4.5 2.6-7.1-4.2v1.4l5.9 3.5zM1.9 15.1l11.4 6.8v1l-8-4.7v1.4l8 4.8v1.1l-8-4.7v1.4l8 4.8 8.2-4.9V17l3.4-2v10l-11.6 6.9-11.4-7v-9.8zm0-3v-9l11.6-1.2 11.6 1.2v9L13.5 5.3v-.1h-.2v.1L1.9 12.1z"></path></symbol><symbol id="icon-input-password" viewbox="0 0 16 20"><path d="M14.4 8.3H4.8V6c0-1.7 1.2-3.3 2.9-3.5 1.9-.2 3.5 1.4 3.5 3.3 0 .5.3.8.8.8h.8c.5 0 .8-.3.8-.8 0-3.2-2.4-5.7-5.4-5.8C5-.1 2.4 2.6 2.4 5.8v2.5h-.8C.7 8.3 0 9.1 0 10v5.8C0 18.2 1.8 20 4 20h8c2.2 0 4-1.8 4-4.2V10c0-.9-.7-1.7-1.6-1.7zm-5.6 6.5v1.1c0 .4-.4.8-.8.8s-.8-.4-.8-.8v-1.1c-.5-.2-.8-.8-.8-1.4 0-.9.7-1.7 1.6-1.7s1.6.7 1.6 1.7c0 .5-.3 1.1-.8 1.4z"></path></symbol><symbol id="icon-input-user" viewbox="0 0 19 18"><path d="M5.4 4.2C5.4 1.9 7.3 0 9.5 0s4.1 1.9 4.1 4.2V7c0 2.3-1.8 4.2-4.1 4.2s-4.1-2-4.1-4.3V4.2zM0 16.6c.7-2.1 5.4-4.2 8.1-4.2h2.7c2.7 0 7.5 2.1 8.1 4.2V18H0v-1.4z"></path></symbol><symbol id="icon-link-arrow" viewbox="0 0 11 16"><path d="M10.6 7.2L2.3.3C1.8-.1.9-.1.4.3s-.5 1.2 0 1.6L7.7 8 .4 14c-.5.4-.5 1.2 0 1.6.3.3.6.4 1 .4s.7-.1 1-.3l8.2-6.9c.5-.4.5-1.2 0-1.6z"></path></symbol><symbol id="icon-repost" viewbox="0 0 19 17"><path d="M19 9.3c-.1.4-.1.9-.2 1.3-.4 1.6-1.1 3-2.2 4.3-.3.3-.3.3-.6 0l-.9-.9c-.1-.1-.1-.2 0-.3.5-.5.9-1.2 1.2-1.8 1.4-2.8.9-6.2-1.2-8.4-.2-.2-.5-.5-.8-.7-.1.1 0 .1 0 .2v2.5c0 .2-.1.2-.2.2h-1.5c-.2 0-.2-.1-.2-.2V.2c0-.1 0-.2.2-.2h5.3c.1 0 .2 0 .2.2v1.5c0 .2-.1.2-.2.2h-1.5c.1.2.2.3.3.4 1.3 1.5 2 3.2 2.3 5.2v1.8zM0 7.7c.1-.5.1-1 .2-1.5.4-1.6 1.2-3.1 2.4-4.3.1-.1.1-.1.2 0 .4.4.8.7 1.2 1.1.1.1.1.2 0 .3C3.3 4.1 2.7 5 2.4 6c-.9 2.7-.5 5.2 1.4 7.4.2.3.5.5.8.7 0 0 .1.1.2.1V14v-2.5c0-.2 0-.3.2-.2h1.5c.2 0 .2.1.2.2v5.3c0 .2-.1.2-.2.2H1.2c-.3 0-.3 0-.3-.3v-1.5c0-.2.1-.2.2-.2h1.5c-.1-.2-.2-.3-.3-.4C1 13.2.3 11.5 0 9.5v-.3-1.5z"></path></symbol><symbol id="icon-search" viewbox="0 0 18 18"><path d="M18 16.8l-4.9-4.9c1-1.2 1.6-2.9 1.6-4.6.1-4.1-3.3-7.3-7.4-7.3C3.4 0 0 3.2 0 7.3s3.2 7.3 7.3 7.3c1.7 0 3.4-.6 4.6-1.6l4.9 4.9 1.2-1.1zM1.7 7.3c0-3.1 2.5-5.6 5.6-5.6S13 4.2 13 7.3 10.4 13 7.3 13s-5.6-2.6-5.6-5.7z"></path></symbol><symbol id="icon-sort" viewbox="0 0 10 12"><path d="M5 12L0 0h10"></path></symbol><symbol id="icon-user" viewbox="0 0 19 18"><path d="M9.5 2a2.12 2.12 0 0 1 2.07 2.15v2.77A2.12 2.12 0 0 1 9.5 9.08a2.12 2.12 0 0 1-2.07-2.16V4.15A2.12 2.12 0 0 1 9.5 2m1.36 12.46a10.93 10.93 0 0 1 4.8 1.54H3.35a10.85 10.85 0 0 1 4.79-1.54h2.72M9.5 0a4.11 4.11 0 0 0-4.07 4.15v2.77a4.07 4.07 0 1 0 8.14 0V4.15A4.11 4.11 0 0 0 9.5 0zm1.36 12.46H8.14c-2.71 0-7.46 2.08-8.14 4.16V18h19v-1.38c-.68-2.08-5.43-4.16-8.14-4.16z" data-name="&#x421;&#x43B;&#x43E;&#x439; 2"></path></symbol><symbol id="icon-video-play-big" viewbox="0 0 27 28"><path d="M25.6 12L3.9.8C3.2.5 2.6 0 1.9 0 .9 0 0 .9 0 2v24c0 1.1.9 2 1.9 2 .6 0 1.3-.5 1.9-.8L25.6 16c.5-.3 1.4-.8 1.4-2s-.9-1.7-1.4-2zM3.9 22.8V5.2L20.8 14 3.9 22.8z"></path></symbol></svg>
</div>

<header class="header">
    <div class="header__wrapper container">
        <div class="header__logo-wrapper">
            <a class="header__logo-link" href="main.html">
                <img class="header__logo" src="img/logo.svg" alt="Логотип readme" width="128" height="24">
            </a>
            <p class="header__topic">
                micro blogging
            </p>
        </div>
        <form class="header__search-form form" action="#" method="get">
            <div class="header__search">
                <label class="visually-hidden">Поиск</label>
                <input class="header__search-input form__input" type="search">
                <button class="header__search-button button" type="submit">
                    <svg class="header__search-icon" width="18" height="18">
                        <use xlink:href="#icon-search"></use>
                    </svg>
                    <span class="visually-hidden">Начать поиск</span>
                </button>
            </div>
        </form>
        <div class="header__nav-wrapper">
            <!-- здесь должен быть PHP код, который показывает следующий тег по условию -->
            <nav class="header__nav">
                <ul class="header__my-nav">
                    <li class="header__my-page header__my-page--popular">
                        <a class="header__page-link header__page-link--active" title="Популярный контент">
                            <span class="visually-hidden">Популярный контент</span>
                        </a>
                    </li>
                    <li class="header__my-page header__my-page--feed">
                        <a class="header__page-link" href="feed.html" title="Моя лента">
                            <span class="visually-hidden">Моя лента</span>
                        </a>
                    </li>
                    <li class="header__my-page header__my-page--messages">
                        <a class="header__page-link" href="messages.html" title="Личные сообщения">
                            <span class="visually-hidden">Личные сообщения</span>
                        </a>
                    </li>
                </ul>
                <!-- здесь должен быть PHP код, который показывает следующий тег по условию -->
                <ul class="header__user-nav">
                    <li class="header__profile">
                        <a class="header__profile-link" href="#">
                            <div class="header__avatar-wrapper">
                                <img class="header__profile-avatar" src="img/userpic-medium.jpg" alt="Аватар профиля">
                            </div>
                            <div class="header__profile-name">
                                <span>
                                    <?php if ($isAuth === 1) : ?>
                                    <?= $userName ?>
                                    <?php endif; ?>
                                </span>
                                <svg class="header__link-arrow" width="10" height="6">
                                    <use xlink:href="#icon-arrow-right-ad"></use>
                                </svg>
                            </div>
                        </a>
                        <div class="header__tooltip-wrapper">
                            <div class="header__profile-tooltip">
                                <ul class="header__profile-nav">
                                    <li class="header__profile-nav-item">
                                        <a class="header__profile-nav-link" href="#">
                          <span class="header__profile-nav-text">
                            Мой профиль
                          </span>
                                        </a>
                                    </li>
                                    <li class="header__profile-nav-item">
                                        <a class="header__profile-nav-link" href="#">
                          <span class="header__profile-nav-text">
                            Сообщения
                            <i class="header__profile-indicator">2</i>
                          </span>
                                        </a>
                                    </li>

                                    <li class="header__profile-nav-item">
                                        <a class="header__profile-nav-link" href="#">
                          <span class="header__profile-nav-text">
                            Выход
                          </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="header__post-button button button--transparent" href="adding-post.html">Пост</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="page__main page__main--popular">
    <div class="container">
        <h1 class="page__title page__title--popular">Популярное</h1>
    </div>
    <div class="popular container">
        <div class="popular__filters-wrapper">
            <div class="popular__sorting sorting">
                <b class="popular__sorting-caption sorting__caption">Сортировка:</b>
                <ul class="popular__sorting-list sorting__list">
                    <li class="sorting__item sorting__item--popular">
                        <a class="sorting__link sorting__link--active" href="#">
                            <span>Популярность</span>
                            <svg class="sorting__icon" width="10" height="12">
                                <use xlink:href="#icon-sort"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="sorting__item">
                        <a class="sorting__link" href="#">
                            <span>Лайки</span>
                            <svg class="sorting__icon" width="10" height="12">
                                <use xlink:href="#icon-sort"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="sorting__item">
                        <a class="sorting__link" href="#">
                            <span>Дата</span>
                            <svg class="sorting__icon" width="10" height="12">
                                <use xlink:href="#icon-sort"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="popular__filters filters">
                <b class="popular__filters-caption filters__caption">Тип контента:</b>
                <ul class="popular__filters-list filters__list">
                    <li class="popular__filters-item popular__filters-item--all filters__item filters__item--all">
                        <a class="filters__button filters__button--ellipse filters__button--all filters__button--active" href="#">
                            <span>Все</span>
                        </a>
                    </li>
                    <li class="popular__filters-item filters__item">
                        <a class="filters__button filters__button--photo button" href="#">
                            <span class="visually-hidden">Фото</span>
                            <svg class="filters__icon" width="22" height="18">
                                <use xlink:href="#icon-filter-photo"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="popular__filters-item filters__item">
                        <a class="filters__button filters__button--video button" href="#">
                            <span class="visually-hidden">Видео</span>
                            <svg class="filters__icon" width="24" height="16">
                                <use xlink:href="#icon-filter-video"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="popular__filters-item filters__item">
                        <a class="filters__button filters__button--text button" href="#">
                            <span class="visually-hidden">Текст</span>
                            <svg class="filters__icon" width="20" height="21">
                                <use xlink:href="#icon-filter-text"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="popular__filters-item filters__item">
                        <a class="filters__button filters__button--quote button" href="#">
                            <span class="visually-hidden">Цитата</span>
                            <svg class="filters__icon" width="21" height="20">
                                <use xlink:href="#icon-filter-quote"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="popular__filters-item filters__item">
                        <a class="filters__button filters__button--link button" href="#">
                            <span class="visually-hidden">Ссылка</span>
                            <svg class="filters__icon" width="21" height="18">
                                <use xlink:href="#icon-filter-link"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="popular__posts">
            <div class="visually-hidden" id="donor">
                <!--содержимое для поста-цитаты-->
                <blockquote>
                    <p>
                        <!--здесь текст-->
                    </p>
                    <cite>Неизвестный Автор</cite>
                </blockquote>

                <!--содержимое для поста-ссылки-->
                <div class="post-link__wrapper">
                    <a class="post-link__external" href="http://" title="Перейти по ссылке">
                        <div class="post-link__info-wrapper">
                            <div class="post-link__icon-wrapper">
                                <img src="https://www.google.com/s2/favicons?domain=vitadental.ru" alt="Иконка">
                            </div>
                            <div class="post-link__info">
                                <h3><!--здесь заголовок--></h3>
                            </div>
                        </div>
                        <span><!--здесь ссылка--></span>
                    </a>
                </div>

                <!--содержимое для поста-фото-->
                <div class="post-photo__image-wrapper">
                    <img src="img" alt="Фото от пользователя" width="360" height="240">
                </div>

                <!--содержимое для поста-видео-->
                <div class="post-video__block">
                    <div class="post-video__preview">
                        <?=embed_youtube_cover(/* вставьте ссылку на видео */); ?>
                        <img src="img/coast-medium.jpg" alt="Превью к видео" width="360" height="188">
                    </div>
                    <a href="post-details.html" class="post-video__play-big button">
                        <svg class="post-video__play-big-icon" width="14" height="14">
                            <use xlink:href="#icon-video-play-big"></use>
                        </svg>
                        <span class="visually-hidden">Запустить проигрыватель</span>
                    </a>
                </div>

                <!--содержимое для поста-текста-->
                <p><!--здесь текст--></p>
            </div>

            <article class="popular__post post">
                <header class="post__header">
                    <h2><!--здесь заголовок--></h2>
                </header>
                <div class="post__main">
                    <!--здесь содержимое карточки-->
                </div>
                <footer class="post__footer">
                    <div class="post__author">
                        <a class="post__author-link" href="#" title="Автор">
                            <div class="post__avatar-wrapper">
                                <!--укажите путь к файлу аватара-->
                                <img class="post__author-avatar" src="img" alt="Аватар пользователя">
                            </div>
                            <div class="post__info">
                                <b class="post__author-name"><!--здесь имя пользоателя--></b>
                                <time class="post__time" datetime="">дата</time>
                            </div>
                        </a>
                    </div>
                    <div class="post__indicators">
                        <div class="post__buttons">
                            <a class="post__indicator post__indicator--likes button" href="#" title="Лайк">
                                <svg class="post__indicator-icon" width="20" height="17">
                                    <use xlink:href="#icon-heart"></use>
                                </svg>
                                <svg class="post__indicator-icon post__indicator-icon--like-active" width="20" height="17">
                                    <use xlink:href="#icon-heart-active"></use>
                                </svg>
                                <span>0</span>
                                <span class="visually-hidden">количество лайков</span>
                            </a>
                            <a class="post__indicator post__indicator--comments button" href="#" title="Комментарии">
                                <svg class="post__indicator-icon" width="19" height="17">
                                    <use xlink:href="#icon-comment"></use>
                                </svg>
                                <span>0</span>
                                <span class="visually-hidden">количество комментариев</span>
                            </a>
                        </div>
                    </div>
                </footer>
            </article>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__container container">
            <div class="footer__site-info">
                <div class="footer__site-nav">
                    <ul class="footer__info-pages">
                        <li class="footer__info-page">
                            <a class="footer__page-link" href="#">О проекте</a>
                        </li>
                        <li class="footer__info-page">
                            <a class="footer__page-link" href="#">Реклама</a>
                        </li>
                        <li class="footer__info-page">
                            <a class="footer__page-link" href="#">О разработчиках</a>
                        </li>
                        <li class="footer__info-page">
                            <a class="footer__page-link" href="#">Работа в Readme</a>
                        </li>
                        <li class="footer__info-page">
                            <a class="footer__page-link" href="#">Соглашение пользователя</a>
                        </li>
                        <li class="footer__info-page">
                            <a class="footer__page-link" href="#">Политика конфиденциальности</a>
                        </li>
                    </ul>
                </div>
                <p class="footer__license">
                    При использовании любых материалов с сайта обязательно указание Readme в качестве источника. Все авторские и исключительные права в рамках проекта защищены в соответствии с положениями 4 части Гражданского Кодекса Российской Федерации.
                </p>
            </div>
            <div class="footer__my-info">
                <ul class="footer__my-pages">
                    <li class="footer__my-page footer__my-page--feed">
                        <a class="footer__page-link" href="feed.html">Моя лента</a>
                    </li>
                    <li class="footer__my-page footer__my-page--popular">
                        <a class="footer__page-link" href="popular.html">Популярный контент</a>
                    </li>
                    <li class="footer__my-page footer__my-page--messages">
                        <a class="footer__page-link" href="messages.html">Личные сообщения</a>
                    </li>
                </ul>
                <div class="footer__copyright">
                    <a class="footer__copyright-link" href="#">
                        <span>Разработано HTML Academy</span>
                        <svg class="footer__copyright-logo" width="27" height="34">
                            <use xlink:href="#icon-htmlacademy"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="libs/dropzone.js"></script>
<script src="js/dropzone-settings.js"></script>
<script src="js/main.js"></script>
</body>
</html>
