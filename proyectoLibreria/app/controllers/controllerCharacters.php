<?php
require_once ('app/models/modelCharacters.php');

class controllerCharacters{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new characterModel();
        $this->view = new characterView();
    }

    public function showCharacterList(){
        $characters = $this->model->getAllCharacters();
        $this->view->showCharacters($character);
    }
}