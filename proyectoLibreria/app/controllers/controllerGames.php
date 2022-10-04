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
    
    public function showGameList() {
        $brands = $this->brandsModel->getAllBrands();
        $games = $this->model->getAllTitles();
        $this->view->showGames($games, $brands);
    }

    function deleteGame($id){
        $this->model->deleteGameById($id);
        header("Location: " . BASE_URL . "gameList");
    }

    /*Funcion para ver un item de la tabla de juegos*/
    function showGame($id){
        $game = $this->model->getGameById($id);
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
        var_dump($_POST);
        $title = $_POST['title'];
        $qualification = $_POST['qualification'];
        $brand = $_POST['brand'];

        if((!empty($title)) && (!empty($qualification)) && (!empty($brand))){
            $this->model->saveRegister($title, $qualification, $brand);
            header("Location: " . BASE_URL . "gameList"); 
        }
        else{
            echo "¡Debe completar los campos correspondientes!";
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