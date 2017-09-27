<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
/**
 * This is the model class for table "order".
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $qty
 * @property double $sum
 * @property string $status
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $sity
 * @property string $region
 * @property string $date
 * @property string $time
 */
class Order extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }


    public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                   // ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                 'value' => new Expression('NOW()'),
            ],
        ];
    }


    public function getOrderItems(){

        return $this->hasMany(OrderItems::className(), ['order_id' => 'id']);
    }

    public function getRegion(){

        return $this->hasOne(Region::className(), ['id' => 'region']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'last_name', 'email', 'phone', 'address', 'sity', 'region'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['qty'], 'integer'],
            [['sum'], 'number'],
            [['region'], 'string'],
            [['status'], 'boolean'],
            [['name', 'last_name', 'email', 'phone', 'address', 'sity'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'last_name' => 'Фамилия',
            'email' => 'Электронная почта',
            'phone' => 'Мобильный телефон',
            'address' => 'Адрес доставки',
            'sity' => 'Населенный пункт',
            'region' => 'Область',
        ];
    }
}
