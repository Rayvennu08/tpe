<?php
require_once ('app/models/modelGames.php');
require_once ('app/views/viewGames.php');
require_once ('app/models/modelBrands.php');
require_once ('app/helpers/helperAuth.php');


class controllerGames {
    private $model;
    private $view;
    private $brandsModel;
    private $helper;

    public function __construct() {
        $this->model = new gamesModel();
        $this->view = new gamesView();
        $this->brandsModel = new brandsModel();

        //Seguridad de la pagina
        $this->helper = new AuthHelper();
    }
    
    /*Funcion para mostrar todos los items de la tabla de games*/
    public function showGameList() {
        $games = $this->model->getAllTitles();
        $brands = $this->brandsModel->getAllBrands();
        $this->helper->checkLoggedIn();

        $this->view->showGames($games, $brands);        
    }

    /*Funcion para eliminar un item de la tabla de games*/
    function deleteGame($id){
        $this->model->deleteGameById($id);
        $this->helper->checkLoggedIn();

        header("Location: " . BASE_URL . "gameList");
    }

    /*Funcion para ver un item de la tabla de games*/
    function showGame($id){
        $this->helper->checkLoggedIn();
        $game = $this->model->showGameDescription($id);
        $this->view->showGame($game);
    }

    function showFormAddGame() {
        $this->helper->userRestrict();
        $brands = $this->brandsModel->getAllBrands();
        $this->view->showFormAddJuego($brands);

        /*$id = $this->model->insertGame($title, $qualification, $brand);*/
    }

    function filterGamesByBrand(){
        $this->helper->checkLoggedIn();
        $brand = $_POST['brand'];
        $games = $this->model->getGameByIdBrand($brand);
        $brandAll = $this->brandsModel->getAllBrands();
        $this->view->showGamesFiltered($games, $brandAll);
    }   


    function saveNewGame(){
        $this->helper->userRestrict();
        $title = $_POST['title'];
        $qualification = $_POST['qualification'];
        $brand = $_POST['brand'];
        $desc = $_POST['sinopsis'];

        if ((!empty($title)) && (!empty($desc)) && (!empty($qualification)) && (!empty($brand))){
            $this->model->saveRegister($title, $desc, $qualification, $brand);
            header("Location: " . BASE_URL . "gameList"); 
        }
        else{
            echo "<h2>¡Debe completar los campos correspondientes!</h2>";
            echo "<h3>Regrese a la pagina anterior.</h3>";
        }
    }

    function updateGame(){
        $this->helper->userRestrict();
        $id = $_POST['id'];
        $title = $_POST['title'];
        $desc = $_POST['sinopsis'];
        $qualification = $_POST['qualification'];
        $brand = $_POST['brand'];
        if ((!empty($title)) && (!empty($desc)) && (!empty($qualification)) && (!empty($brand))) {
            $this->model->updateGame($title, $desc, $qualification, $brand, $id); //cambio $game->$title
            header("Location: " . BASE_URL . "gameList");
        }
        else {
            echo "DEBE COMPLETAR LOS CAMPOS CORRESPONDIENTES!!!";
        }
    }

    function showFormUpdateGame($id){
        $this->helper->checkLoggedIn();
        $brands = $this->brandsModel->getAllBrands();
        $game = $this->model->getGameById($id);
        $idBrand = $game->id_brand;
        $brandGame = $this->brandsModel->getBrandById($idBrand);
        $this->view->showFormUpdateGame($brands, $game, $brandGame);
    }
}