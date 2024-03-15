<?php

require __DIR__ . '/../vendor/autoload.php';

$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/':
        require '../views/template.php';
        echo 'Home';
        break;
    case '/about':
        echo 'About';
        break;
    default:
        http_response_code(404);
        echo 'Not Found';
        break;
}
