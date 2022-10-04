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
    case 'login':
            $brandsController->showLoginSite();
        break;

    case 'gameList':
            $gamesController->showGameList();
        break;
        
    case 'brandList':
            $brandsController->showBrandList();
        break;
    
    case 'ver_juego':
        $id = $params[1];
        $gamesController->showGame($id);
        break;
    
    case 'Mandar_BD':
        $gamesController->saveNewGame();
        break;
    
    case 'delete':
        $id = $params[1];
        $gamesController->deleteGame($id);
    break;

    case 'editar':
        $gamesController->showFormUpdateGame();
        break;

    case 'add':
            $gamesController->showFormAddGame();
        break;

    /*case 'filtrado':
            $brandsController->filterBrands($params[1]);
        break;*/

        case 'Filtrar':
            $gamesController->filterGamesByBrand();
        break;
    /*
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $taskController->deleteTask($id);
        break;
    */

    default:
        echo('<h1>Error 404 - Page not found</h1>');
        break;
}