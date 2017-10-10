<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_product], ['class' => 'btn button']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_product], [
            'class' => 'btn button-red',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php $img=$model->getImage();

    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_product',
            //'id_type',
            [
                'attribute'=>'id_type',
                'value'=>
                   $model->type->name,

            ],
            //'id_brand',
            [
                'attribute'=>'id_brand',
                'value'=>
                     $model->brand->name,

            ],
            //'id_form',
            [
                'attribute'=>'id_form',
                'value'=>
                    $model->form->name,

            ],
            'title',
            'price',
            'quantity',
            //'picture',
            [
                    'attribute'=>'image',
                'value'=>"<img src='{$img->getUrl()}'>",
                'format'=>'html',

            ],
            'description:html',//ntext можно
            'sale',
            'keywords',
        ],
    ]) ?>

</div>
