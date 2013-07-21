<?php

$app->get('/', function() use ($app) 
{
	$data = array('name' => 'escencial','title' => 'Slx');
	return $app['twig']->render('index.html.twig', $data);
});