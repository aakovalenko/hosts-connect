<?php

namespace app\controllers;

use app\models\forms\SignupForm;
use app\models\forms\LoginForm;
use Yii;

class UserController extends \yii\web\Controller
{
    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['site/index']);
        }
        return $this->render('login',[
            'model'=> $model
        ]);
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $user = $model->save()) {
            Yii::$app->user->login($user);
            Yii::$app->session->setFlash('success', 'User '. $model->username .' registered!');
            return $this->redirect(['site/index']);
        }

        return $this->render('signup',[
            'model' => $model,
        ]);
    }


}
