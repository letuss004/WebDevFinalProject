<?php

require_once "job_model.php";

function readEmployeeTable()
{
    $sql = "select * from employee";
    $res = execute($sql);
    $employees = array();
    while ($row = $res->fetch_assoc()) {
        array_push($employees, $row);
    }
    return $employees;
}

function readEmployeeWithAllAttributes() {
    $employees = readEmployeeTable();
    foreach ($employees as &$employee) {
        $job = getJob($employee['jobId']);
        $employee['jobName'] = $job['jobName'];
        $employee['salary'] = $job['salary'];
    }
    return $employees;
}

function readEmployeeByName($fullName) {
    $sql = "SELECT * FROM employee WHERE fullName LIKE '%$fullName%'";
    $res = execute($sql);
    $employees = array();
    while ($row = $res->fetch_assoc()) {
        $job = getJob($row['jobId']);
        $row['jobName'] = $job['jobName'];
        $row['salary'] = $job['salary'];
        array_push($employees, $row);
    }
    return $employees;
}

function delete_staff($employeeID)
{
    if (isset($employeeID)) {
        kill_data_fk($employeeID);
        $sql = "DELETE FROM employee WHERE employeeID = '$employeeID'";
        execute($sql);
    }
}

function kill_data_fk($employeeID)
{
    if (isset($employeeID)) {
        $sql = "DELETE FROM attendance WHERE employeeID = '$employeeID'";
        execute($sql);
    }
}

function add_staff($jobId, $fullName, $phoneNumber, $address)
{
        $sql = "INSERT INTO employee (jobId, fullName, phoneNumber, address, paymentStatus) VALUES ('$jobId', '$fullName', '$phoneNumber',  '$address', 0)";
        echo $sql;
        execute($sql);
}

function editEmployee($employeeID, $fullName, $jobId, $address, $phoneNumber) {
    $sql = "update employee set fullName = '$fullName', jobId = '$jobId', address = '$address', phoneNumber = '$phoneNumber' where employeeID = '$employeeID'";
    execute($sql);
}

function edit_staff($employeeID, $username = null, $jobId = null, $fullName = null, $birthdate = null, $phoneNumber = null, $address = null, $paymentStatus = null)
{
    $sql_set = account_sql_set_statement($username, $jobId, $fullName, $birthdate, $phoneNumber, $address, $paymentStatus);
    if (isset($sql_set)) {
        $sql = "UPDATE employee SET '$sql_set' WHERE employeeID = '$employeeID'";
        execute($sql);
    }
}

function add_account($username, $email, $password)
{
    if (isset($username) && isset($email) && isset($password)) {
        $sql = "INSERT INTO account VALUES username='$username', email='$email', password='$password';";
        execute($sql);
    }
}

function delete_account($username)
{
    if (isset($username)) {
        $sql = "DELETE FROM account WHERE username='$username'";
        execute($sql);
    }
}

function edit_account($username, $email, $password)
{
    $sql_set = null;
    if (isset($password)) {
        $sql_set = $sql_set . '' . "email='$email', ";
    }
    if (isset($email)) {
        $sql_set = $sql_set . '' . "password='$password', ";
    }
    if (isset($sql_set)) {
        $sql = "UPDATE employee SET '$sql_set' WHERE username = '$username'";
        execute($sql);
    }

}

function account_sql_set_statement($username = null, $jobId = null, $fullName = null, $birthdate = null, $phoneNumber = null, $address = null, $paymentStatus = null): string
{
    $sql = null;
    if (isset($username)) {
        $sql = $sql . '' . "username='$username', ";
    }
    if (isset($jobId)) {
        $sql = $sql . '' . "jobId='$jobId', ";
    }
    if (isset($fullName)) {
        $sql = $sql . '' . "fullName='$fullName', ";
    }
    if (isset($birthdate)) {
        $sql = $sql . '' . "birthdate='$birthdate', ";
    }
    if (isset($phoneNumber)) {
        $sql = $sql . '' . "phoneNumber='$phoneNumber', ";
    }
    if (isset($address)) {
        $sql = $sql . '' . "address='$address', ";
    }
    if (isset($paymentStatus)) {
        $sql = $sql . '' . "paymentStatus='$paymentStatus'";
    }
    return $sql;
}
