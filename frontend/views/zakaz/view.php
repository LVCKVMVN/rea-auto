<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Zakaz */

$this->title = 'Просмотр заказа';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Заказы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakaz-view">

    <p>
        <?= Html::a(Yii::t('app', 'Назад'), ['/zakaz'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Обновить'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <!-- <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'client.surname',
            'client.name',
            'client.patronymic',
            'client.post',
            'client.nameofpodrazdelenie',
            'client.number',
            'client.email',
            'user.username',
            'vidpropuska.vid_propuska_name',
            'car.carname',
            'car.carcolor',
            'car.gosnumber',
            'scandocument',
        ],
    ]) ?>

</div>
