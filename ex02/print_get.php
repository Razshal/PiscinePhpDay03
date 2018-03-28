<?php

$vars = $_SERVER['QUERY_STRING'];
$vars = explode("&", $vars);
foreach ($vars as $var)
{
    $temp = explode("=", $var);
    echo ("{$temp[0]}: {$temp[1]}\n");
}
?>