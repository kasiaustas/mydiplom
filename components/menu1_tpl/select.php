<?php
use app\components\Menu1Widget;
use yii\helpers\Url;
?>

    <option
        value="<?=$form['id']?>"
        <?php if($form['id']==$this->model->parent_id) echo 'selected'  ?>
        <?php if($form['id']==$this->model->id) echo 'disabled'  ?>
    ><?=$tab . $form['name']?>
    </option>
<?php if((isset($form['childs']))):?>
    <li class="list-group">
        <?= $this->getMenuHtml($form['childs'], $tab . '-') ?>
    <li>
<?php endif;?>