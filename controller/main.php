<?php

function calTotalPaid($employees) {
    $res = 0;
    foreach ($employees as &$employee) {
        if ($employee['paymentStatus']) {
            $res += $employee['salary'];
        }
    }
    return $res;
}
