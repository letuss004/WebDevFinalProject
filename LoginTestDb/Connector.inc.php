<?php

$servername = "localhost";
$username = "root";
$password = "12345678";
$database_name = "clinic_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
