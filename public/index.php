<?php

require __DIR__ . '/../vendor/autoload.php';

$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/':
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

echo 'Hello World!';
