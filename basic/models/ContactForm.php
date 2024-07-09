<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Contact;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }

    /**
     * Get All Contacts
     *
     */
    public function getAllContacts()
    {
        return Contact::find()->all();
    }

    /**
     * Hàm insert data from submit form
     */
    public function insert()
    {
        $model = new Contact();
        $model->name = $this->name;
        $model->email = $this->email;
        $model->subject = $this->subject;
        $model->body = $this->body;
        $model->save();

        // $model->setAttributes($this->getAttributes());

        // $model->save();
    }

    /**
     * Hàm gửi mail
     */
    public function sendMail($email)
    {
        $model = new Contact();
        $model->name = $this->name;
        $model->email = $this->email;
        $model->subject = $this->subject;
        $model->body = $this->body;

        Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom(Yii::$app->params['senderEmail'])
            ->setReplyTo($model->email)
            ->setSubject($model->subject)
            ->setTextBody($model->body)
            ->send();
    }
}
