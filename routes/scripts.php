<?php

$app->get('/scripts', function ($database) use($app, $session) {
	getScripts($app, $session, $database, $session->defaultFormat);
});
$app->get('/scripts.html', function ($database) use($app, $session) {
	getScripts($app, $session, $database, "html");
});
$app->get('/scripts.json', function ($database) use($app, $session) {
	getScripts($app, $session, $database, "json");
});
$app->get('/scripts.jsonp', function ($database) use($app, $session) {
	getScripts($app, $session, $database, "jsonp");
});

function getScripts($app, $session, $database, $format) {
	$fm = $session->connect($database);
	$scripts = $fm->listScripts();
	if(FileMaker::isError($scripts)) showError($app, $scripts, $format);
	setFormat($app, array("scripts" => $scripts), $format);
}