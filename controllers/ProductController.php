<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 20.09.2017
 * Time: 14:33
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use app\models\Type;
use app\models\Cart;
use app\controllers\AppController;
use Yii;
use yii\data\Pagination;
use yii\web\HttpException;
use app\models\Brand;

class ProductController extends AppController
{
    public function actionView($id){
        $id=Yii::$app->request->get('id');
        $product=Product::findOne($id);
        $product1=Product::find()->where(['id_type'=>$product['id_type']])->one();
        $product2=Product::find()->where(['id_brand'=>$product['id_brand']])->one();
        $type = Type::findOne(['type_id'=>$product1]);
        $brand=Brand::findOne(['id'=>$product2['id_brand']]);
        if(empty($product)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }
        $this->setMeta('SUNGLASSES | '. $product->title, $product->keywords,
            $product->description);//установка title
        return $this->render('view', compact('product', 'type', 'product1', 'product2', 'brand'));
    }


}