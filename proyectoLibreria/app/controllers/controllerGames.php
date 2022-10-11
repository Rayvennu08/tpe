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
        $this->helper->checkLoggedIn();
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
        $this->helper->checkLoggedIn();

        $brand = $this->brandsModel->getAllBrands();
        $this->view->showGamesFiltered($games, $brand);
    }


    function saveNewGame(){
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
        $id = $_POST['id'];
        $title = $_POST['title'];
        $desc = $_POST['sinopsis'];
        $qualification = $_POST['qualification'];
        $brand = $_POST['brand'];
        if ((!empty($title)) && (!empty($desc)) && (!empty($qualification)) && (!empty($brand))) {
            $this->model->updateGame($game, $desc, $qualification, $brand, $id);
            header("Location: " . BASE_URL . "gameList");
        }
        else {
            echo "DEBE COMPLETAR LOS CAMPOS CORRESPONDIENTES!!!";
        }
    }

    function showFormUpdateGame($id){
        $brands = $this->brandsModel->getAllBrands();
        $game = $this->model->getGameById($id);
        $idBrand = $game->id_brand;
        $brandGame = $this->brandsModel->getBrandById($idBrand);
        $this->view->showFormUpdateGame($brands, $game, $brandGame);
    }
}