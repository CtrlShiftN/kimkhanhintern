<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'username')->textInput(['autofocus' => 'true','placeholder' => 'Enter your username'])->label("Nhap Ten:") ?>
<?= $form->field($model, 'email')->textInput(['placeholder' => 'Enter your email'])->label("Nhap Email:") ?>
<?= $form->field($model, 'content')->textInput(['placeholder' => 'Nhap Vao Ghi Chu Cua Ban'])->label("Nhap Note:") ?>
<?= Html::submitButton('Gui Phan Hoi', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>