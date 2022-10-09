<?php
require_once('app/controllers/controllerGames.php');
require_once('app/controllers/controllerBrands.php');
require_once('app/controllers/controllerAuth.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'login'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$gamesController = new controllerGames();
$brandsController = new controllerBrands();

//Tabla de ruteo
switch ($params[0]) {
    case 'login':
        $authController = new controllerAuth();
        $authController->showLoginSite();
    break;

    case 'validate':
        $authController = new controllerAuth();
        $authController->validateUser();
    break;

    case 'logout':
        $authController = new controllerAuth();
        $authController->logout();
    break;
    
    case 'gameList':
            $gamesController = new controllerGames();
            $gamesController->showGameList();
        break;
        
    case 'brandList':
            $brandsController->showBrandList();
        break;
    
    case 'ver_juego':
        $id = $params[1];
        $gamesController = new controllerGames();
        $gamesController->showGame($id);
    break;
    
    case 'Mandar_BD':
        $gamesController = new controllerGames();
        $gamesController->saveNewGame();    
    break;
    
    case 'delete':
        $id = $params[1];
        $gamesController = new controllerGames();
        $gamesController->deleteGame($id);
    break;

    case 'editar':
        $gamesController = new controllerGames();
        $gamesController->showFormUpdateGame();
        break;

    case 'add':
            $gamesController = new controllerGames();
            $gamesController->showFormAddGame();
        break;

        case 'Filtrar':
            $gamesController = new controllerGames();
            $gamesController->filterGamesByBrand();
        break;
        
    /*case 'filtrado':
            $brandsController->filterBrands($params[1]);
        break;*/

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