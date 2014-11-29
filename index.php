<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

require 'Bootstrap.php';

session_cache_limiter(false);
session_name("customer");
session_start('customer');

/**
 * Instantiate a Slim application
 */

$app = Bootstrap::getApp();

require("controllers/pages.php");
require("controllers/session.php");
require("controllers/account.php");


/**
 * Run the Slim application
 */
$app->run();
