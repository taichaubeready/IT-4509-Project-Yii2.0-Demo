<?php

namespace app\job;

use Yii;
use yii\base\BaseObject;

class SendMailJob extends BaseObject implements \yii\queue\JobInterface
{
    // public $name;
    // public $email;
    // public $subject;
    // public $body;

    public $email;

    public function execute($queue)
    {
        // Yii::$app->mailer->compose()
        // ->setTo($this->email)
        // ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
        // ->setReplyTo([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']] )
        // ->setSubject($this->subject)
        // ->setTextBody($this->body)
        // ->send();

        $sql = Yii::$app->db->createCommand("SELECT * FROM contact where email='{$this->email}'")->queryAll();

        if (count($sql) > 0) {
            # code...
            $name = $sql[0]["name"];
            $email = $sql[0]["email"];
            $subject = $sql[0]["subject"];
            $body = $sql[0]["body"];

            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => $name])
                ->setReplyTo([Yii::$app->params['senderEmail'] => $name])
                ->setSubject($subject)
                ->setTextBody($body)
                ->send();

        } else {
            echo "There is no email in contact table!" . PHP_EOL;
        }


    }
}