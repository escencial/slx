<?php

$app->get('/', function() use ($app) 
{
	$data = array('name' => 'escencial','title' => 'Slx');
	return $app['twig']->render('index.html.twig', $data);
});

$app->get('/cc', function() use ($app)
{
	return $app['twig']->clearCacheFiles();
});