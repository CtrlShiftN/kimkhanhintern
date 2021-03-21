<?php

use yii\helpers\Html;

echo "Your name" . Html::encode($model->name)."<br>";
echo "Your email" . Html::encode($model->email);
