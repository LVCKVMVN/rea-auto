<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="<?= Yii::$app->charset ?>">
  <link
    href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,500,700&display=swap&subset=cyrillic"
    rel="stylesheet">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>
  <header class="header">
    <div class="container">
      <nav class="nav">
        <div class="nav__main">
        <?php 
        if(Yii::$app->language == 'en'): 
          echo Html::a('Рус', 
          array_merge(Yii::$app->request->get(), [Yii::$app->controller->route, 'language' => 'ru']), ['class'=>'nav__link']); 
      else: 
          echo Html::a('Eng', 
          array_merge(Yii::$app->request->get(), [Yii::$app->controller->route, 'language' => 'en']), ['class'=>'nav__link']);
        endif;?>
          <a href="/" class="nav__link">Светлая тема</a>
          <a href="/" class="nav__link">Темная тема</a>
          <?= Html::a('Контакты', ['/site/contact'], ['class'=>'nav__link']) ?>
          <?php if (!Yii::$app->user->isGuest) {?>
            <?= Html::a('Книга', ['/knigajalob'], ['class'=>'nav__link']);}?>
        </div>
        <div class="nav__buttons">
            <?php if (Yii::$app->user->isGuest) {?>
            <?= Html::a('Регистрация', ['/site/signup'], ['class'=>'nav__link']), Html::a('Войти', ['/site/login'], ['class'=>'nav__link']); ?>
            <?php } else { ?>
              <?= Html::a('Личный кабинет', ['/site/personalacc'], ['class'=>'nav__link']),
              Html::a('Выход(' . Yii::$app->user->identity->username . ')', ['/site/logout'],  ['class'=>'nav__link']);}?>
              </div>
      </nav>
    </div>
  </header>

  <section class="contacts">
    <div class="container">
      <div class="contacts__top">
        <div class="contacts__title-box">
          <div class="contacts__title">
            <h2>Личный кабинет</h2>
          </div>
          <div class="service_text">
          Здесь вы можете что-то
          </div>
      </div>
  </section>

<div class="site-about">
    <div class="main">
    <div class="container">
    <?= breadcrumbs::widget( [ 'links'=> isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], 'options' => ['class' => 'breadcrumb'],])?>
      <div class="main__inner">
        <div class="menu">
          <div class="menu__item">
            <div class="main-page">
            <?= Html::a('Личный кабинет', ['/site/personalacc'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="view-order">
            <?= Html::a('Просмотр состояния заказа на пропуск', ['/zakaz'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="search-order">
            <?= Html::a('Поиск заказа на пропуск', ['/zakaz'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="sorting-order">
            <?= Html::a('Сортировка заказов на пропуск', ['/zakaz'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="create-order">
            <?= Html::a('Заказ пропуска', ['/zakaz'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="help">
            <?= Html::a('Помощь', ['/site/contact'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="settings">
            <?= Html::a('Настройки', ['/site/accsettings'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="quit">
            <?= Html::a('Выход', ['/site/logout'])?>
            </div>
          </div>
        </div>
        <div class="info">
        <div class="site-about">
        <?= $content ?>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  


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
            <img src="../img/social/vk.png" alt="Ссылка на ВК front-end">
          </a>
          <a href="https://vk.com/lvcckvmvn">
            <img src="../img/social/vk.png" alt="Ссылка на ВК back-end">
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

      <div class="footer-contacts__copy">
        <p> &copy; 2019 Федеральное государственное бюджетное образовательное учреждение высшего образования «Российский
          экономический университет имени Г.В. Плеханова»</p>
      </div>
    </div>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>
  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
