<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "clinic_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

function execute($sql) {
    return $GLOBALS['conn']->query($sql);
}