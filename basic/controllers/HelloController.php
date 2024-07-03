<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Hello;

class HelloController extends Controller
{
    /**
     * Display "Hello Word"
     * 
     * @return string 
     */
    public function actionSay()
    {
        //echo "<h1 style='color:red;'>Hello World!</h1>";
        return $this->render("index");
    }

    /**
     * Use Model User
     */
    public function actionUser()
    {
        // Initialize Object Hello
        $model = new Hello();

        $model->setUser('taichau01', 'admin', 'tai.chau.yii2.com');

        echo '<h1>Thông tin User:</h1><br>' . $model->getUser();
    }
}