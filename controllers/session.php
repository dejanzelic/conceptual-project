<?php

$app->get(
    '/login',
    function () use ($app) {
        $app->render("login.php");
    }
);

$app->post(
    '/login',
    function () use ($app) {

        $dbc = $app->database;

        $email = $_POST['email'];
        $id = "";

        //@TODO Verify password complexity
        $password = hash('Sha256',$_POST['password']);
        $stmt = $dbc->stmt_init();

        if ($stmt->prepare("SELECT id FROM user WHERE email = ? AND password = ?")) {
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $stmt->bind_result($id);

            if ($stmt->fetch()) {
                echo $id;
                session_name("customer");
                session_start("customer");
                $_SESSION["customer"] = $id;
                header('location: ' . $_SERVER['HTTP_REFERER']);
                $stmt->close();
                exit;
            } else{
                echo 'Not True';
                header('location: ../login.php?message=Incorrect%20Log%20In');
                $stmt->close();
                exit;
            }
        }else{
            header('Location: ../login.php?message=Unknown%20Error.%20Please%20contact%20Support');
            exit;
        }
    }
);

$app->get(
    '/logout',
    function () use ($app) {
        session_name("customer");
        session_start("customer");
        session_unset("customer");
        session_destroy("customer");

        //@TODO redirct to whever
    }
);