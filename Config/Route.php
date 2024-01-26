<?php
namespace Config;

class Route
{
    public static $routes = [];

    public static function add($reqmethod, $path, $controller, $method){
        self::$routes[] = [
            'reqmethod' => $reqmethod,
            'path' => $path,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public static function run(){
        $path = "/";

        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $reqmethod = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($route['path'] == $path && $route['reqmethod'] == $reqmethod) {
                $controller = new $route['controller'];
                $method = $route['method'];
                $controller->$method();

                return;
            }
        }

        http_response_code(404);
        echo "Controller not found";
    }
    
}
