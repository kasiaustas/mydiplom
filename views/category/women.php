<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="middle-block">
    <div class="container">
        <div class="col-md-3">
            <h2 class="category_name" style="font-family: 'Times New Roman', serif;
            color:#333; letter-spacing: 0; font-weight: normal; font-size: 48px;line-height: 48px; text-transform: capitalize;
    margin: 30px auto 30px;">sunglasses</h2><br/><br/>
            <?=\app\components\MenuWidget::widget(['tpl'=>'menu'])?>
            <br/>
            <?=\app\components\Menu1Widget::widget(['tpl'=>'menu'])?>


            <!--<div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">БРЕНДЫ</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="multifilter-advanced">
                            <input class="text-field" placeholder="Найдите бренд" type="text">
                        </div>
                        <div class="multifilter-list-new">
                            <div class="form-inline">
                                <label class="">
                                    <input class="checkbox" value="" type="checkbox">
                                    DIOR
                                </label>

                            </div>
                            <div class="form-inline">
                                <label class="">
                                    <input class="checkbox" value="" type="checkbox">
                                    FENDI
                                </label>
                            </div>
                            <div class="form-inline">
                                <label class="">
                                    <input class="checkbox" value="" type="checkbox">
                                    GIVENCHY
                                </label>
                            </div>
                            <div class="form-inline">
                                <label class="">
                                    <input class="checkbox" value="" type="checkbox">
                                    RAY-BAN
                                </label>
                            </div>
                            <div class="form-inline">
                                <label class="">
                                    <input class="checkbox" value="" type="checkbox">
                                    SAINT LAURENT
                                </label>
                            </div>

                        </div>

                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">ФОРМА</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">

                            <div class="multifilter-list-new">
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        AVIATOR/АВИАТОР
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        NAVIGATOR/НАВИГАТОР
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        OVAL/ОВАЛЬНЫЕ
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        RECTANGLE/ПРЯМОУГОЛЬНЫЕ
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        ROUND/КРУГЛЫЕ
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        WAYFARER/ПУТНИК
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        CATEYE/КОШАЧИЙ ГЛАЗ
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        OTHER/ДРУГИЕ
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">ЦЕНА</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">

                            <div class="multifilter-list-new">
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        РУБ 0-РУБ 199.99
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        РУБ 200-РУБ 299.99
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        РУБ 300-РУБ 399.99
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        РУБ 400 И ВЫШЕ
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">ПОЛЯРИЗАЦИЯ</a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="multifilter-list-new">
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        ЕСТЬ
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label class="">
                                        <input class="checkbox" value="" type="checkbox">
                                        НЕТУ
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button_search" href="">
                SEARCH
            </button>-->




        </div>

        <div id="img_center" class="col-md-9"><img src="/images/twostr/womens.jpg"></div>
        <?php if(!empty($women)&&empty($products)):?>
        <div class="col-md-9 " id="product_panel">
            <div class="col-md-12">
                <?php
                echo LinkPager::widget([
                    'pagination'=>$pages,
                ]);
                ?>
            </div>
            <div class="features_items"><!--features_items-->


                    <?php $i=0; foreach ($women as $wom):?>
                <div class="col-md-4">
                    <div id="" class="product_panel">
                        <div class="inner_product_panel" style="display:block;">

                                <div id="img_size">
                                    <a href="<?=\yii\helpers\Url::to(['product/view', 'id'=>$wom->id_product])?>"><?= Html::img("@web/images/product/$wom->picture", ['title'=>$wom->title, 'alt'=>$wom->title]) ?></a>
                                </div>

                                <h4 id="title_size">
                                   <a href="<?=\yii\helpers\Url::to(['product/view', 'id'=>$wom->id_product])?>"> <?=$wom->title?></a>
                                    <br>
                                    <span>РУБ<span class="category_listing_price"> <?=$wom->price?></span></span>&nbsp;
                        <?php if(!empty($wom->sale)):?>
                                    <span class="sale_title">-&nbsp;<?=$wom->sale?>%</span>
                        <?php endif;?>
                                </h4>
                            <a href="<?=\yii\helpers\Url::to(['product/view', 'id'=>$wom->id_product])?>">
                            <button type="button" id="" class="button white small" href="" >MORE</button><!--кнопка на страницу с инфой о товаре-->
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
