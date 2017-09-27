<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "order_items".
 *
 * @property string $id
 * @property string $order_id
 * @property string $product_id
 * @property string $name
 * @property double $price
 * @property integer $qty_item
 * @property double $sum_item
 */
class Region extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    public function getOrder(){

        return $this->hasMany(Order::className(), ['region' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_name'], 'string'],
        ];
    }


}
