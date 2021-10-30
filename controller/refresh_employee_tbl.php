<?php

session_start();

require_once "core/db_connection.php";

require_once "../model/job_model.php";

require_once "../model/employee_model.php";

$_SESSION['employees'] = readEmployeeWithAllAttributes();
header("Location: ../view/employee_tbl_view.php");