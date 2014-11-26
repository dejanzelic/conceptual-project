<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

require 'Bootstrap.php';




/**
 * Instantiate a Slim application
 */

$app = Bootstrap::getApp();

require("services/load.php");
require("controllers/pages.php");
require("controllers/session.php");


/**
 * Run the Slim application
 */
$app->run();
