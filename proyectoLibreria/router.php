<?php
require_once('app/controllers/controllerGames.php');
require_once('app/controllers/controllerBrands.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'brandList'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$gamesController = new controllerGames();
$brandsController = new controllerBrands();
//Tabla de ruteo
switch ($params[0]) {
    case 'home':
        $gamesController->showHome();
        break;

    case 'gameList':
        $gamesController->showGameList();
        break;
        
    case 'brandList':
        $brandsController->showBrandList();
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