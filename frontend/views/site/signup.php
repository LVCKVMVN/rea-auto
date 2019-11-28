<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\LoginAsset;


LoginAsset::register($this);

$this->title = 'Signup';
?>
    <div class="container-reg">
      <div class="container-reg__form">
        <form class="reg-form" method="POST">
          <span class="reg-form__title">
            Регистрация аккаунта
          </span>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>

            <?php ActiveForm::end(); ?>

            <div class="reset-text">
                Уже есть аккаунт? <?= Html::a('Войдите', ['site/login']) ?>
                </div>
                
            <div class="main">
            <?= Html::a('На главную', ['/'], ['class'=>'nav__link'])?>
        </div>
      </div>
    </div>
