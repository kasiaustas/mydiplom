<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 15.09.2017
 * Time: 14:09
 */

namespace app\models;
use yii\db\ActiveRecord;

class Form  extends ActiveRecord
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
        return 'form';
    }

    public function getProducts_f(){
        return $this->hasMany(Product::className(), ['id_form'=>'id']);
    }

}