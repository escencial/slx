<?php

// Get Errors.
ini_set('display_errors', 1);

// Get Autoloader
require_once __DIR__.'/../vendor/autoload.php';

// Get Conf
require __DIR__.'/../config/config.php';

// App
$app = require __DIR__.'/../src/app.php';

// Get Source.
require __DIR__.'/../src/controllers.php';

// Run.
$app->run();