<?php

namespace app\modules\admin\models;

use Yii;
use app\models\Region;

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
 * @property integer $region
 *
 * @property Region $region0
 * @property OrderItems[] $orderItems
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'qty', 'sum', 'name', 'last_name', 'email', 'phone', 'address', 'sity'], 'required'],
            [['created_at'], 'safe'],
            [['qty', 'region'], 'integer'],
            [['sum'], 'number'],
            [['status'], 'string'],
            [['name', 'last_name', 'email', 'phone', 'address', 'sity'], 'string', 'max' => 255],
            [['region'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ заказа',
            'created_at' => 'Дата создания',
//            'updated_at' => 'Дата изменения',
            'qty' => 'Кол-во',
            'sum' => 'Сумма',
            'status' => 'Статус',
            'name' => 'Имя',
            'last_name' => 'Фамилия',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'address' => 'Адрес',
            'sity' => 'Населённый пункт',
            'region' => 'Область',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion0()
    {
        return $this->hasOne(Region::className(), ['id' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['order_id' => 'id']);
    }
}
