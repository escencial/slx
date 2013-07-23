<?php

/**
 * Home
 */
$app->get('/', function() use ($app) 
{
	$data = array('name' => 'escencial','title' => 'Slx','home_active'=>'active');
	return $app['twig']->render('index.html.twig', $data);
});

/**
 * Link 1
 */
$app->get('/link1', function() use ($app) 
{
	$data = array('name' => 'Link 1','title' => 'Slx','link1_active'=>'active');
	return $app['twig']->render('link1.html.twig', $data);
});

/**
 * Link 2
 */
$app->get('/link2', function() use ($app) 
{
	$data = array('name' => 'Link 2','title' => 'Slx','link2_active'=>'active');
	return $app['twig']->render('link2.html.twig', $data);
});