<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 24.09.2017
 * Time: 13:54
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use app\models\Type;
use app\controllers\AppController;
use Yii;
use yii\data\Pagination;
use yii\web\HttpException;

class ShopController extends AppController
{
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionOrdering()
    {
        return $this->render('ordering');
    }

    public function actionDelivery()
    {
        return $this->render('delivery');
    }

    public function actionReturn()
    {
        return $this->render('return');
    }

    public function actionRules()
    {
        return $this->render('rules');
    }

    public function actionConnection()
    {
        return $this->render('connection');
    }

}