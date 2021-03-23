<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

var_dump($model['name']);die;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Họ và tên'])->label(false) ?>
<?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false) ?>
<?= $form->field($model, 'content')->textInput(['placeholder' => 'Nhập vào ghi chú của bạn'])->label(false) ?>
<?= Html::submitButton('Gửi phản hồi', ['class' => 'btn btn-primary', 'name' => 'response']) ?>
<?php ActiveForm::end(); ?>
