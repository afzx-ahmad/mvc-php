<?php

if (!session_id()) {
    session_start();
}
require_once __DIR__ . "/core/Route.php";

$route = new Route();
$route->run();
