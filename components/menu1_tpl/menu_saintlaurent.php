<?php
use app\components\Menu1Widget;
use yii\helpers\Url;
?>

<ul class="menu_form">

    <a href="<?=Url::to(['category/viewsaintlaurent', 'id'=>$form['id']])?>">



        <?=$form['name']?>



    </a>

    <?php if((isset($form['childs']))):?>

    <li class="list-group">
        <?= $this->getMenuHtml($form['childs']) ?>
    <li>

        <?php endif;?>

</ul>