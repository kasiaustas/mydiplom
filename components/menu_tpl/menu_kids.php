<?php
use app\components\MenuWidget;
use yii\helpers\Url;
use app\models\Product;
?>

<ul class="menu_brand">

    <a href="<?=Url::to(['category/viewkids', 'id'=>$brand['id']])?>">
        <?php if(!($brand['id']=='2')&&!($brand['id']=='3')&&!($brand['id']=='4')&&!($brand['id']=='5')&&!($brand['id']=='6')):?>


        <?=$brand['name']?>

        <?php endif;?>

    </a>

    <?php if((isset($brand['childs']))):?>
    <?php if(!($brand['id']=='2')&&!($brand['id']=='3')&&!($brand['id']=='4')&&!($brand['id']=='5')&&!($brand['id']=='6')):?>
    <li class="list-group">
        <?= $this->getMenuHtml($brand['childs']) ?>
    <li>
        <?php endif;?>
        <?php endif;?>

</ul>

