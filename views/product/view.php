<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Product;
use app\models\Category;

?>

<div class="middle-block">
    <div class="container">
        <div class="col-md-4">
            <div id="more_link">лялял/ яляля</div><br/>
            <div id="more_title"><?=$product->title?></div><br/>
            <div id="more_description"><?=$product->description?></div><br/>
            <br/>
            <div id="more_number"><row>Количество: <input type="text" value="1" id="qty"></row></div>
            <div id="more_price">РУБ <?=$product->price?>
                <?php if(!empty($product->sale)):?>
                    &nbsp;&nbsp;&nbsp;
                    <span class="sale_title">-&nbsp;<?=$product->sale?>%!!!</span>
                <?php endif;?>
            </div>
            <br/>
            <div id="more_button">
               <a class="add-to-cart" data-id="<?=$product->id_product?>" href="<?=\yii\helpers\Url::to(['cart/add', 'id'=>$product->id_product])?>"><input id="cart-submit" value="ДОБАВИТЬ В КОРЗИНУ" href="" type="submit"></a>
            </div>
        </div>

        <div class="col-md-8">
            <div class="img_big">

                <?= Html::img("@web/images/product/{$product->picture}", ['alt'=>$product->title])?>
            </div>
        </div>







    </div>
</div>
