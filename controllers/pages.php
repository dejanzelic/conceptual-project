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
        $app->render("aboutus.php", array(
            'title' => 'About-Us',
            'subtitle'=> 'De-Clutter Your Life'
        ));
    }
);
//===============CONTACT US=================
$app->get(
    '/contactus',
    function () use ($app) {
        $app->render("contactus.php", array(
            'title' => 'Contact-Us',
            'subtitle'=> 'De-Clutter Your Life'
        ));
    }
);
$app->get(
    '/thankyou',
    function () use ($app) {
        $app->flash('success', 'Thank you for your email!');
        $app->redirect('/dzelic/Conceptual/index.php/contactus');

    }
);
