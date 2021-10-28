<?php

function getAccount($username, $password)
{
    $sql = "select * from account where userName = '" . $username . "'and password = '" . $password . "'";
    $res = execute($sql);
    return $res->fetch_assoc();
}
