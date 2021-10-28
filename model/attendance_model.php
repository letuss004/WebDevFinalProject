<?php

function readAttendanceModel() {
    $sql = "select * from attendance";
    $res = execute($sql);
    $attend = array();
    while ($row = $res->fetch_assoc()) {
        array_push($attend, $row);
    }
    return $attend;
}