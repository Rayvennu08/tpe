<?php
require_once('index.php');
require_once('controllers/controllerTitulos.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

$titulosController = new controllerTitulos();
// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $titulosController->showHome();
        break;

    case 'listado_libros':
        $titulosController->verListadoLibros();
        break;    

    /*case 'list':
        $taskController->showTasks();
        break;
    case 'add':
        $taskController->addTask();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $taskController->deleteTask($id);
        break;*/

    default:
        echo('404 Page not found');
        break;
}