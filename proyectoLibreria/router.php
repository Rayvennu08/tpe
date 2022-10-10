<?php
require_once('app/controllers/controllerGames.php');
require_once('app/controllers/controllerBrands.php');
require_once('app/controllers/controllerAuth.php');

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'login'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

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
        $brandsController = new controllerBrands();
        $brandsController->showBrandList();
    break;

    case "agregar_empresa":
        $brandsController = new controllerBrands();
        $brandsController->addBrand();
    break;

    case 'ver_empresa':
        $id = $params[1];
        $brandsController = new controllerBrands();
        $brandsController->showBrand($id);
    
    case 'ver_juego':
        $id = $params[1];
        $gamesController = new controllerGames();
        $gamesController->showGame($id);
    break;
    
    case 'Mandar_BD':
        $gamesController = new controllerGames();
        $gamesController->saveNewGame();    
    break;
    
    case 'add':
        $gamesController = new controllerGames();
        $gamesController->showFormAddGame();
    break;

    case 'delete':
        $id = $params[1];
        $gamesController = new controllerGames();
        $gamesController->deleteGame($id);
    break;

    case 'modificar':
        $gamesController = new controllerGames();
        $gamesController->updateGame();
    break;
    
    case 'editar':
        $id = $params[1];
        $gamesController = new controllerGames();
        $gamesController->showFormUpdateGame($id);
    break;

    case 'Filtrar':
        $gamesController = new controllerGames();
        $gamesController->filterGamesByBrand();
    break;

    default:
        echo('<h1>Error 404 - Page not found</h1>');
    break;
}