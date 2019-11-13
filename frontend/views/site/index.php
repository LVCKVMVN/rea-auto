<?php

/* @var $this yii\web\View */

$this->title = 'Заказ авто. пропусков РЭУ';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,500,700&display=swap&subset=cyrillic"
    rel="stylesheet">
</head>

<div class="intro">
    <div class="container">
      <div class="intro__inner">
        <a href="/">
          <img src="image/logo.png" class="intro__logo" alt="Логотип РЭУ" height="136px">
        </a>
        <div class="intro__info">
          <h1 class="intro__title">Российский экономический УНИВЕРСИТЕТ <br> имени Г.В. Плеханова</h1>
          <p class="intro__text">Основан в 1907 году</p>
        </div>
        <div class="intro__link">
          <div class="intro__branch">
            <img src="image/marker_map.png" alt="">
            <a href="https://www.rea.ru/ru/org/branches/default.aspx" class="intro__branch-title">22 филиала</a>
            <p class="intro__branch-text">в России и за рубежом</p>
          </div>
          <div class="intro__about">
            <img src="image/folder-small.png" alt="">
            <a href="https://www.rea.ru/sveden/" class="intro__about-title">Сведения</a>
            <p class="intro__about-text">об образовательной организации</p>
          </div>
        </div>
      </div>

    </div>
  </div> <!-- Intro -->

  <div class="intro-header">
    <div class="container">
      <div class="intro-header__inner">
          <a href="https://www.rea.ru/ru/Pages/About.aspx">Об университете</a>
          <a href="https://www.rea.ru/ru/org/default.aspx">Структура</a>
          <a href="https://www.rea.ru/ru/Pages/Education.aspx">Образование</a>
          <a href="https://www.rea.ru/ru/pages/academiclife.aspx">Наука</a>
          <a href="https://www.rea.ru/ru/org/managements/Pages/mezhdupr.aspx">Международная деятельность</a>
      </div>
    </div>
  </div>

  <section class="services">
    <div class="container">
      <div class="services__top">
        <div class="services__title-box">
          <div class="services__title">Наши услуги</div>
          <div class="services__text">Обработка заявок на разные виды пропусков.</div>
        </div>
        <div class="services__btn">
          <a href="#">Показать все услуги
          </a>
        </div>
      </div>
      <div class="services__items">
        <div class="services__item">
          <img src="image/services-1.png" alt="">
          <div class="services__item-title">Автомобильные пропуска</div>
          <div class="services__item-text">Подача заявки на автомобильный пропуск в РЭУ Им. Г.В. Плеханова</div>
          <div class="services__item-btn">
            <a href="" class="services__item-link">Подробнее</a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              Заказать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="image/services-2.png" alt="">
          <div class="services__item-title">Временные пропуска</div>
          <div class="services__item-text">Подача заявки на временный пропуск в РЭУ Им. Г.В. Плеханова</div>
          <div class="services__item-btn">
            <a href="" class="services__item-link">Подробнее</a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              Заказать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="image/services-3.png" alt="">
          <div class="services__item-title">Обычные пропуска</div>
          <div class="services__item-text">Подача заявки на обычный пропуск в РЭУ Им. Г.В. Плеханова</div>
          <div class="services__item-btn">
            <a href="" class="services__item-link">Подробнее</a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              Заказать
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- Services -->

  <footer class="footer-contacts">
    <div class="container">
      <div class="footer-contacts__inner">
        <div class="footer-contacts__location">
          <p>Наше местоположение</p>
          <p>Российская Федерация, 117997, Москва, Стремянный переулок, дом 36</p>
        </div>

        <div class="footer-contacts__schedule">
          <p>График работы:</p>
          <p>Понедельник - Пятница 7:00 - 22:00<br>
            Суббота <br>7:00 - 21:00<br>
            Воскресенье<br> Выходной</p>
        </div>

        <div class="footer-contacts__social">
          <p>Ссылки на соц.сети</p>
          <a class="footer-contacts__social__front" href="https://vk.com/kiryxer">
            <img src="image/social/vk.png" alt="Ссылка на ВК front-end">
          </a>
          <a href="https://vk.com/lvcckvmvn">
            <img src="image/social/vk.png" alt="Ссылка на ВК back-end">
          </a>
        </div>

        <div class="footer-contacts__comm">
          <p>Связаться с нами</p>
          <p>
            <a href="tel:+79778828723" class="footer-contacts__comm__phone">+79778828723</a>
            <a href="mailto:kiryxer@gmail.com" class="footer-contacts__comm__email">
              kiryxer@gmail.com
            </a>
            <a href="tel:+79653512302" class="footer-contacts__comm__phone">+79653512302</a>
            <a href="mailto:igorsuvid@gmail.com" class="footer-contacts__comm__email">
              igorsuvid@gmail.com
            </a>
          </p>
        </div>
        <iframe class="footer-contacts__map" src="https://yandex.ru/map-widget/v1/-/CGDjYRzj" width="560" height="400"
          frameborder="1" allowfullscreen="true"></iframe>
      </div>

      <!-- <div class="footer-contacts__copy">
        <p> &copy; 2019 Федеральное государственное бюджетное образовательное учреждение высшего образования «Российский
          экономический университет имени Г.В. Плеханова»</p>
      </div> -->

    </div>
  </footer>

  <div id="modal">
      <form>
        <input type="text" placeholder="Ваше имя">
        <input type="text" placeholder="Ваше телефон">
        <input type="submit" value="Отправить">
      </form>
    </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>