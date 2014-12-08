<?php

$app->get(
    '/login',
    function () use ($app) {
        if (User::getCurrentUser() === NULL){
            $dbc = $app->database;
            $app->render("login.php", array(
                'title' => 'Log-In',
                'subtitle'=> 'Log In'
            ));
        }else{
            $app->flash('warning', 'No need to log in again, you are already logged in!');
            $app->redirect('/dzelic/Conceptual/index.php');
        }
    }
);

$app->post(
    '/login',
    function () use ($app) {
        //@TODO Validate user passed in email and password
        $successLogin = User::login($_POST['email'],$_POST['password']);
        if( $successLogin !== null){
            $app->flash('success', 'You have logged in!');
            $app->redirect('/dzelic/Conceptual/index.php');
        } else {
            $app->flash('error', 'Incorrect user name or password!');
            $app->redirect('/dzelic/Conceptual/index.php/login');
        }

    }
);
$app->get(
    '/login/demoaccount',
    function () use ($app) {
        $successLogin = User::login('johndoe@sample.com','Sup3r Secur3 CleAr T3xt PAss');
        if( $successLogin !== null){
            $app->flash('success', 'You have logged in with the Demo Account!');
            $app->redirect('/dzelic/Conceptual/index.php');
        } else {
            $app->flash('error', 'Hmmm seems like somebody deleted the Demo Account or changed the password');
            $app->redirect('/dzelic/Conceptual/index.php/login');
        }

    }
);

$app->get(
    '/logout',
    function () use ($app) {
        session_unset("customer");
        session_destroy();
        $app->redirect('/dzelic/Conceptual/index.php/login');
    }
);
$app->post(
    '/register',
    function () use ($app) {
        $register = User::register($_POST['email'], $_POST['name'], hash('SHA256',$_POST['password']));
        if ($register['success'] === true){
            $app->flash('success', $register['message']);
            $login = User::login($_POST['email'],$_POST['password']);
            $app->redirect('/dzelic/Conceptual/index.php');
        }else{
            $app->flash('error', $register['message']);
            $app->redirect('/dzelic/Conceptual/index.php/login');
        }

    }
);