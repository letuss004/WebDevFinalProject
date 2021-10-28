<?php


function getAccount($username, $password)
{
    $sql = "select * from account where userName = '" . $username . "'and password = '" . $password . "'";
    return execute($sql);
}

function accToArray($username, $password)
{
    $res = getAccount($username, $password);
    return $res->fetch_assoc();
}

function array1(): array
{
    return ["admin", "1"];
}