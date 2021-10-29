<?php

session_start();

require_once "core/db_connection.php";

require_once "../model/job_model.php";

require_once "../model/employee_model.php";

$employeeID = $_POST['employeeId-edit'];
$fullName = $_POST['fullName-edit'];
$phoneNumber = $_POST['phoneNumber-edit'];
$address = $_POST['address-edit'];
$jobName = $_POST['job-edit'];
$jobId = getJobByName($jobName)['id'];
/*echo $employeeID." ".$fullName." ".$phoneNumber." ".$address." ".$jobName." ".$jobId;*/
editEmployee($employeeID, $fullName, $jobId, $address, $phoneNumber);
$_SESSION['employees'] = readEmployeeWithAllAttributes();
header("Location: ../view/employee_tbl_view.php");

