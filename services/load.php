<?php
require('dbconnect.php');
require('helper.php');

$app->database = DBConnect::init();

//$app->container->singleton('database', function (){
//    return DBConnect::init();
//});