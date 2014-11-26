<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();


/**
 * Instantiate a Slim application
 */
$app = new \Slim\Slim();

/**
 * Define the Slim application routes
 * `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 */

$app->config(array(
    'templates.path' => './views',
));

require("services/load.php");
require("controllers/pages.php");
require("controllers/session.php");


/**
 * Run the Slim application
 */
$app->run();
