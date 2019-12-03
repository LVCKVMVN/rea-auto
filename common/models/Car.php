<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property string $carname
 * @property string $carcolor
 * @property string $gosnumber
 *
 * @property Zakaz[] $zakazs
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carname', 'carcolor', 'gosnumber'], 'required'],
            [['carname', 'carcolor', 'gosnumber'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'carname' => Yii::t('common', 'Carname'),
            'carcolor' => Yii::t('common', 'Carcolor'),
            'gosnumber' => Yii::t('common', 'Gosnumber'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['car_id' => 'id']);
    }
}
