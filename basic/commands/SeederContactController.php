<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;


class SeederContactController extends Controller
{
    /**
     * Hàm tạo 100 records mẫu cho bảng contact
     */
    public function actionGetSeeder()
    {
        for ($i = 1; $i <= 50; $i++) {
            # code...
            echo ($i < 10) ? 'Inserted New Contact Record 0' . $i . PHP_EOL : 'Inserted New Contact Record ' . $i . PHP_EOL;
            $sql = Yii::$app->db->createCommand()->insert('contact', [
                'id' => ($i < 10) ? "0" . $i : $i,
                'name' => ($i < 10) ? 'test0' . $i : 'test' . $i,
                'email' => ($i < 10) ? 'test0' . $i . '@gmail.com' : 'test' . $i . '@gmail.com',
                'subject' => ($i < 10) ? 'Test Subject0' . $i : 'Test Subject' . $i,
                'body' => ($i < 10) ? 'This is text body0' . $i : 'This is text body' . $i,
            ])->execute();
        }

        echo 'Seeder Contact is Done.' . "\n";

        return ExitCode::OK;
    }
}