<?php

if (!session_id()) {
    session_start();
}

require_once __DIR__ . "/../src/configs/default.php";
require_once __DIR__ . "/core/Autoload.php";

$route = new Route();
$route->run();
