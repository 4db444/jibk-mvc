<?php
    namespace App\Core;

    class Router {
        private static array $routes = [
            "GET" => [],
            "POST" => [],
            "PUT" => [],
            "DELETE" => []
        ];

        public static function Get (string $path, array $action) : void {
            self::$routes["GET"][$path] = $action;
        }

        public static function Post (string $path, array $action) {
            self::$routes["POST"][$path] = $action;
        }

        public static function Put (string $path, array $action) {
            self::$routes["PUT"][$path] = $action;
        }

        public static function Delete (string $path, array $action) {
            self::$routes["DELETE"][$path] = $action;
        }

        public static function Dispatch(string $path, string $method) {
            $method = strtoupper($method);
            
            if (array_key_exists($path, self::$routes[$method])){
                $action = self::$routes[$method][$path];
                $controller = new $action[0]();
                $method = $action[1];

                call_user_func_array([$controller, $method], []);
            }else {
                echo "not found";
            }
        }
    }