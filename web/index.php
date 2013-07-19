<?php
ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../vendor/twig/twig/lib/Twig/Autoloader.php';

$app = new Silex\Application();
/**
 * 
 */
require __DIR__.'/../src/controllers.php';

$app->run();