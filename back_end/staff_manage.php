<?php

require_once "db_connection.php";

if (isset($conn)) {
//    delete_staff('ICT010');
}

function delete_staff($employeeID)
{
    kill_data_fk($employeeID);
    $sql = "DELETE FROM employee WHERE employeeID = '$employeeID'";
    execute($sql);
}

function kill_data_fk($employeeID)
{
    $sql = "DELETE FROM attendance WHERE employeeID = '$employeeID'";
    execute($sql);
}

function add_staff($jobId, $fullName, $birthdate, $phoneNumber, $address)
{
    $sql = "INSERT INTO employee (jobId, fullName, birthdate, phoneNumber, address, paymentStatus) VALUES ('$jobId', '$fullName', '$birthdate', '$phoneNumber',  '$address', 0)";
    execute($sql);
}


function edit_jobID($employeeID = null, $jobId = null)
{
    $sql = "UPDATE employee SET jobId='$jobId' WHERE employeeID='$employeeID'";
    execute($sql);
}

function edit_fullName($employeeID = null, $fullName = null)
{
    $sql = "UPDATE employee SET fullName='$fullName' WHERE employeeID='$employeeID'";
    execute($sql);
}

function edit_birthDate($employeeID = null, $birthDate = null)
{
    $sql = "UPDATE employee SET birthDate='$birthDate' WHERE employeeID='$employeeID'";
    execute($sql);
}

function edit_phoneNumber($employeeID = null, $phoneNumber = null)
{
    $sql = "UPDATE employee SET phoneNumber='$phoneNumber' WHERE employeeID='$employeeID'";
    execute($sql);
}

function edit_address($employeeID = null, $address = null)
{
    $sql = "UPDATE employee SET address='$address' WHERE employeeID='$employeeID'";
    execute($sql);
}

function edit_paymentStatus($employeeID = null, $paymentStatus = null)
{
    $sql = "UPDATE employee SET paymentStatus='$paymentStatus' WHERE employeeID='$employeeID'";
    execute($sql);
}


//function getJobName($jobId) {
//    $sql =  "select * from job where id = '".$jobId."'";
//    $res = execute($sql);
//    $row = $res->fetch_assoc();
//    return $row;
//}
