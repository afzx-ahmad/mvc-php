<?php

$configFile = __DIR__ . "/configs.properties";

if (!file_exists($configFile)) {
    echo "File configs not found";
    exit();
} else {
    $configProperties =  parse_ini_file($configFile);

    define("BASE_URL", $configProperties["base_url"]);

    define("DB_HOST", $configProperties["db_host"]);
    define("DB_USER", $configProperties["db_user"]);
    define("DB_PORT", $configProperties["db_port"]);
    define("DB_PASSWORD", $configProperties["db_password"]);
    define("DB_NAME", $configProperties["db_name"]);
}
