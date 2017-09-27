<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1>Просмотр заказа №<?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn button']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn button-red',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            //'updated_at',
            'qty',
            'sum',
            //'status',
            [
                'attribute'=>'status',
                'value'=> function($model){
                    return !$model->status? "<span class='text-danger'>Активен</span>" : '<span class="text-success">Завершен</span>';
                },
                'format'=>'html',
            ],
            'name',
            'last_name',
            'email:email',
            'phone',
            'address',
            'sity',
            //'region',
            [
                'attribute'=>'region',
                'value'=> function($model){
        if($model->region==1) return 'Минская';
        if($model->region==2) return 'Гомельская';
        if($model->region==3) return 'Брестская';
        if($model->region==4) return 'Гродненская';
        if($model->region==5) return 'Витебская';
        if($model->region==6) return 'Могилёвская';
                },

            ],
        ],
    ]) ?>

    <?php $items=$model->orderItems; ?>



    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th class="item_header">ID ТОВАРА</th>
                <th class="item_header">НАИМЕНОВАНИЕ</th>
                <th class="item_header">КОЛИЧЕСТВО</th>
                <th class="item_header">ЦЕНА</th>
                <th class="item_header">СТОИМОСТЬ</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($items as $item):?>
                <tr>
                    <td class="item_cart"><?=$item['product_id']?></td>
                    <td class="item_cart"><a href="<?=Url::to(['/product/view', 'id'=>$item->product_id])?>"><?=$item['name']?></a></td>
                    <td class="item_cart"><?=$item['qty_item']?></td>
                    <td class="item_cart"><?=$item['price']?></td>
                    <td class="item_cart"><?=$item['sum_item']?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </div>
    <div class="col-md-12 tab"></div>
</div>
