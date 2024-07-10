<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;


class SeederUserController extends Controller
{
    /**
     * Hàm tạo 100 records mẫu cho bảng user
     */
    public function actionGetSeeder()
    {
        for ($i = 1; $i <= 50; $i++) {
            # code...
            echo ($i < 10) ? 'Inserted New User Record 0' . $i . PHP_EOL : 'Inserted New User Record ' . $i . PHP_EOL;
            $sql = Yii::$app->db->createCommand()->insert('user', [
                'id' => ($i < 10) ? "0" . $i : $i,
                'username' => ($i < 10) ? 'user0' . $i : 'user' . $i,
                'password' => ($i < 10) ? 'password0' . $i : 'password' . $i,
                'name' => ($i < 10) ? 'Test0' . $i : 'Test' . $i,
                'email' => ($i < 10) ? 'test0' . $i . '@gmail.com' : 'test' . $i . '@gmail.com',
            ])->execute();
        }

        echo 'Seeder User is Done.' . "\n";

        return ExitCode::OK;
    }
}