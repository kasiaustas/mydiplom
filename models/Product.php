<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 15.09.2017
 * Time: 14:08
 */

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName(){
        return 'product';
    }

    public function getBrand(){
        return $this->hasOne(Brand::className(), ['id'=>'id_brand']);
    }

    public function getType(){
        return $this->hasOne(Type::className(), ['type_id'=>'id_type']);
    }

    public function getForm(){
        return $this->hasOne(Form::className(), ['id'=>'id_form']);
    }

}