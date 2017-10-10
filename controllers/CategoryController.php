<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 15.09.2017
 * Time: 18:06
 */

namespace app\controllers;

use app\models\Brand;
use app\models\Form;
use app\models\Product;
use app\models\Type;
use app\controllers\AppController;
use Yii;
use yii\data\Pagination;
use yii\web\HttpException;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $this->setMeta('EXCLUSIVE SUNGLASSES солнцезащитные очки от брендов-лидеров',  $keywords='очки, солнцезащитные очки, очки фенди, очки диор, очки ray-ban, очки saint laurent, очки givenchy, очки каррера, очки палароид кидс',
            $description='Солнцезащитные очки коллекции 2017. Такие бренды как: FENDI, DIOR, GIVENCHY, RAY-BAN, SAINT LAURENT, CARRERA, PALAROID KIDS'  );//установка title
        return $this->render('index');
    }

    public  function actionWomen(){
       // $women=Product::find()->where(['id_type'=>1])->all();

        $compsubcatname = Type::find()->all();

        $query =Product::find()->where(['id_type'=>1]);

        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $women=$query->offset($pages->offset)->limit($pages->limit)->all();


        $this->setMeta('SUNGLASSES | women', $keywords='очки, женские очки, купить очки',
            $description='женские очки от солнца');//установка title
        return $this->render('women',  compact('women', 'pages', 'compsubcatname'));

    }

    public  function actionMan(){
        //$man=Product::find()->where(['id_type'=>2])->all();
        $compsubcatname = Type::find()->all();
        $query =Product::find()->where(['id_type'=>2]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $man=$query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('SUNGLASSES | man', $keywords='очки, мужские очки, купить очки',
            $description='мужские очки от солнца');//установка title
        return $this->render('man', compact('man', 'pages', 'compsubcatname'));

    }

    public  function actionKids(){
        //$kids=Product::find()->where(['id_type'=>3])->all();
        $compsubcatname = Type::find()->all();
        $query =Product::find()->where(['id_type'=>3]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $kids=$query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('SUNGLASSES | kids', $keywords='очки, детские очки, купить очки',
            $description='детские очки от солнца');//установка title
        return $this->render('kids', compact('kids', 'pages', 'compsubcatname'));

    }

    public  function actionSale(){
        //$sale=Product::find()->where(['>', 'sale', 0])->orderBy(['sale'=>SORT_DESC])->all();
        $compsubcatname = Type::find()->all();
        $query =Product::find()->where(['>', 'sale', 0])->orderBy(['sale'=>SORT_DESC]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $sale=$query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('SUNGLASSES | sale', $keywords='очки, распродажа очков, купить очки со скидкой',
            $description='распродажа очков от солнца');//установка title
        return $this->render('sale', compact('sale', 'pages', 'compsubcatname'));

    }

    public  function actionDior(){
        //$dior=Product::find()->where(['id_brand'=>3])->all();
        $query =Product::find()->where(['id_brand'=>2]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $dior=$query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('SUNGLASSES | dior', $keywords='очки, dior, купить dior',
            $description='dior очки от солнца');//установка title
        return $this->render('dior', compact('dior', 'pages'));

    }

    public  function actionFendi(){
        //$fendi=Product::find()->where(['id_brand'=>4])->all();
        $query =Product::find()->where(['id_brand'=>3]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $fendi=$query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('SUNGLASSES | fendi', $keywords='очки, fendi, купить fendi',
            $description='fendi очки от солнца');//установка title
        return $this->render('fendi', compact('fendi', 'pages'));

    }

    public  function actionGivenchy(){
        //$givenchy=Product::find()->where(['id_brand'=>5])->all();
        $query =Product::find()->where(['id_brand'=>4]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $givenchy=$query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('SUNGLASSES | givenchy', $keywords='очки, givenchy, купить givenchy',
            $description='givenchy очки от солнца');//установка title
        return $this->render('givenchy', compact('givenchy', 'pages'));

    }

    public  function actionRayban(){
        //$rayban=Product::find()->where(['id_brand'=>6])->all();
        $query =Product::find()->where(['id_brand'=>5]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $rayban=$query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('SUNGLASSES | ray-ban', $keywords='очки, ray-ban, купить ray-ban',
            $description='ray-ban очки от солнца');//установка title
        return $this->render('rayban', compact('rayban', 'pages'));

    }

    public  function actionSaintlaurent(){
        //$saintlaurent=Product::find()->where(['id_brand'=>7])->all();
        $query =Product::find()->where(['id_brand'=>6]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $saintlaurent=$query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('SUNGLASSES | saint laurent', $keywords='очки, saint laurent, купить saint laurent',
            $description='saint laurent очки от солнца');//установка title
        return $this->render('saintlaurent', compact('saintlaurent', 'pages'));

    }

    public function actionView($id){
       // $id=Yii::$app->request->get('id');
        //$products =Product::find()->having(['id_brand'=>$id, 'id_type'=>1])->orHaving(['id_form'=>$id, 'id_type'=>1])->all();
        $compsubcatname = Type::find()->all();

        $brand=Brand::findOne($id);
        $form=Form::findOne($id);
        if(empty($brand)&&empty($form)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }

        $query =Product::find()->having(['id_brand'=>$id, 'id_type'=>1])->orHaving(['id_form'=>$id, 'id_type'=>1]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $products=$query->offset($pages->offset)->limit($pages->limit)->all();

        if (isset($brand)){$t=$brand;}
        else {$t= $form; }

        $this->setMeta('SUNGLASSES | '.$t->name, $t->keywords, $t->description);//установка title
        return $this->render('view', compact('products', 'pages', 'form', 'brand', 'compsubcatname'));

    }

    public function actionViewman($id){
        //$id=Yii::$app->request->get('id');
        //$products_man =Product::find()->having(['id_brand'=>$id, 'id_type'=>2])->orHaving(['id_form'=>$id, 'id_type'=>2])->all();
        $compsubcatname = Type::find()->all();
        $brand=Brand::findOne($id);
        $form=Form::findOne($id);
        if(empty($brand)&&empty($form)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }

        $query =Product::find()->having(['id_brand'=>$id, 'id_type'=>2])->orHaving(['id_form'=>$id, 'id_type'=>2]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $products_man=$query->offset($pages->offset)->limit($pages->limit)->all();

        if (isset($brand)){$t=$brand;}
        else {$t= $form; }
        $this->setMeta('SUNGLASSES | '.$t->name, $t->keywords, $t->description);//установка title
        return $this->render('viewman', compact('products_man', 'pages', 'form', 'brand', 'compsubcatname'));

    }

    public function actionViewkids($id){
       // $id=Yii::$app->request->get('id');
        //$products_kids =Product::find()->having(['id_brand'=>$id, 'id_type'=>3])->orHaving(['id_form'=>$id, 'id_type'=>3])->all();
        $compsubcatname = Type::find()->all();
        $brand=Brand::findOne($id);
        $form=Form::findOne($id);
        if(empty($brand)&&empty($form)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }

        $query =Product::find()->having(['id_brand'=>$id, 'id_type'=>3])->orHaving(['id_form'=>$id, 'id_type'=>3]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $products_kids=$query->offset($pages->offset)->limit($pages->limit)->all();

        if (isset($brand)){$t=$brand;}
        else {$t= $form; }
       $this->setMeta('SUNGLASSES | '.$t->name, $t->keywords, $t->description);//установка title
        return $this->render('viewkids', compact('products_kids', 'pages', 'form', 'brand', 'compsubcatname'));

    }

    public function actionViewsale($id){
        //$id=Yii::$app->request->get('id');
       // $products_sale =Product::find()->having(['id_brand'=>$id])->orHaving(['id_form'=>$id])->andHaving(['>', 'sale', 0])->orderBy(['sale'=>SORT_DESC])->all();
        $compsubcatname = Type::find()->all();
        $brand=Brand::findOne($id);
        $form=Form::findOne($id);
        if(empty($brand)&&empty($form)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }

        $query =Product::find()->having(['id_brand'=>$id])->orHaving(['id_form'=>$id])->andHaving(['>', 'sale', 0])->orderBy(['sale'=>SORT_DESC]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $products_sale=$query->offset($pages->offset)->limit($pages->limit)->all();

        if (isset($brand)){$t=$brand;}
        else {$t= $form; }
        $this->setMeta('SUNGLASSES | '.$t->name, $t->keywords, $t->description);//установка title
        return $this->render('viewsale', compact('products_sale', 'pages', 'form', 'brand', 'compsubcatname'));

    }

    public function actionViewdior($id){
       // $id=Yii::$app->request->get('id');
        //$products_dior =Product::find()->having(['id_form'=>$id, 'id_brand'=>3])->all();
        $brand=Brand::findOne($id);
        $form=Form::findOne($id);
        if(empty($brand)&&empty($form)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }

        $query =Product::find()->having(['id_form'=>$id, 'id_brand'=>2]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $products_dior=$query->offset($pages->offset)->limit($pages->limit)->all();

        if (isset($brand)){$t=$brand;}
        else {$t= $form; }
        $this->setMeta('SUNGLASSES | '.$t->name, $t->keywords, $t->description);//установка title
        return $this->render('viewdior', compact('products_dior', 'pages', 'form', 'brand'));

    }

    public function actionViewfendi($id){
        //$id=Yii::$app->request->get('id');
        //$products_fendi =Product::find()->having(['id_form'=>$id, 'id_brand'=>4])->all();
        $brand=Brand::findOne($id);
        $form=Form::findOne($id);
        if(empty($brand)&&empty($form)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }

        $query =Product::find()->having(['id_form'=>$id, 'id_brand'=>3]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $products_fendi=$query->offset($pages->offset)->limit($pages->limit)->all();

        if (isset($brand)){$t=$brand;}
        else {$t= $form; }
        $this->setMeta('SUNGLASSES | '.$t->name, $t->keywords, $t->description);//установка title
        return $this->render('viewfendi', compact('products_fendi', 'pages', 'form', 'brand'));

    }

    public function actionViewgivenchy($id){
        //$id=Yii::$app->request->get('id');
        //$products_givenchy =Product::find()->having(['id_form'=>$id, 'id_brand'=>5])->all();
        $brand=Brand::findOne($id);
        $form=Form::findOne($id);
        if(empty($brand)&&empty($form)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }

        $query =Product::find()->having(['id_form'=>$id, 'id_brand'=>4]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $products_givenchy=$query->offset($pages->offset)->limit($pages->limit)->all();

        if (isset($brand)){$t=$brand;}
        else {$t= $form; }
       $this->setMeta('SUNGLASSES | '.$t->name, $t->keywords, $t->description);//установка title
        return $this->render('viewgivenchy', compact('products_givenchy', 'pages', 'form', 'brand'));

    }

    public function actionViewrayban($id){
        //$id=Yii::$app->request->get('id');
        //$products_rayban =Product::find()->having(['id_form'=>$id, 'id_brand'=>6])->all();
        $brand=Brand::findOne($id);
        $form=Form::findOne($id);
        if(empty($brand)&&empty($form)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }

        $query =Product::find()->having(['id_form'=>$id, 'id_brand'=>5]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $products_rayban=$query->offset($pages->offset)->limit($pages->limit)->all();

        if (isset($brand)){$t=$brand;}
        else {$t= $form; }
        $this->setMeta('SUNGLASSES | '.$t->name, $t->keywords, $t->description);//установка title
        return $this->render('viewrayban', compact('products_rayban', 'pages',  'form', 'brand'));

    }

    public function actionViewsaintlaurent($id){
        //$id=Yii::$app->request->get('id');
        //$products_saintlaurent =Product::find()->having(['id_form'=>$id, 'id_brand'=>7])->all();
        $brand=Brand::findOne($id);
        $form=Form::findOne($id);
        if(empty($brand)&&empty($form)){
            throw new HttpException(404, 'The requested Item could not be found.');
        }

        $query =Product::find()->having(['id_form'=>$id, 'id_brand'=>6]);
        $pages=new Pagination(['totalCount'=>$query->count(), 'pageSize'=>12]);
        $products_saintlaurent=$query->offset($pages->offset)->limit($pages->limit)->all();

        if (isset($brand)){$t=$brand;}
        else {$t= $form; }
        $this->setMeta('SUNGLASSES | '.$t->name, $t->keywords, $t->description);//установка title
        return $this->render('viewsaintlaurent', compact('products_saintlaurent', 'pages',  'form', 'brand'));

    }





}