<?php

namespace app\controllers;

use yii\web\Controller;

class FriendlyController extends Controller
{
    public function actionIndex()
    {
        //echo '<h1 style="color:red">Xin chào! Tôi là Nhật Tài</h1>';

        $this->layout = "mylayout.php";

        return $this->render("index");
    }
}