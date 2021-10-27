<?php

function calTotalPaid($employees) {
    $res = 0;
    foreach ($employees as &$employee) {
        $res += $employee['salary'];
    }
    return $res;
}
