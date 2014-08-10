<?php
// debug
error_reporting(E_ERROR);
ini_set('error_reporting', E_ERROR);
ini_set('display_errors',1);
// load FileMaker PHP API (should be in path)
require_once('FileMaker.php');

// load required libraries
require_once("lib/lib.inc.php");

// load authenticate middleware
include_once("inc/auth.php");

// load FileMaker classes
require_once("inc/filemakerSession.php");

// load error handling
require_once("inc/error.php");

// load format handling
require_once("inc/formats.php");

// initialise slim
$app = new \Slim\Slim();

// initialise authentication middleware
//$app->add(new \HttpBasicAuth());

// configure slim
$app->config('debug', false);
$app->config('mode', 'production');
$app->setName('Restful FileMaker');

// initialise FileMaker session
$session = new FileMakerSession('localhost');

// define routes
include("routes/home.php");

$app->group('/:database', function () use($app, $session) {
	// layouts
	include("routes/layouts.php");
	// scripts
	include("routes/scripts.php");
});


// run
$app->run();
