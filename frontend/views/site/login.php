<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'Login';
?>

<style>
    .wrap {
        background-image: url('<?= $cdnUrl ?>/img/background2.jpg');
        background-size: cover;
    }
    
</style>

<div class="site-login">
    <div class="row">
        <div class="col-lg-7"></div>
        <div class="col-lg-5 bg-light p-3 rounded">
            <div class="horizontal-line">
                <span class="bg-light">Đăng Nhập Với</span>
            </div>
            <div class="text-white text-center">
                <div class="row mx-auto">
                    <div class="col-md-4 col-lg-4 col-sm-4 py-2"><a class="col-12 btn btn-primary"><i class="fab fa-facebook-f"></i> Facebook</a></div>
                    <div class="col-md-4 col-lg-4 col-sm-4 py-2"><a class="col-12 btn btn-danger"><i class="fab fa-google"></i> Google</a></div>
                    <div class="col-md-4 col-lg-4 col-sm-4 py-2"><a class="col-12 btn btn-success"><i class="fas fa-phone"></i> Phone</a></div>
                </div>
            </div>
            <div class="horizontal-line">
                <span class="bg-light">Hoặc</span>
            </div>
            <div>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'Nhập Email'])->label(false) ?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Nhập mật khẩu'])->label(false) ?>
                <div class="float-left">
                    <?= $form->field($model, 'rememberMe')->checkbox()->label('Nhớ mật khẩu') ?>
                </div>
                <div class="float-right">
                    <?= Html::a('Quên mật khẩu?', ['site/request-password-reset']) ?>
                </div>
                <br>
                <div class="form-group">
                    <?= Html::submitButton('Đăng Nhập', ['class' => 'form-control btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <div class="horizontal-line">
                <span class="bg-light">Bạn Chưa Có Tài Khoản</span>
            </div>
            <a href="<?= $cdnUrl ?>/site/signup" class="form-control btn btn-info">Đăng Ký</a>
        </div>
    </div>
</div>

