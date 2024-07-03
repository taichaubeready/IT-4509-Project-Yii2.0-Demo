<?php

namespace app\models;

use yii\base\Model;

class Hello extends Model
{
    // Initialize Variables
    public $username;
    public $password;
    public $website;

    // Methods
    public function setUser($username, $password, $website)
    {
        $this->username = $username;
        $this->password = $password;
        $this->website = $website;
    }

    public function getUser()
    {
        return '<h1>' . $this->username . '</h1>' . '<br>' . '<h1>' . $this->password . '</h1>' . '<br>' . '<h1>' . $this->website . '</h1>' . '<br>';
    }
}