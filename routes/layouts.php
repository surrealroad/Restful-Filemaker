<?php

$app->get('/layouts', function ($database) use($app, $session) {
	getLayouts($app, $session, $database, $session->defaultFormat);
});
$app->get('/layouts.html', function ($database) use($app, $session) {
	getLayouts($app, $session, $database, "html");
});
$app->get('/layouts.json', function ($database) use($app, $session) {
	getLayouts($app, $session, $database, "json");
});
$app->get('/layouts.jsonp', function ($database) use($app, $session) {
	getLayouts($app, $session, $database, "jsonp");
});

function getLayouts($app, $session, $database, $format) {
	$fm = $session->connect($database);
	$layouts = $fm->listLayouts();
	if(FileMaker::isError($layouts)) showError($app, $layouts);
	setFormat($app, array("layouts" => $layouts), $format);
}