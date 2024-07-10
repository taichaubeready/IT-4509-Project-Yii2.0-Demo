<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;


class ContactController extends Controller
{
    /**
     * Hàm list all contact info
     */
    public function actionListContact(){
        $sql = Yii::$app->db->createCommand("SELECT * FROM contact")->queryAll();

        for ($i=0; $i < count($sql) ; $i++) { 
            # code...
            $id = ($sql[$i]["id"] < 10) ? "0" . $sql[$i]["id"] : $sql[$i]["id"];
            $name = $sql[$i]["name"];
            $email = $sql[$i]["email"];
            $subject = $sql[$i]["subject"];
            $body = $sql[$i]["body"];

            echo "{$id} | " . "{$name} | " . "{$email} | " . "{$subject} | " . "{$body} | " . PHP_EOL;
        }

        echo "List Contact is DONE" . " ". PHP_EOL;

        return ExitCode::OK;
    }

    /**
     * Hàm tìm email contact được truyền vào
     */
    public function actionFindMailContact($email) {
        $sql = Yii::$app->db->createCommand("SELECT * FROM contact WHERE email='{$email}'")->queryAll();

        if (count($sql) > 0) {
            # code...
            $id = ($sql[0]["id"] < 10) ? "0" . $sql[0]["id"] : $sql[0]["id"];
            $name = $sql[0]["name"];
            $email = $sql[0]["email"];
            $subject = $sql[0]["subject"];
            $body = $sql[0]["body"];

            echo "Your result below: " . PHP_EOL;
            echo "{$id} | " . "{$name} | " . "{$email} | " . "{$subject} | " . "{$body} | " . PHP_EOL;
        } else {
            echo "There is no email contact you are looking in Database table contact!" . PHP_EOL;
        }
    }
}