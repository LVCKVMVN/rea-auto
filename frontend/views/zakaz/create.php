<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Zakaz */

$this->title = Yii::t('app', 'Создание заказа');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Заказ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakaz-create">

    <?= $this->render('_form', [
        'model' => $model,
        'client' => $client,
        'car' => $car,
    ]) ?>

</div>
