<?php
require_once 'models/modelTitulos.php';
require_once 'views/viewTitulos.php';


class controllerTitulos {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new titulosModel();
        $this->view = new titulosView();
    }

    public function verListadoLibros() {
        $libros = $this->model->getAll();
        $this->view->verLibros($libros);
    }

    public function showHome(){
        $this->view->showHome();
    }
   /* 
    function addTask() {
        // TODO: validar entrada de datos

        $title = $_POST['title'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];

        $id = $this->model->insertTask($title, $description, $priority);

        header("Location: " . BASE_URL); 
    }
   
    function deleteTask($id) {
        $this->model->deleteTaskById($id);
        header("Location: " . BASE_URL);
    }
*/
}