<?php

namespace app\controllers;

use app\models\User;

class QuanlyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUser()
    {

        $this->layout = 'mylayout';

        $user = new User();

        $tbl_user = $user->getAllUsers();

        //var_dump($tbl_user);exit;

        return $this->render('index', ['user' => $tbl_user]);
    }

    public function actionUser2() {
        $this->layout = 'mylayout';

        $user = new User();

        $tbl_user = $user->getUserById(3);
        //var_dump($tbl_user);exit;

        return $this->render('index', ['user'=> $tbl_user]);
    }

}
