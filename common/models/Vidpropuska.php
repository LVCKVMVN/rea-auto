<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vidpropuska".
 *
 * @property int $id
 * @property string $vid_propuska_name
 *
 * @property Zakaz[] $zakazs
 */
class Vidpropuska extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vidpropuska';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vid_propuska_name'], 'required'],
            [['vid_propuska_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'vid_propuska_name' => Yii::t('common', 'Vid Propuska Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['vidpropuska_id' => 'id']);
    }
}
