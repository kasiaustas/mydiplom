<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Form */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?//= $form->field($model, 'parent_id')->textInput() ?>
    <div class="form-group field-form-parent_id has-success">
        <label class="control-label" for="form-parent_id">Родительская категория</label>
        <select id="form-parent_id" class="form-control" name="Form[parent_id]" aria-invalid="false">
            <option value="0">Самостоятельная категория</option>
            <?=\app\components\Menu1Widget::widget(['tpl'=>'select', 'model'=>$model])?>
        </select>
    </div>
        <br/>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn button' : 'btn button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
