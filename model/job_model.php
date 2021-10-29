<?php
require_once "../controller/core/db_connection.php";

function readJobTable(): array
{
    $sql = "select * from job";
    $res = execute($sql);
    $jobs = array();
    while ($row = $res->fetch_assoc()) {
        array_push($jobs, $row);
    }
    return $jobs;
}


function getJob($jobId)
{
    $sql = "select * from job where id = '" . $jobId . "'";
    $res = execute($sql);
    $row = $res->fetch_assoc();
    return $row;
}

function getJobByName($jobName) {
    $sql = "select * from job where jobName = '" . $jobName . "'";
    $res = execute($sql);
    $row = $res->fetch_assoc();
    return $row;
}

//foreach (getJob(1) as $i) {
//    echo $i . "\n";
//}
//echo getJob(1).to;

//foreach (readJobTable() as $i) {
//    foreach ($i as $j) {
//        echo $j . "\n";
//    };
//}