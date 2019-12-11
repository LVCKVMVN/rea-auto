<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;
use common\models\Client;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ZakazSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Заказы');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakaz-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Заказать пропуск'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            

            //'id',
            
            [
                'attribute' => 'client_id',
                'format' => 'raw',
                'value' => 'client.surname',
            ],

            [
                'attribute' => 'user_id',
                'format' => 'raw',
                'value' => 'user.username',
            ],

            [
                'attribute' => 'vidpropuska_id',
                'format' => 'raw',
                'value' => 'vidpropuska.vid_propuska_name',
            ],
            [
                'attribute' => 'car_id',
                'format' => 'raw',
                'value' => 'car.carname',
            ],

            'scandocument',

            ['class' => 'yii\grid\ActionColumn',
                // 'header'=>'Действия', 
                'headerOptions' => ['width' => '53'],
                'template' => '{view} {update} {link}',
            ],
        ],
    ]); ?>
</div>
