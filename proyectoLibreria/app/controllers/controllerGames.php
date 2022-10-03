<?php
require_once ('app/models/modelGames.php');
require_once ('app/views/viewGames.php');


class controllerGames {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new gamesModel();
        $this->view = new gamesView();
    }
    
    public function showGameList() {
        $games = $this->model->getAllTitles();
        $this->view->showGames($games);
    }

    function deleteGame($id){
        $this->model->deleteGameById($id);
        header("Location: " . BASE_URL);
    }

    function addGame() {
        // Validacion de entrada de datos


        $title = $_POST["title"];
        $qualification = $_POST["qualification"];
        $brand = $_POST["brand"];

        $id = $this->model->insertGame($title, $qualification, $brand);

        header("Location: " . BASE_URL); 
    }

    function finalizeGame($id){
        $this->model->finalize($id);
        header("Location: " . BASE_URL); 
    }
}