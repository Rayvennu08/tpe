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
    
    public function showHome(){
        $this->view->showHome();
    }
    public function showGameList() {
        $games = $this->model->getAllTitles();
        $this->view->showGames($games);
    }
}