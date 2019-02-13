<?php
require __DIR__ . '/../vendor/autoload.php';

(new \Dotenv\Dotenv(__DIR__ . '/../'))->load();

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG') == 1 ? true : false);
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV') == 'dev' ? 'dev' : 'prod');


require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
