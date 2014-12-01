<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

require 'Bootstrap.php';
include_once('jcart/jcart.php');

session_cache_limiter(false);
session_name();
session_start();

/**
 * Instantiate a Slim application
 */

$app = Bootstrap::getApp();

require("controllers/pages.php");
require("controllers/session.php");
require("controllers/account.php");
require("controllers/product.php");


/**
 * Run the Slim application
 */
$app->run();
