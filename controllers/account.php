<?php
//===============account=================
// GET route
$app->get(
    '/account',
    function () use ($app) {
        if (User::getCurrentUser() !== NULL){
            $app->render("account.php", array(
                'title' => 'Account',
                'subtitle'=> 'Manage your Account'
            ));
        } else {
            $app->flash('warning', 'You need to be logged in to view your account!');
            $app->redirect('/dzelic/Conceptual/index.php/login');
        }
    }
);
$app->post(
    '/account',
    function () use ($app) {
        $update = User::updateUser(
            $_POST['name'],
            $_POST['password'],
            $_POST['email'],
            $_POST['address'],
            $_POST['city'],
            $_POST['state'],
            $_POST['zip'],
            $_POST['phone']
        );
        if ($update['success'] === true) {
            $app->flash('success', $update['message']);
            $app->redirect('/dzelic/Conceptual/index.php/account');
        } else {
            $app->flash('error', $update['message']);
            $app->redirect('/dzelic/Conceptual/index.php/account');
        }

    }
);
