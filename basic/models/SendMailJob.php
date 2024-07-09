<?php

namespace app\models;
use Yii;
use yii\base\BaseObject;

class SendMailJob extends BaseObject implements \yii\queue\JobInterface
{
    public $name;
    public $email;
    public $subject;
    public $body;
    
    public function execute($queue)
    {
        Yii::$app->mailer->compose()
        ->setTo($this->email)
        ->setFrom(Yii::$app->params['senderEmail'])
        ->setReplyTo($this->email)
        ->setSubject($this->subject)
        ->setTextBody($this->body)
        ->send();

    }
}