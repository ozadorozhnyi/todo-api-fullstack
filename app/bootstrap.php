<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helpers.php';

$accept_application_json = false;
$request_headers = getallheaders();

$routes_file = ROUTES_PATH."/web.php";
if (array_key_exists('Accept', $request_headers)) {
    if ($request_headers['Accept'] == 'application/json') {
        $accept_application_json = true;
        $routes_file = ROUTES_PATH."/api.php";
    }
}
require_once $routes_file;

$action = $_GET['action'];
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if (array_key_exists($action, $routes_list)) {
    list($controller_file, $method) = explode('::', $routes_list[$action]);
    $controller_file_path = CONTROLLERS_PATH."/{$controller_file}.php";
    if (is_readable($controller_file_path)) {
        require_once $controller_file_path;
        list(, $controller_class) = explode('/', $controller_file);
        $controller = new $controller_class();
        $controller->$method();
    } else {
        // no controller file
    }
} else {
    // no route found
}
