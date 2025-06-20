<?php

$routes = [
    "GET /" => __DIR__ . "/handler/index.php"
];

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routeKey = "$requestMethod $requestUri";

if (array_key_exists($routeKey, $routes)) {
    require $routes[$routeKey];
    exit();
}


http_response_code(404);
require __DIR__ . "/handler/notFound.php";
