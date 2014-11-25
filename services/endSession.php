<?php
//logout.php
//Dejan Zelic
session_name("customer");
session_start("customer");
session_unset("customer");
session_destroy("customer");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>