<?php

function getJobName($jobId) {
    $sql =  "select * from job where id = '".$jobId."'";
    $res = execute($sql);
    $row = $res->fetch_assoc();
    return $row;
}
