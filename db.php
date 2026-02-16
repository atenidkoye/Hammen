<?php
include 'config.php'; //Create file with the same name and write your DB credentials there


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>