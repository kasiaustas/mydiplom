<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Product;
use app\models\Category;
use yii\widgets\Breadcrumbs;
use app\models\Type;
use app\models\Brand;


?>

<div class="middle-block">
    <div class="container">
        <div class="col-md-4">
            <div id="more_link">
                <?php
                echo Breadcrumbs::widget([
                    'itemTemplate' => "<li>{link}</li>\n", // template for all links
                    'links' => [

                        [
                            'label' =>$type->name,
                            'url' =>  $type->name=='женские' ? '/category/women' : ($type->name=='мужские' ? '/category/man' : ($type->name=='детские' ? '/category/kids' :'/category/sale')),
                            'template' => "<li>{link}</li>\n", // template for this link only
                        ],

                        $product->sale ?

                            [
                                'label' => 'sale',
                                'url' =>'../category/sale',
                                'template' => "<li>{link}</li>\n", // template for this link only
                            ] :
                            [
                                'label' => $brand->name,
                                'url' =>$brand->name!='carrera'&&$brand->name!='palaroid kids'&&$brand->name!='ray-ban'&&$brand->name!='saint laurent'?'../category/' .$brand->name :($brand->name=='carrera'?'../category/kids/7':
                                    (  $brand->name=='palaroid kids'? '../category/kids/8':($brand->name=='ray-ban'? '../category/rayban':'../category/saintlaurent'))) ,
                                'template' => "<li>{link}</li>\n", // template for this link only
                            ] ,

                        [
                            'label' =>$product->title,
                            'url' => '#',
                            'template' => "<li>{link}</li>\n", // template for this link only
                        ],

//        ['label' => 'Sample Post', 'url' => ['post/edit', 'id' => 1]],
//        'Edit',
                    ],
                ]);

                ?>
                <?= Breadcrumbs::widget([
                    'homeLink' => ['label' => 'Главная', 'url' => '/'],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],

                ]);
                ?>
            </div><br/>
            <div id="more_title"><?=$product->title?></div><br/>
            <div id="more_description"><?=$product->description?></div>

<!--            <div id="more_number"><row>Количество: <input type="text" value="1" id="qty"></row></div>-->
            <div id="more_price">РУБ <?=$product->price?>
                <?php if(!empty($product->sale)):?>
                    &nbsp;&nbsp;&nbsp;
                    <span class="sale_title">-&nbsp;<?=$product->sale?>%!!!</span>
                <?php endif;?>
            </div>
            <br/>
            <div id="more_button">
               <a class="add-to-cart" data-id="<?=$product->id_product?>" href="<?=\yii\helpers\Url::to(['cart/add', 'id'=>$product->id_product])?>"><input id="cart-submit" value="ДОБАВИТЬ В КОРЗИНУ" href="" ></a>
            </div>
        </div>

        <?php
        $mainImg = $product->getImage();
        ?>

        <div class="col-md-8">
            <div class="img_big">

                <?= Html::img($mainImg->getUrl(), ['alt'=>$product->title])?>
            </div>
        </div>







    </div>
</div>
