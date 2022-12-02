<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$handler = new StreamHandler('app.log', Monolog\Level::Warning);
$log->pushHandler($handler);
$log->Warning('Предупреждение');
