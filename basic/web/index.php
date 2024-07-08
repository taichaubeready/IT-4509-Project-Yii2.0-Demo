<?php

use Symfony\Component\Dotenv\Dotenv;

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');

// // overwrites existing env variables
// $dotenv->overload(__DIR__.'/../.env');

// // loads .env, .env.local, and .env.$APP_ENV.local or .env.$APP_ENV
// $dotenv->loadEnv(__DIR__.'/../.env');

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
