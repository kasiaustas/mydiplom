<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\Brand;



/**
 * This is the model class for table "product".
 *
 * @property integer $id_product
 * @property integer $id_type
 * @property integer $id_brand
 * @property integer $id_form
 * @property string $title
 * @property integer $price
 * @property integer $quantity
 * @property string $picture
 * @property string $description
 * @property string $sale
 * @property string $keywords
 *
 * @property OrderItems[] $orderItems
 * @property Type $idType
 * @property Brand $idBrand
 * @property Form $idForm
 */
class Product extends \yii\db\ActiveRecord
{
    public  $image;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_type', 'id_brand', 'id_form', 'title', 'price' ], 'required'],
            [['id_type', 'id_brand', 'id_form', 'price', 'quantity'], 'integer'],
            [['description'], 'string'],
            [['title', 'sale', 'keywords'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions'=>'png, jpg'],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['id_type' => 'type_id']],
            [['id_brand'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['id_brand' => 'id']],
            [['id_form'], 'exist', 'skipOnError' => true, 'targetClass' => Form::className(), 'targetAttribute' => ['id_form' => 'id']],
//            [['gallery'], 'file', 'extensions'=>'png, jpg', 'maxFiles'=>4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_product' => 'ID товара',
            'id_type' => 'Тип',
            'id_brand' => 'Бренд',
            'id_form' => 'Форма',
            'title' => 'Название',
            'price' => 'Цена',
            'quantity' => 'Количество',
            'image' => 'Фото',
            'description' => 'Описание',
            'sale' => 'Скидка',
            'keywords' => 'Ключевые слова',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['product_id' => 'id_product']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['type_id' => 'id_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'id_brand']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm()
    {
        return $this->hasOne(Form::className(), ['id' => 'id_form']);
    }

    public function upload(){
        if($this->validate()){
            $path='upload/store/'. $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        } else{
            return false;
        }
    }

}
