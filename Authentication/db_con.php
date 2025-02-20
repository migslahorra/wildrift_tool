<?php

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "wildrift_tool";

// create connection
$conn = new mysqli($localhost, $username, $password, $dbname);

// check connection
if($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
}
?>