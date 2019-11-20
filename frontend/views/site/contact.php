<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>

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
