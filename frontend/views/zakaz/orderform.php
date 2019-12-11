<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $orderform common\models\OrderForm */
/* @var $form ActiveForm */

$this->title = 'Оформление заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-orderform">
<div class="title">
      <h2>Оформление заявки на автомобильный пропуск</h2>
      <p>
</p>
</div>
<form>
    <?php $form = ActiveForm::begin(); ?>

    <fieldset>

        <legend>Client Info</legend>
        <?= $form->field($orderform->client, 'surname')->textInput(['autofocus' => true]) ?>
        <?= $form->field($orderform->client, 'name') ?>
        <?= $form->field($orderform->client, 'patronymic') ?>
        <?= $form->field($orderform->client, 'post') ?>
        <?= $form->field($orderform->client, 'nameofpodrazdelenie') ?>
        <?= $form->field($orderform->client, 'email') ?>
        <?= $form->field($orderform->client, 'number') ?>
    </fieldset>

    <fieldset>
        <legend>Car info</legend>
        <?= $form->field($orderform->car, 'carname') ?>
        <?= $form->field($orderform->car, 'carcolor') ?>
        <?= $form->field($orderform->car, 'gosnumber') ?>
    </fieldset>

</form>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
