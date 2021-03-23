<?php

namespace frontend\controllers;

use common\models\User;
use frontend\models\ChangePasswordForm;
use frontend\models\UserForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

$cdnUrl = Yii::$app->params['frontend'];

class UserController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],

        ];
    }

    public function beforeAction($action)
    {
        $this->layout = 'v1';
        if (!parent::beforeAction($action)) {
            return false;
        }
        return true; // or false to not run the action
    }

    public function actionProfile()
    {
        $model = (new UserForm())::findOne(Yii::$app->user->identity->getId());
        if ($model->load(yii::$app->request->post()) && $model->validate()) {
            if ($model->saveUser()) {
                var_dump($model);die;
            }
        }
        return $this->render('profile', [
            'model' => $model
        ]);
    }
}
//    }
//    public function actionProfile()
//    {
//        $model = (new UserForm())::findOne(Yii::$app->user->identity->getId());
//        $model->saveUser();
//
//        if ($model->load(Yii::$app->request->post())) {
//            if ($model->save()) {
//                $model->saveUser();
//                return $this->redirect(['profile']);
//            }
//        }
//
//        return $this->render('update', [
//            'model' => $model,
//        ]);
//    }
//    public function actionChangePassword($id)
//    {
//
//        $model =
//        $model->setScenario('changePwd');
//
//
//        if(isset($_POST['User'])){
//
//            $model->attributes = $_POST['User'];
//            $valid = $model->validate();
//
//            if($valid){
//
//                $model->password = md5($model->new_password);
//
//                if($model->save())
//                    $this->redirect(array('changepassword','msg'=>'successfully changed password'));
//                else
//                    $this->redirect(array('changepassword','msg'=>'password not changed'));
//            }
//        }
//
//        $this->render('change_password',array('model'=>$model));
//    }


