<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Настройки аккаунта';
$this->params['breadcrumbs'][] = $this->title;
?>


          <div class="info__title-about">
            Информация об аккаунте
          </div>
          <div class="info__about">
            <div class="info__about-login">
              Логин <span> <?= Yii::$app->user->identity->username ?> </span>
            </div>
            <div class="info__about-fio">
              Пароль <span> ****** </span>
            </div>
            <div class="info__about-email">
              Email <span> <?= Yii::$app->user->identity->email ?> </span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
