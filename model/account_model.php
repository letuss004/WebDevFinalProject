<?php

function getAccount($username, $password)
{
    $sql = "select * from account where userName = '" . $username . "'and password = '" . $password . "'";
    return execute($sql);
}