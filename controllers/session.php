<?php

$app->get(
    '/login',
    function () use ($app) {
        $dbc = $app->database;
        $app->render("login.php");
    }
);

$app->post(
    '/login',
    function () use ($app) {
        //@TODO Validate user passed in email and password
        $successLogin = User::login($_POST['email'],$_POST['password']);
        if( $successLogin !== false){
            $app->flash('success', 'You have logged in!');
            //@TODO: display flash message for successful login
            //@TODO: redirect to wherever
        } else {


            //@TODO: display flash message for unsuccessful login
        }
    }
);

$app->get(
    '/logout',
    function () use ($app) {
        session_unset("customer");
        session_destroy("customer");

        //@TODO redirct to whever
    }
);