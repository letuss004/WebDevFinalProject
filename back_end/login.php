<?php

require_once "DBConnection.php";

if (isset($conn)) {
    $username = $_POST['Uname'];
    $password = $_POST['Pass'];
    $sql = "select * from account where userName = '" . $username . "'and password = '" . $password . "'";
    $res = $conn->query($sql);
    if ($res->num_rows) {
        header("Location: ../WebDevFinalProject/front_end/main_page/main.php");
    } else {
        header("Location: ../WebDevFinalProject/front_end/main_page/login_view.php");
    }
}
