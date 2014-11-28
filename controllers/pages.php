<?php
//===============ROOT=================
// GET route
$app->get(
    '/',
    function () use ($app) {
        $app->render("index.php", array(
            'title' => 'Home',
            'subtitle'=> 'De-Clutter Your Life'
        ));
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