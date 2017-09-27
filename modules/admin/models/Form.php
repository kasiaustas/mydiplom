<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "form".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $keywords
 * @property string $description
 *
 * @property Product[] $products
 */
class Form extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name', 'keywords'], 'required'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id_form' => 'id']);
    }
}
