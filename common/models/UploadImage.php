<?php


namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;


class UploadImage extends Model
{

    public $scandocument;

    public function rules()
    {
        return[
            [['scandocument'], 'file', 'skipOnEmpty'=> false, 'extensions' => 'png, jpg'],];
    }

    public function upload()
    {
        if($this->validate()) {
          $this->scandocument->saveAs('uploads/' . $this->scandocument->baseName . '.' . $this->scandocument->extension);
            return true;
        }else
            {
            return false;
            }
    }



}