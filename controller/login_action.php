<?php

require_once 'model/data.php';

if (isset($_POST['login']) && isset($_POST['pass']))
{
    $l = $_POST['login'];
    $p = $_POST['pass'];
    if ($l === $db['username'] && $p === $db['userpass'])
    {
        $r = 1;
    }
    else
    {
        $r = 0;
    }
}
else
{
    echo "<script>alert('pidor')</script>";
}
require_once 'view/balance.php';
