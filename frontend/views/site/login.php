<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\LoginAsset;


LoginAsset::register($this);


$this->title = 'Авторизация';?>
<div class="site-login">

<div class="container">
    <div class="container-login">
      <div class="container-login__form">
        <form class="login-form" method="POST">
          <span class="login-form__title">
            Вход в аккаунт
          </span>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <!-- <?= $form->field($model, 'rememberMe')->checkbox() ?> -->

            <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>

                <div class="reset-text">
                Забыли <?= Html::a('Логин / Пароль?', ['site/request-password-reset']) ?>
                </div>

                <div class="create-account">
                Нет аккаунта?
                <?= Html::a('Регистрация', ['/site/signup'], ['class'=>'nav__link'])?>
                </div>
                
            <div class="main">
            <?= Html::a('На главную', ['/'], ['class'=>'nav__link'])?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
