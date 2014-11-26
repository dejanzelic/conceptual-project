<?php
//@TODO Delete this
include('./dbconnect.php');

//values from html
$name  = $_POST['name'];
$password = hash('sha256',$_POST["password"]);
$email = $_POST['email'];

$stmt = $dbc->stmt_init();
if ($stmt->prepare("SELECT id FROM user WHERE email = ?")) {
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id);
    if ($stmt->fetch()) {
        header('Location: ../login.php?message=Email%20exits');
    } else{
        if ($stmt->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)")) {
            $stmt->bind_param("sss", $name, $email, $password);
            $stmt->execute();
            echo 'added';
            header('Location: ../login.php?message=Successfully%20registered!%20Please%20log%20in.');
        }else{
            echo 'err';
        }
    }
}else{
    header('Location: ../login.php?message=Unknown%20Error.%20Please%20contact%20Support');
    exit;
}


//close the connection
mysqli_close($dbc);