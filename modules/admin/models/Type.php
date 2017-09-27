<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property integer $type_id
 * @property string $parent_id
 * @property string $name
 *
 * @property Product[] $products
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'name'], 'string'],
            [['name'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id_type' => 'type_id']);
    }
}
