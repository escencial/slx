<?php

$app->get('/', function() 
{
	Twig_Autoloader::register();

 	$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');
/**/
	$twig = new Twig_Environment($loader, array(
	    'cache' => __DIR__.'/../cache',
	));
/**/
	$twig->clearCacheFiles();

	$data = array('name' => 'escencial','title' => 'Slx');

	return $twig->render('index.html.twig', $data);
});

$app->get('/clear-cache', function() 
{
	
	return $loader->clearCacheFiles();
});