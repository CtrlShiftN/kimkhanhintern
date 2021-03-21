<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class ActiveForm extends Model
{

    public $email;
    public $password;
    public $name;

    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            ['name', 'trim'],
            ['name', 'string', 'max' => 100],
        ];
    }
}
