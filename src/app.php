<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;

$app = new Application();

$app->register(new TwigServiceProvider(), array(
    'twig.path'    => array(__DIR__.'/../templates'),
    'twig.options' => array('cache' => __DIR__.'/../cache'),
));

$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
}));

return $app;