<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="container">

    <div class="row">


        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h1 class="text-center">Login</h1>
            <?php $form = ActiveForm::begin() ?>
            <?= $form->field($model, 'name')->input('text'); ?>
            <?= $form->field($model, 'password')->input('password'); ?>
            <?= $form->field($model, 'email')->input('email'); ?>


            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-danger']) ?>
            </div>
            <?php $form = ActiveForm::end() ?>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>

    </div>

</div>
