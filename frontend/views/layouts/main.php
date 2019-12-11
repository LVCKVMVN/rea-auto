<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;


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
        if(Yii::$app->language == 'ru'): 
          echo Html::a('Switch to EN', 
          array_merge(Yii::$app->request->get(), [Yii::$app->controller->route, 'language' => 'en']), ['class'=>'nav__link']); 
      else: 
          echo Html::a('Switch to RU', 
          array_merge(Yii::$app->request->get(),  [Yii::$app->controller->route, 'language' => 'ru']), ['class'=>'nav__link']);
        endif;?>

          <?= Html::a(Yii::t('app', 'Светлая тема'), ['/'], ['class'=>'nav__link']) ?>
          <?= Html::a(Yii::t('app', 'Темная тема'), ['/'], ['class'=>'nav__link']) ?>
          <?= Html::a(Yii::t('app', 'Контакты'), ['/site/contact'], ['class'=>'nav__link']) ?>
        </div>
        <div class="nav__buttons">
            <?php if (Yii::$app->user->isGuest) {?>
            <?= Html::a(Yii::t('app', 'Регистрация'), ['/site/signup'], ['class'=>'nav__link']), Html::a(Yii::t('app', 'Войти'), ['/site/login'], ['class'=>'nav__link']); ?>
            <?php } else { ?>
              <?= Html::a(Yii::t('app', 'Личный кабинет'), ['/site/personalacc'], ['class'=>'nav__link']),
              Html::a(Yii::t('app', 'Выйти('). Yii::$app->user->identity->username . ')', ['/site/logout'],  ['class'=>'nav__link']);}?>
              </div>
      </nav>
    </div>
  </header>

  <div class="intro">
    <div class="container">
      <div class="intro__inner">
        <a href="/">
          <img src="../img/logo.png" class="intro__logo" alt="Логотип РЭУ" height="136px">
        </a>
        <div class="intro__info">
          <h1 class="intro__title"> <?= Yii::t('app', 'Российский экономический УНИВЕРСИТЕТ')?> <br> <?= Yii::t('app', 'имени Г.В. Плеханова')?> </h1>
          <p class="intro__text"> <?= Yii::t('app', 'Основан в 1907 году')?> </p>
        </div>
        <div class="intro__link">
          <div class="intro__branch">
            <img src="../img/marker_map.png" alt="">
            <a href="https://www.rea.ru/ru/org/branches/default.aspx" class="intro__branch-title">22 филиала</a>
            <p class="intro__branch-text">в России и за рубежом</p>
          </div>
          <div class="intro__about">
            <img src="../img/folder-small.png" alt="">
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

  <div class='breadcrumbs__list'>
        
  </div>

<div class="container">
<?= breadcrumbs::widget( [ 'links'=> isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], 'options' => ['class' => 'breadcrumb'],]),
   $content ?>
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
