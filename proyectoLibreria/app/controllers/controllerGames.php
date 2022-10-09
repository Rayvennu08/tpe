<?php
require_once ('app/models/modelGames.php');
require_once ('app/views/viewGames.php');
require_once ('app/models/modelBrands.php');


class controllerGames {
    private $model;
    private $view;
    private $brandsModel;

    public function __construct() {
        $this->model = new gamesModel();
        $this->view = new gamesView();
        $this->brandsModel = new brandsModel();
    }
    
    /*Funcion para mostrar todos los items de la tabla de games*/
    public function showGameList() {
        $brands = $this->brandsModel->getAllBrands();
        $games = $this->model->getAllTitles();
        $this->view->showGames($games, $brands);
    }

    /*Funcion para eliminar un item de la tabla de games*/
    function deleteGame($id){
        $this->model->deleteGameById($id);
        header("Location: " . BASE_URL . "gameList");
    }

    /*Funcion para ver un item de la tabla de games*/
    function showGame($id){
        $game = $this->model->showGameDescription($id);
        $this->view->showGame($game);
    }

    function showFormAddGame() {
        $brands = $this->brandsModel->getAllBrands();
        $this->view->showFormAddJuego($brands);

        /*$id = $this->model->insertGame($title, $qualification, $brand);*/
    }

    function filterGamesByBrand(){
        $brand = $_POST['brand'];
        $games = $this->model->getGameByIdBrand($brand);
        
        $brand = $this->brandsModel->getAllBrands();
        $this->view->showGamesFiltered($games, $brand);
    }


    function saveNewGame(){
        $title = $_POST['title'];
        $qualification = $_POST['qualification'];
        $brand = $_POST['brand'];

        if((!empty($title)) && (!empty($qualification)) && (!empty($brand))){
            $this->model->saveRegister($title, $qualification, $brand);
            header("Location: " . BASE_URL . "gameList"); 
        }
        else{
            echo "<h2>¡Debe completar los campos correspondientes!</h2>";
            echo "<h3>Regrese a la pagina anterior.</h3>";
        }
    }

    function showFormUpdateGame(){
        $brands = $this->brandsModel->getAllBrands();
        $game = $this->model->getGameById($id);
        $idBrand = $game->id_juego;
        $brandGame = $this->brandsModel->getBrandById($id_brand);
        $this->view->showFormUpdateGame();
    }

}