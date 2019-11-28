<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Личный кабинет';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

    <div class="main">
    <div class="container">
      <div class="main__inner">
        <div class="menu">
          <div class="menu__item">
            <div class="main-page">
            <?= Html::a('Главная', ['/'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="view-order">
            <?= Html::a('Просмотр состояния заказа на пропуск', ['/site/personalacc'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="search-order">
            <?= Html::a('Поиск заказа на пропуск', ['/site/personalacc'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="sorting-order">
            <?= Html::a('Сортировка заказов на пропуск', ['/site/personalacc'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="create-order">
            <?= Html::a('Заказ пропуска', ['/site/personalacc'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="help">
            <?= Html::a('Помощь', ['/site/contact'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="settings">
            <?= Html::a('Настройки', ['/site/personalacc'])?>
            </div>
          </div>
          <div class="menu__item">
            <div class="quit">
            <?= Html::a('Выход', ['/site/logout'])?>
            </div>
          </div>
        </div>
        <div class="info">
          <div class="info__title">
            Мой личный кабинет
          </div>
          <div class="info__title-about">
            Информация об аккаунте
          </div>
          <div class="info__about">
            <div class="info__about-login">
              Логин <span> <?= Yii::$app->user->identity->username?> </span>
            </div>
            <div class="info__about-fio">
              Пароль <span> ******** </span>
            </div>
            <div class="info__about-email">
              Email <span> <?= Yii::$app->user->identity->email?> </span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


</div>
