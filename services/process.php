<?php
//process.php
//Dejan Zelic
include('./dbconnect.php');
$email = $_POST['email'];
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
?>