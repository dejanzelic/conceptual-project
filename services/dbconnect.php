<?php

class DBConnect
{
    private static $host = 'localhost';
    private static $user = 'Conceptual';
    private static $pw = 'BYBCMst7AHBEb4Qx';
    private static $db = 'Conceptual';

    public static function init()
    {
        $dbc = mysqli_connect(
            self::$host,
            self::$user,
            self::$pw,
            self::$db) or die('unable to connect[Local]');
        return $dbc;
    }
}
 