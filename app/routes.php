<?php
require_once __DIR__ . '/controllers/MainController.php';

$controller = new MainController();

// Проста маршрутизація
if ($_SERVER['REQUEST_URI'] === '/') {
    $controller->home();
} else {
    http_response_code(404);
    echo "Page not found!";
}
?>
