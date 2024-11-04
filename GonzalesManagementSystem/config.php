<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ManagementSystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die();
}

?>