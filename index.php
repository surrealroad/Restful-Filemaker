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
include("routes/databases.php");


// run
$app->run();
