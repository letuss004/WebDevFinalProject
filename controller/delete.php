<?php

session_start();

require_once "core/db_connection.php";

require_once "../model/employee_model.php";

$employeeID = $_GET['id'];

echo $_GET['id'];

delete_staff($employeeID);

$_SESSION['employees'] = readEmployeeWithAllAttributes();
header("Location: ../view/employee_tbl_view.php");