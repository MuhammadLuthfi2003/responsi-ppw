<?php

$server = 'localhost';
$user = 'root';
$password = '12345';
$database = 'geminkdotcom';

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("<script>alert('Error 500: Cant Connect to database')</script>");
}

?>