<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property string $post
 * @property string $nameofpodrazdelenie
 * @property string $email
 * @property int $number
 * @property int $user_id
 *
 * @property User $user
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'patronymic', 'post', 'nameofpodrazdelenie', 'email', 'number', 'user_id'], 'required'],
            [['number', 'user_id'], 'integer'],
            [['surname', 'name', 'patronymic', 'post', 'nameofpodrazdelenie'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'surname' => Yii::t('common', 'Фамилия'),
            'name' => Yii::t('common', 'Имя'),
            'patronymic' => Yii::t('common', 'Отчество'),
            'post' => Yii::t('common', 'Post'),
            'nameofpodrazdelenie' => Yii::t('common', 'Наименование подразделения'),
            'email' => Yii::t('common', 'Эл. почта'),
            'number' => Yii::t('common', 'Номер телефона'),
            'user_id' => Yii::t('common', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
