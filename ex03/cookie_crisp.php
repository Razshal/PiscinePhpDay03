<?php
if ($_GET["action"] === "set" && $_GET["name"] && $_GET["value"])
    setcookie($_GET["name"], $_GET["value"], time() + (31 * 24 * 60 * 60));
else if ($_GET["action"] === "get" && $_COOKIE[$_GET["name"]])
    echo("{$_COOKIE[$_GET["name"]]}\n");
else if ($_GET["action"] === "del")
    setcookie($_GET["name"], "", time() - 3600);
?>