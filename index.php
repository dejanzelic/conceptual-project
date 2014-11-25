<?php
require 'Slim/Slim.php';
require("services/helper.php");
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
//===============ROOT=================
// GET route
$app->get(
    '/',
    function () use ($app) {
        $app->render("index.php");
    }
);
//===============ABOUT US=================
$app->get(
    '/aboutus',
    function () use ($app) {
        $app->render("about-us.php");
    }
);
//===============CONTACT US=================
$app->get(
    '/contactus',
    function () use ($app) {
        $app->render("contact-us.php");
    }
);
//===============CONTACT US=================
$app->get(
    '/login',
    function () use ($app) {
        $app->render("login.php");
    }
);
//+++++++++++SAMPLES++++++++++++++++
// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

/**
 * Run the Slim application
 */
$app->run();
