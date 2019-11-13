<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Knigajalob */

$this->title = 'Добавление отзыва';
$this->params['breadcrumbs'][] = ['label' => 'Knigajalobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="knigajalob-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
