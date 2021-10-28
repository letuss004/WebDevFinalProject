<?php

session_start();

require_once "core/db_connection.php";

if (isset($conn)) {
    require_once "./../model/account_model.php";
    $username = $_POST['Uname'];
    $password = $_POST['Pass'];
    $acc = getAccount($username, $password);
    if (isset($acc)) {
        require_once "./../model/employee_model.php";
        require_once "./../model/job_model.php";
        $_SESSION['login'] = $acc;
        $_SESSION['employees'] = readEmployeeTable();
        foreach ($_SESSION['employees'] as &$employee) {
            $job = getJob($employee['jobId']);
            $employee['jobName'] = $job['jobName'];
            $employee['salary'] = $job['salary'];
        }

        header("Location: ../WebDevFinalProject/view/main_view.php");
    } else {
        header("Location: ../WebDevFinalProject/view/login_view.php");
    }
}
