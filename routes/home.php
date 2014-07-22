<?php

$app->get('/', function() use($app, $session) {
	$fm = $session->connect();
	$list = $fm->listDatabases();
	if(FileMaker::isError($list)) showError($app, $list);
	$json = json_encode($list);
	$app->response->headers->set('Content-Type', 'application/json');
	$app->response->setBody($json);
});