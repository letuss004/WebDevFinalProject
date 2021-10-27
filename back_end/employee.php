<?php

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