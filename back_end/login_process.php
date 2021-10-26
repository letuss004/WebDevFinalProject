<?php

session_start();

require_once "db_connection.php";

if (isset($conn)) {
    require_once "account.php";
    $username = $_POST['Uname'];
    $password = $_POST['Pass'];
    $res = getAccount($username, $password);
    if ($res->num_rows) {
        require_once "employee.php";
        require_once "job.php";
        $acc = $res->fetch_assoc();
        $_SESSION['username'] = $acc['username'];
        $_SESSION['employees'] = readEmployeeTable();
        foreach ($_SESSION['employees'] as &$employee) {
            $job = getJobName($employee['jobId']);
            $employee['jobName'] = $job['jobName'];
            $employee['salary'] = $job['salary'];
        }
        header("Location: ../WebDevFinalProject/front_end/main_page/main.php");
    } else {
        header("Location: ../WebDevFinalProject/front_end/main_page/login_view.php");
    }
}
