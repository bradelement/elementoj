<?php
define('WEB_ROOT', __DIR__ . '/..');
require_once WEB_ROOT . '/vendor/autoload.php';

use Lib\Env;
use Lib\Configger;
use Lib\Utils\UUID;

define('ENV', Env::getEnv());
define('LOG_ID', UUID::uuid());
define('HOST_NAME', 'lalalal'); //for cookie

if (ENV === Env::ONLINE) {
    ini_set('display_errors', 'Off');
    error_reporting(0);
} else {
    ini_set('display_errors', 'On');
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
}

$conf = array('config');
$configger = new Configger(ENV, $conf);
$configs = $configger->getConfig();

$app = new Slim\App(array('settings' => $configs));
require_once WEB_ROOT . '/src/Bootstrap/bootstrap.php';
$app->run();
