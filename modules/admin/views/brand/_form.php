<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brand-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id')->textInput() ?>
    <?php //echo $form->field($model, 'parent_id')->textInput() ?>
    <?php //echo $form->field($model, 'parent_id')->dropDownList
    //(\yii\helpers\ArrayHelper::map(\app\models\Brand::find()->all(),
      //  'id', 'name'))?>
    <div class="form-group field-brand-parent_id has-success">
        <label class="control-label" for="brand-parent_id">Родительская категория</label>
        <select id="brand-parent_id" class="form-control" name="Brand[parent_id]" aria-invalid="false">
            <option value="0">Самостоятельная категория</option>
            <?=\app\components\MenuWidget::widget(['tpl'=>'select', 'model'=>$model])?>
        </select>
    </div>
<br/>
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn  button' : 'btn button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
