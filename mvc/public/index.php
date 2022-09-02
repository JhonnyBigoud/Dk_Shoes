<?php
session_start();
// A mettre avant le HTML.

spl_autoload_register(function ($className) {
    if(file_exists('../controller/' . $className . '.php')) {
        include '../controller/' . $className . '.php';
    }
    if(file_exists('../model/' . $className . '.php')) {
        include '../model/' . $className . '.php';
    }
});

include '../config.php';
include '../routes.php';

$request = $_SERVER["REQUEST_URI"];

foreach($routes as $route => $action) {
    $pregRoute = preg_replace("#\{(.+)\}#", '([0-9a-z-A-Z_-]+)', $route);
    if(preg_match("#^". $pregRoute . "$#", $request) === 1) {
        $action = explode('@', $action);
        $controller = new $action[0]();
        $function = $action[1];

        if($route !== $pregRoute) {
            // On récupère les noms entre {} dans la route et les valeurs correspondantes dans l'url
            // Puis on l'envoi en paramètre de la méthode
            preg_match_all("#\{(.*?)\}#", $route, $keys);
            preg_match_all("#^". $pregRoute . "$#", $request, $values);

            $parameters = array_combine($keys[1], $values[1]);

            return $controller->$function($parameters);
        }
        
        return $controller->$function();
    }
}

// var_dump($request, $pregRoute);
http_response_code(404);