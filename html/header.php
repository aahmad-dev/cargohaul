<?php // login.php
$hn = '127.0.0.1:3306'; //hostname
$db = 'cargohaul_db'; //database
$un = 'root'; //username
$pw = 'truckr'; //password


$conn = new mysqli($hn, $un, $pw, $db);
?>