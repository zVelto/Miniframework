<?php

    require_once "../vendor/autoload.php";
    $route = new \app\Route;
    echo "It's working!";
    echo "<hr>";
    print_r($route->getUrl());

?>