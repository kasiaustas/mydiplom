<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>Admin | <?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <![endif]-->

    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="top-block">
        <div class="container">
            <header>

                <div class="row">
                    <div class="col-md-7">
                        <a href="<?=Url::home()?>" class="logo"><?=Html::img('@web/images/onestr/logo.png', ['alt'=>'EXCLUSIVE SUNGLASSES', 'title'=>'EXCLUSIVE SUNGLASSES'])?></a>
                    </div>
                    <div class="col-md-5">

                        <?php if(!Yii::$app->user->isGuest):?>
                            <row>
                            <nav class="navbar navbar-invers">
                                <div class="container-fluid">

                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="<?=Url::to(['/admin'])?>">ГЛАВНАЯ </a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">БРЕНДЫ
                                                <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?=Url::to(['brand/index'])?>">Список брендов</a></li>
                                                <li><a href="<?=Url::to(['brand/create'])?>">Добавить бренд</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ТОВАРЫ
                                                <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?=Url::to(['product/index'])?>">Список товаров</a></li>
                                                <li><a href="<?=Url::to(['product/create'])?>">Добавить товар</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="<?=Url::to(['/site/logout'])?>"><?=Yii::$app->user->identity['username']?> (ВЫХОД)</a></li>

                                    </ul>
                                </div>
                            </nav>
                            </row>
                        <?php endif;?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="/images/onestr/lineone.png"/>
                    </div>
                </div>
                <div class="row">

                    <nav>
                        <div class="mainmenu">
                            <ul class="list-inline text-center">

                                <div class="col-md-3"><li><a href="<?=Url::to(['../category/women'])?>" title="women" >ЖЕНСКИЕ</a></li></div>
                                <div class="col-md-3"><li><a href="<?=Url::to(['../category/man'])?>" title="men">МУЖСКИЕ </a></li></div>
                                <div class="col-md-3"><li><a href="<?=Url::to(['../category/kids'])?>" title="children">ДЕТСКИЕ</a></li></div>
                                <div class="col-md-3 sale_menu"><li><a href="<?=Url::to(['../category/sale'])?>" title="brands">РАСПРОДАЖА </a></li></div>
                            </ul>
                        </div>
                    </nav>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="/images/onestr/linetwo.png"/>
                    </div>
                </div>
            </header>
        </div>
    </div>


<div class="container">
    <?php if(Yii::$app->session->hasFlash('success'))://проверяем есть ли такое сообщение?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="top: -18px;">
                <span aria-hidden="true" >&times;</span>
            </button>
            <?php echo Yii::$app->session->getFlash('success');?>
        </div>
    <?php endif;?>
    <?php if(Yii::$app->session->hasFlash('error'))://проверяем есть ли такое сообщение?>
        <?php echo Yii::$app->session->getFlash('error');//выводим?>
    <?php endif;?>
    <?= $content; ?>
</div>



    <footer>
        <div class="container">
            <div class="bottom-block">
                <div class="row">

                    <div class="col-md-5">
                        <img src="/images/onestr/lone.png"/>
                    </div>
                    <div class="col-md-2">
                        <div class="icons">
                            <a href="#" class="connect"><img src="/images/onestr/vk.png"/></a>
                            <a href="#" class="connect"><img src="/images/onestr/instagram.png"/></a>
                            <a href="#" class="connect"><img src="/images/onestr/facebook.png"/></a>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <a class="rightline"> <img src="/images/onestr/ltwo.png"/></a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>МАГАЗИН</p>
                    <p><a href="<?=Url::to(['shop/about'])?>" title="о нас">О нас </a></p>
                    <p><a href="<?=Url::to(['shop/connection'])?>" title="как с нами связаться">Как с нами связаться </a></p>

                </div>
                <div class="col-md-3">
                    <p>ОБСЛУЖИВАНИЕ КЛИЕНТОВ</p>
                    <p><a href="<?=Url::to(['shop/ordering'])?>" title="Как оформить заказ">Как оформить заказ </a></p>
                    <p><a href="<?=Url::to(['shop/delivery'])?>" title="Условия доставки">Условия доставки</a></p>
                    <p><a href="<?=Url::to(['shop/return'])?>" title="Возврат">Возврат </a></p>
                    <p><a href="<?=Url::to(['shop/rules'])?>" title="Правила продажи">Правила продажи</a></p>

                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group " style="float: right">
                            <p>РАССЫЛКА</p>
                            <div class="form-inline">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Введите свой e-mail">
                                <input type="button" class="searchBtn" value=">" id="subcribeBtn_NL" alt="Subscribe" onclick="">
                            </div>
                            <p>Получи информацию о скидках первый!</p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </footer>



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>