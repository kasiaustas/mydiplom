<?php
use app\components\MenuWidget;
use yii\helpers\Url;
?>


<ul class="menu_brand">

    <a href="<?=Url::to(['category/view', 'id'=>$brand['id']])?>">

        <?php if(!($brand['id']=='7')&&!($brand['id']=='8')):?>

        <?=$brand['name']?>

        <?php endif;?>

    </a>

    <?php if((isset($brand['childs']))):?>
    <?php if(!($brand['id']=='7')&&!($brand['id']=='8')):?>
    <li class="list-group">
        <?= $this->getMenuHtml($brand['childs']) ?>
    <li>

        <?php endif;?>
        <?php endif;?>
</ul>
















