<?php
use app\components\Menu1Widget;
use yii\helpers\Url;
?>

<ul class="menu_form">

    <a href="<?=Url::to(['category/viewkids', 'id'=>$form['id']])?>">

        <?php if(!($form['id']=='22')&&!($form['id']=='23')&&!($form['id']=='27')&&!($form['id']=='28')):?>

        <?=$form['name']?>

        <?php endif;?>

    </a>

    <?php if((isset($form['childs']))):?>
    <?php if(!($form['id']=='22')&&!($form['id']=='23')&&!($form['id']=='27')&&!($form['id']=='28')):?>
    <li class="list-group">
        <?= $this->getMenuHtml($form['childs']) ?>
    <li>

        <?php endif;?>
        <?php endif;?>
</ul>