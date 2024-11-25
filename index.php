<?php
require_once 'model.php';
require_once 'controllers.php';

// Front controller
$requestUri = strtok($_SERVER['REQUEST_URI'], '?'); // Ignore les paramètres de query string

if ($requestUri === '/' || $requestUri === '/list') {
    list_action();
} elseif (preg_match('/^\/show\/(\d+)$/', $requestUri, $matches)) {
    show_action((int)$matches[1]);
} elseif ($requestUri === '/create') {
    create_action();
} elseif (preg_match('/^\/edit\/(\d+)$/', $requestUri, $matches)) {
    edit_action((int)$matches[1]);
} elseif (preg_match('/^\/delete\/(\d+)$/', $requestUri, $matches)) {
    delete_action((int)$matches[1]);
} else {
    http_response_code(404);
    echo "Page not found";
}