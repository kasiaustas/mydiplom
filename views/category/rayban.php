<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\Breadcrumbs;
?>

<div class="middle-block">
    <div class="container">
        <div class="col-md-3">

            <?php
            echo Breadcrumbs::widget([
                'itemTemplate' => "<li>{link}</li>\n", // template for all links
                'links' => [
                    [
                        'label' =>'ray-ban',
                        'url' => '#',
                        'template' => "<li style='text-transform: capitalize;'>{link}</li>\n", // template for this link only
                    ],
//        ['label' => 'Sample Post', 'url' => ['post/edit', 'id' => 1]],
//        'Edit',
                ],
            ]);

            ?>
            <?= Breadcrumbs::widget([
                'homeLink' => ['label' => 'Главная', 'url' => '/'],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>


            <h2 class="category_name" style="font-family: 'Times New Roman', serif;
            color:#333; letter-spacing: 0; font-weight: normal; font-size: 48px;line-height: 48px; text-transform: capitalize;
    margin: 30px auto 30px;">sunglasses</h2><br/><br/>
            <?=\app\components\Menu1Widget::widget(['tpl'=>'menu_rayban'])?>


        </div>

        <div id="img_center" class="col-md-9"><img src="/images/twostr/ray_ban.jpg"></div>


        <?php if(!empty($rayban)&&empty($products_rayban)):?>

            <div class="col-md-9 " id="product_panel">
                <div class="col-md-12">
                    <?php
                    echo LinkPager::widget([
                        'pagination'=>$pages,
                    ]);
                    ?>
                </div>
                <div class="features_items"><!--features_items-->


                    <?php $i=0; foreach ($rayban as $r):?>
                        <?php  $mainImg = $r->getImage()?>
                        <div class="col-md-4">
                            <div id="" class="product_panel">
                                <div class="inner_product_panel" style="display:block;">

                                    <div id="img_size">
                                        <a href="<?=\yii\helpers\Url::to(['product/view', 'id'=>$r->id_product])?>">
                                        <?= Html::img($mainImg->getUrl(), ['title'=>$r->title, 'alt'=>$r->title]) ?>
                                        </a>
                                    </div>

                                    <h4 id="title_size">
                                        <a href="<?=\yii\helpers\Url::to(['product/view', 'id'=>$r->id_product])?>">
                                        <?=$r->title?>
                                        </a>
                                        <br>
                                        <span>РУБ<span class="category_listing_price"> <?=$r->price?></span></span>&nbsp;
                                        <?php if(!empty($r->sale)):?>
                                            <span class="sale_title">-&nbsp;<?=$r->sale?>%</span>
                                        <?php endif;?>
                                    </h4>
                                    <a href="<?=\yii\helpers\Url::to(['product/view', 'id'=>$r->id_product])?>">
                                    <button type="button" id="" class="button white small" href="javascript://" onclick="">Подробнее</button><!--кнопка на страницу с инфой о товаре-->
                                    </a>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php $i++?>
                        <?php if($i%3===0):?>
                            <div class="clearfix"></div>
                        <?php endif;?>
                    <?php endforeach;?>


                    <div class="col-md-12">
                        <?php
                        echo LinkPager::widget([
                            'pagination'=>$pages,
                        ]);
                        ?>
                    </div>
                </div><!--features_items-->

            </div>

        <?php endif;?>
    </div>
</div>
