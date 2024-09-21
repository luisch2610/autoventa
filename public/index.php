<?php
require_once __DIR__ . '/../controllers/VehiculoController.php';
require_once __DIR__ . '/../controllers/MarcaController.php';
require_once __DIR__ . '/../controllers/ModeloController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Vehiculo';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controller = new $controllerName();

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Acción no encontrada";
}