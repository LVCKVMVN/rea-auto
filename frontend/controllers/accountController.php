<?php

namespace frontend\controllers;

class accountController extends \yii\web\Controller
{
    public function actionCreateOrder()
    {
        return $this->render('create-order');
    }

    public function actionIndex()
    {
        return $this->render('personalacc');
    }

}
