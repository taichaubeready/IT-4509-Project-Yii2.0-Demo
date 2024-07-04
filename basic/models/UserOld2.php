<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $email
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * Get All Users
     */
    public function getAllUsers() {
        return User::find()->all();
    }

    /**
     * Get User By ID
     */
    public function getUserById($id) {
        return User::findOne($id); // Get by Primary Key
        // return User::find(['id' => $id])->all();
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'name', 'email'], 'required'],
            [['username', 'password', 'name'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 50],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'name' => 'Name',
            'email' => 'Email',
        ];
    }
}
