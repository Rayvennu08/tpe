<?php
require_once ('app/models/modelTitulos.php');
require_once ('app/views/viewTitulos.php');


class controllerTitulos {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new titulosModel();
        $this->view = new titulosView();
    }

    public function showBookList() {
        $books = $this->model->getAllTitles();
        $this->view->showBooks($books);
    }

    public function showHome(){
        $this->view->showHome();
    }

}