<?php

namespace app\controllers;

class TestTailwindController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "mytailwind.php";

        return $this->render('index');
    }

}
