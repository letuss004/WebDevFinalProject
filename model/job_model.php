<?php

function readJobTable()
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
