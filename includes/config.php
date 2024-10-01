<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "foodiepal";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Failed to connect to the database");
}
