<?php
use yii\widgets\ActiveForm;
?>

<?php $form=ActiveForm::begin()?>
<?= $form->field($model, 'image')->fileInput()?>
<button>Загрузить</button>
<?=ActiveForm::end()?>
