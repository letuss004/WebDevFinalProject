<?php

session_start();

require_once "core/db_connection.php";

if (isset($conn)) {
    require_once "./../model/account_model.php";
    $username = $_POST['Uname'];
    $password = $_POST['Pass'];
    $res = getAccount($username, $password);
    if ($res->num_rows) {
        require_once "./../model/employee_model.php";
        require_once "./../model/job_model.php";
        $acc = $res->fetch_assoc();
        $_SESSION['username'] = $acc['username'];
        $_SESSION['employees'] = readEmployeeTable();
        foreach ($_SESSION['employees'] as &$employee) {
            $job = getJobName($employee['jobId']);
            $employee['jobName'] = $job['jobName'];
            $employee['salary'] = $job['salary'];
        }
        header("Location: ../view/main_view.php");
    } else {
        header("Location: ../view/login_view.php");
    }
}
