<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "zakaz".
 *
 * @property int $id
 * @property int $user_id
 * @property int $vidpropuska_id
 * @property int $car_id
 * @property int $client_id
 * @property string $scandocument
 *
 * @property Car $car
 * @property User $user
 * @property Vidpropuska $vidpropuska
 * @property Client $client
 */
class Zakaz extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zakaz';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'vidpropuska_id', 'car_id', 'client_id'], 'required'],
            [['user_id', 'vidpropuska_id', 'car_id', 'client_id'], 'integer'],
            [['scandocument'], 'string', 'max' => 255],
            [['car_id'], 'exist', 'skipOnError' => true, 'targetClass' => Car::className(), 'targetAttribute' => ['car_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['vidpropuska_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vidpropuska::className(), 'targetAttribute' => ['vidpropuska_id' => 'id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['car_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'user_id' => Yii::t('common', 'ID пользователя'),
            'vidpropuska_id' => Yii::t('common', 'Вид пропуска'),
            'car_id' => Yii::t('common', 'ID Автомобиля'),
            'client_id' => Yii::t('common', 'Клиент'),
            'scandocument' => Yii::t('common', 'Служебная записка'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Car::className(), ['id' => 'car_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVidpropuska()
    {
        return $this->hasOne(Vidpropuska::className(), ['id' => 'vidpropuska_id']);
    }

    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
    }
}
