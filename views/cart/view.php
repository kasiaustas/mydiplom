<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveField;
use app\models\Product;
use app\models\Order;
use app\models\Region;
use yii\jui\DatePicker;

?>

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

<?php if(!empty($session['cart'])):?>

    <div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="order_header">Оформление заказа</h1>
        </div>
    </div>
    <div class="col-md-4" id="form_order">

            <?php $form=\yii\widgets\ActiveForm::begin()?>
            <div class="clearfix">
                <div class="two_colums_alpha">
                    <?=$form->field($order, 'name')?>
                </div>
                <div class="two_colums_omega">
                    <?=$form->field($order, 'last_name')?>
                </div>
            </div>
            <?=$form->field($order, 'address')?>
            <?=$form->field($order, 'sity')?>
            <div class="clearfix">
                <div class="two_colums_alpha">
                    <div id="region" class="region_container">
                        <?= $form->field($order, 'region')->dropdownList(
                            Region::find()->select(['region_name', "id"])->indexBy('id')->column()
                        ); ?>
                    </div>

                </div>
                <div class="two_colums_omega">
                    <?=$form->field($order, 'phone')->textInput(['placeholder' => '+375 (XX) XXX XX XX'])?>
                </div>
            </div>
            <?=$form->field($order, 'email')?>




        <div class="cost_order">ОБЩАЯ СУММА ЗАКАЗА: РУБ <span id="total_cost"><?=$session['cart.sum']?></span></div>
        <div class="order_button">
            <?=Html::submitButton('Отправить заказ', ['id'=>'orderFormButton', 'class'=>'button'])?>
            <?php $form=\yii\widgets\ActiveForm::end()?>
        </div>

    </div>
    <div class="col-md-1"> </div>
    <div class="col-md-4">
        <div class="text_info">
            <img src="/images/twostr/sel.jpg">
            <span class="main_title">Бесплатная доставка</span><br/><br/>
            Бесплатная доставка по всей Беларуси при выкупе товаров на сумму более 80 руб. при доставке курьерской
            службой; в случае предоплаты или если выкуплено более 30% от стоимости заказа на сумму более 80
            рублей при доставке курьерской службой.
        </div>
        <div class="text_info">
            <img src="/images/twostr/sel.jpg">
            <span class="main_title">Оплата наличными при получении или банковской картой</span><br/><br/>
            Предоплата не требуется: вы можете заказать понравившуюся вещь сейчас, а оплатить в момент доставки.

        </div>
        <div class="text_info">
            <img src="/images/twostr/sel.jpg">
            <span class="main_title">Только подлинные товары известных брендов</span><br/><br/>
            Exclusive Sunglasses гарантирует качество и подлинность. Если очки вам не подойдут, у Вас есть 5 дней на
            возврат со 100% возмещением денег.
        </div>


    </div>
</div>
    <div class="col-md-12 tab"></div>














<div class="col-md-12">

    <div class="row">
        <div class="col-md-5"><h4 class="item_header">НАИМЕНОВАНИЕ</h4></div>
        <div class="col-md-2"><h4 class="item_header">КОЛИЧЕСТВО</h4></div>
        <div class="col-md-2" ><h4 class="item_header">ЦЕНА</h4></div>
        <div class="col-md-3"><h4 class="item_header">СТОИМОСТЬ ЗАКАЗА</h4></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img src="/images/onestr/lineone_kart.png"/>
        </div>
    </div>
    <div class="col-md-9">
        <?php foreach ($session['cart'] as $id=>$item):?>
        <div class="item_one_cart1">
            <div class="row">
                <div class="col-md-3"><div><?= Html::img("@web/images/product/{$item['img']}", ['alt'=>$item['name'], 'height'=>50])?></div></div>
                <div class="col-md-3"><span class="name_cart1"><a href="<?=Url::to(['product/view', 'id'=>$id])?>"><?=$item['name']?></a></span></div>
                <div class="col-md-3"><div class="quantity_item1"><?=$item['qty']?></div><br/></div>
                <div class="col-md-3"><div class="price1">РУБ <?=$item['price']?></div></div>
            </div>
        </div>
        <?php endforeach;?>
    </div>

    <div class="col-md-3">

        <div class="total_cost1">РУБ <span id="total_cost1"><?=$session['cart.sum']?></span></div>


    </div>
</div>
    <div class="col-md-12 tab"></div>

<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>
</div>
