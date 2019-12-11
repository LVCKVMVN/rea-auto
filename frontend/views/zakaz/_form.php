<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\VidPropuska;

/* @var $this yii\web\View */
/* @var $model common\models\Zakaz */
/* @var $client common\models\Client */
/* @var $car common\models\Car */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakaz-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]);
    $vid = VidPropuska::find()->all();
    $items = ArrayHelper::map($vid,'id','vid_propuska_name');
    $params = [
        'prompt' => 'Выберите тип пропуска'
    ];?>


        <fieldset>
        <legend>Client Info</legend>
        <?= $form->field($client, 'surname')->textInput(['autofocus' => true]) ?>
        <?= $form->field($client, 'name') ?>
        <?= $form->field($client, 'patronymic') ?>
        <?= $form->field($client, 'post') ?>
        <?= $form->field($client, 'nameofpodrazdelenie') ?>
        <?= $form->field($client, 'email') ?>
        <?= $form->field($client, 'number') ?>
        </fieldset>

        <fieldset>
        <legend>Car info</legend>
        <?= $form->field($car, 'carname') ?>
        <?= $form->field($car, 'carcolor') ?>
        <?= $form->field($car, 'gosnumber') ?>
        </fieldset>

        <fieldset>
        <legend>Order Info</legend>
        <?= $form->field($model, 'scandocument')->fileInput() ?>
        <?= $form->field($model, 'vidpropuska_id')->dropDownList($items,$params);?>
        </fieldset>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
