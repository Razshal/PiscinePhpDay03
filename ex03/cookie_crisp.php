<?php

if ($_GET["action"] == "set")
{
    setcookie($_GET["name"], $_GET["value"]);
}
else if ($_GET["action"] == "get")
{
    echo($_COOKIE["name"]);
}
else if ($_GET["action"] == "del")
{
    echo($_COOKIE["name"]);
}


?>