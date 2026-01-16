<?php
    require_once __DIR__ . "/../vendor/autoload.php";
    require_once __DIR__ . "/../App/Routes/web.php";

    use \App\Core\Router;

    $method = $_POST["method"] ?? "get";

    Router::Dispatch($_SERVER["REQUEST_URI"], $method);