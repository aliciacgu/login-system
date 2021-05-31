<?php

$servername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="login-project";

$conn=mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection to DB failed: ".mysqli_connect_error());
}