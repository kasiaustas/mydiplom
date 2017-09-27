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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <![endif]-->

</head>
<body>
<?php $this->beginBody() ?>

<div class="top-block">
    <div class="container">
        <header>

            <div class="row">
                <div class="col-md-8">
                    <a href="<?=Url::home()?>" class="logo"><?=Html::img('@web/images/onestr/logo.png', ['alt'=>'EXCLUSIVE SUNGLASSES', 'title'=>'EXCLUSIVE SUNGLASSES'])?></a>
                </div>
                <div class="col-md-2" >
<?php if(!Yii::$app->user->isGuest):?>
    <a style="float: right;" href="<?=Url::to(['/site/logout'])?>" id="autorization" title="выход"  class="selected" ><?=Yii::$app->user->identity['username']?> (ВЫХОД)</a>
    <?php endif;?>
                </div>
                <div class="col-md-1">
                    <a style="float: right;" href="<?=Url::to(['/admin'])?>" id="autorization" title="личный кабинет"  class="selected" >ВОЙТИ</a>
                </div>

<!--                <div id="" class="account_nav_popup">-->
<!--                    <h4>Вход в кабинет</h4>-->
<!--                    <form id="account_nav_login_form" action="" method="post">-->
<!--                        <div class="entry_fields ">-->
<!--                            <label id="login.email" class="" for="j_username_login.email">  Email</label>-->
<!--                            <input id="j_username_login.email" class="text" name="j_username" title="j_username" value="" type="text">-->
<!--                            <div class="form_field-label">-->
<!--                                <label class="" for="j_password">-->
<!--                                    Пароль-->
<!--                                </label>-->
<!--                            </div>-->
<!--                            <div class="form_field-input">-->
<!--                                <input id="j_password" class="text password" name="j_password" value="" type="password">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <input id="login-submit" value="ВОЙТИ" type="submit" href="account.html">-->
<!--                        <br>-->
<!--                    </form>-->
<!--                    <a class="createaccount " href="register.html">Create An Account</a>-->
<!--                </div>-->

                <div class="col-md-1">
                    <a href="#" class="kart" title="корзина" onclick="return getCart()"><img src="/images/onestr/kart.png"/></a>
                    <span id="quantity_goods"></span>
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

                            <div class="col-md-3"><li><a href="<?=Url::to(['category/women'])?>" title="women" >ЖЕНСКИЕ</a></li></div>
                            <div class="col-md-3"><li><a href="<?=Url::to(['category/man'])?>" title="men">МУЖСКИЕ </a></li></div>
                            <div class="col-md-3"><li><a href="<?=Url::to(['category/kids'])?>" title="children">ДЕТСКИЕ</a></li></div>
                            <div class="col-md-3 sale_menu"><li><a href="<?=Url::to(['category/sale'])?>" title="brands">РАСПРОДАЖА </a></li></div>
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


<?= $content; ?>


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

<?php
Modal::begin([
        'header'=>'<h1 class="cart_header">КОРЗИНА</h1>',
    'id'=>'cart',
    'size'=>'modal-lg',
    'footer'=>'<button  type="button"  id="button_ordering" data-dismiss="modal">ПРОДОЛЖИТЬ ПОКУПКИ</button>
           <a href="'.Url::to(['cart/view']) . '" >  <button  type="button" id="button_ordering">ОФОРМИТЬ ЗАКАЗ</button></a>
              <button  type="button"  id="button_ordering" onclick="clearCart()">ОЧИСТИТЬ КОРЗИНУ</button>',

]);

Modal::end();
?>







<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>