<?php
include "Connector.php";

$email = $_GET['email'];
$pass = $_GET['password'];
$command = "SELECT * FROM account WHERE email='$email'";
$result = mysqli_query($conn, $command);

if ($result->num_rows > 0) {
    if ($pass === $result->fetch_assoc()['password']) {
        echo "pass corr";
    } else {
        echo 'pass incorrect';
    }
} else {
    echo "Your email or password is incorrect";
}

$conn->close();

