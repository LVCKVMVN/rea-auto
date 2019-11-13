<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
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

  <section class="contacts">
    <div class="container">
      <div class="contacts__top">
        <div class="contacts__title-box">
          <div class="contacts__title">
            <h2>Контакты</h2>
          </div>
          <div class="contacts__text">На этой странице вы можете ознакомиться с&nbsp;нашими контактами и задать вопрос,
            если у&nbsp;вас возникли трудности.</div>
        </div>
      </div>
  </section>
  

<?php
$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => ($model->getAttributeLabel( 'name' ))])?> 

                <?= $form->field($model, 'email')->textInput(['placeholder' => ($model->getAttributeLabel( 'email' ))])?> 

                <?= $form->field($model, 'subject')->textInput(['placeholder' => ($model->getAttributeLabel( 'subject' ))])?> 

                <?= $form->field($model, 'body')->textarea(['rows' => 6])?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
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
