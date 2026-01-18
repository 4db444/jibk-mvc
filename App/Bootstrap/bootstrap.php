<?php
    require_once dirname(__DIR__) . "/../vendor/autoload.php";
    require_once dirname(__DIR__) . "/Routes/web.php";
    require_once dirname(__DIR__) . "/../Config/database.php";

    use App\Core\Router;
    use App\Core\Database;
    use App\Core\Model;

    $method = $_SERVER["REQUEST_METHOD"];

    if ($method === "POST") $method = $_POST["method"] ?? "post";

    Model::Connect(Database::get_instance());
    
    Router::Dispatch($_SERVER["REQUEST_URI"], $method);