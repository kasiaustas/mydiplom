<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <input type="submit" name="h" method="post" class="btn button" value="Хешировать пароль">
    <span>&nbsp;Хешируется текст, введенный в поле Password</span>

    <div ><span style="font-weight: bold">Введите хешированный пароль в поле Password, затем нажмите кнопку Update:</span> <?= $hash = Yii::$app->getSecurity()->generatePasswordHash($model->password);?></div><br/>
    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn button' : 'btn button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



