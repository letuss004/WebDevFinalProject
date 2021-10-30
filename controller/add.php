<?php

session_start();

require_once "core/db_connection.php";

require_once "../model/job_model.php";

require_once "../model/employee_model.php";

$fullName = $_POST['fullName-add'];
$phoneNumber = $_POST['phoneNumber-add'];
$address = $_POST['address-add'];
$jobId = $_POST['job-add'];
//$jobId = getJobByName($jobName)['id'];
/*echo $jobId." ".$jobName." ".$address." ".$phoneNumber." ".$fullName;*/
add_staff($jobId, $fullName, $phoneNumber, $address);
$_SESSION['employees'] = readEmployeeWithAllAttributes();
header("Location: ../view/employee_tbl_view.php");