<?php
use app\components\MenuWidget;
use yii\helpers\Url;
?>

<ul class="menu_brand">

    <a href="<?=Url::to(['category/viewsale', 'id'=>$brand['id']])?>">



        <?=$brand['name']?>



    </a>

    <?php if((isset($brand['childs']))):?>

    <li class="list-group">
        <?= $this->getMenuHtml($brand['childs']) ?>
    <li>

        <?php endif;?>

</ul>


