<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <? //echo $form->field($model, 'id_type')->textInput() ?>
    <?=$form->field($model, 'id_type')->dropDownList
    (\yii\helpers\ArrayHelper::map(\app\models\Type::find()->all(),
      'type_id', 'name'))?>

    <?//echo $form->field($model, 'id_brand')->textInput() ?>
    <?=$form->field($model, 'id_brand')->dropDownList
    (\yii\helpers\ArrayHelper::map(\app\models\Brand::find()->all(),
        'id', 'name'))?>

    <?//echo $form->field($model, 'id_form')->textInput() ?>
    <?=$form->field($model, 'id_form')->dropDownList
    (\yii\helpers\ArrayHelper::map(\app\models\Form::find()->all(),
        'id', 'name'))?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'picture')->textInput(['maxlength' => true]) ?>

    <?//echo $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php

    echo $form->field($model, 'description')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),

]);
    ?>

    <?= $form->field($model, 'sale')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn button' : 'btn button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
