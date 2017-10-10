<?php
use app\components\MenuWidget;
use yii\helpers\Url;
?>

<option
    value="<?=$brand['id']?>"
    <?php if($brand['id']==$this->model->parent_id) echo 'selected'  ?>
    <?php if($brand['id']==$this->model->id) echo 'disabled'  ?>
><?=$tab . $brand['name']?>
</option>
    <?php if((isset($brand['childs']))):?>
       <li class="list-group">
               <?= $this->getMenuHtml($brand['childs'], $tab . '-') ?>
       <li>
    <?php endif;?>


