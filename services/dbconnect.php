<?php
//local-connect.php
$host = 'localhost:8889';
$user = 'root';
$pw = 'root';
$db = 'Conceptual';

$dbc = mysqli_connect($host,$user,$pw,$db) or die('unable to connect[Local]');
//echo 'connected';

?>
 