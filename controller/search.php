<?php

session_start();

require_once "core/db_connection.php";

require_once "../model/job_model.php";

require_once "../model/employee_model.php";

$fullName = $_POST['search-input'];

$_SESSION['employees'] = readEmployeeByName($fullName);
header("Location: ../view/employee_tbl_view.php");

