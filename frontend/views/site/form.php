<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="container-fluid">

    <div class="row">

        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">

            <?php $form = ActiveForm::begin(['id' => 'testForm']); ?>

            <?= $form->field($model, 'name')->textInput(['placeholder' => 'enter your name'])->label(false) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'enter your password'])->label(false) ?>

            <?= $form->field($model, 'email')->input('email', ['placeholder' => 'enter your email'])->label(false) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>

    </div>


</div>
