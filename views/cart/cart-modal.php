<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Product;
use app\models\Category;
use app\models\Cart;

?>
<?php if(!empty($session['cart'])):?>

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th class="item_header">ФОТО</th>
            <th class="item_header">НАИМЕНОВАНИЕ</th>
            <th class="item_header">КОЛИЧЕСТВО</th>
            <th class="item_header">ЦЕНА</th>
            <th class="item_header"><SPAN class="glyphicon gluphicon-remove" aria-hidden="true"></SPAN></th>
        </tr>
        </thead>
        <tbody>
    <?php foreach ($session['cart'] as $id=>$item):?>
        <tr>
        <td class=""><?= Html::img($item['img'], ['alt'=>$item['name'], 'height'=>50])?></td>
        <td class="item_cart"><?=$item['name']?></td>
        <td class="item_cart"><?=$item['qty']?></td>
        <td class="item_cart"><?=$item['price']?></td>
        <td><SPAN data-id="<?=$id?>" class="glyphicon gluphicon-remove del-item" aria-hidden="true">Удалить</SPAN></td>
        </tr>
    <?php endforeach;?>
    <tr>
        <td colspan="4" class="total_cost">Итого</td>
        <td colspan="1" class="total_cost"><?=$session['cart.qty']?></td>
    </tr>
        <tr>
            <td colspan="4" class="total_cost">Общая сумма</td>
            <td colspan="1" class="total_cost"><?=$session['cart.sum']?></td>
        </tr>
        </tbody>
    </table>
</div>











<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>