<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 17.09.2017
 * Time: 21:44
 */
namespace app\models;
use yii\db\ActiveRecord;

class Type extends ActiveRecord
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
        return 'type';
    }


    public function getType(){
        return $this->hasMany(Category::className(), ['id_type'=>'type_id']);
    }



}