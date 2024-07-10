<?php

namespace app\controllers;

class UserManagerController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $this->layout = "mylayout.php";
        
        return $this->render('index');
    }

}
