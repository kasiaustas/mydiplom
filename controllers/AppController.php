<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 15.09.2017
 * Time: 18:08
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{

    protected function setMeta($title=null, $keywords=null, $description=null){

        $this->view->title = $title;
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>"$keywords"]);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>"$description"]);
    }


}