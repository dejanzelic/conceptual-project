<?php
class helpers {
    public static function getHeader($title){
        include_once("{$_SERVER['DOCUMENT_ROOT']}/views/header.php");
    }
    public static function getNavBar($title){
        include_once("{$_SERVER['DOCUMENT_ROOT']}/views/navbar.php");
    }
    public static function getLogInForm($title){
        include_once("{$_SERVER['DOCUMENT_ROOT']}/views/loginForm.php");
    }
    public static function getLoggedInView($title){
        include_once("{$_SERVER['DOCUMENT_ROOT']}/views/logoutForm.php");
    }
    public static function getscripts(){
        echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>';
        echo "<script src='/Conceptual/js/bootstrap.min.js'></script>";
    }
};