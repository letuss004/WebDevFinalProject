<?php

$servername = "localhost";
$username = "root";
$password = "";
$password = "12345678";
$database = "clinic_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

function execute($sql)
{
    return $GLOBALS['conn']->query($sql);
}