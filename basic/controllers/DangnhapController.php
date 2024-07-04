<?php

namespace app\controllers;

use app\models\User;

class DangnhapController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new User();

        if ($model->load(\Yii::$app->request->post())) {
            echo "Da submit"; exit;
        } else {
            return $this->render('index', ['model' => $model]);
        }
    }

}
