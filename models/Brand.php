<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 15.09.2017
 * Time: 14:09
 */

namespace app\models;
use yii\db\ActiveRecord;

class Brand  extends ActiveRecord
{
    public static function tableName(){
        return 'brand';
    }

    public function getProducts_b(){
        return $this->hasMany(Product::className(), ['id_brand'=>'id']);
    }


}