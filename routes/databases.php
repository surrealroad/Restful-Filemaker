<?php

$app->get('/databases', function() use($app, $session) {
	$fm = $session->connect();
	$list = $fm->listDatabases();
	$json = json_encode($list);
	$app->response->headers->set('Content-Type', 'application/json');
	$app->response->setBody($json);
});

// database group
$app->group('/database', function () use ($app) {
	// Get database with name
	$app->get('/:database', function ($database) use($app, $session) {

	});
});