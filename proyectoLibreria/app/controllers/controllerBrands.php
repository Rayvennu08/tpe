<?php
require_once('app/models/modelBrands.php');
require_once('app/views/viewBrands.php');
require_once ('app/helpers/helperAuth.php');

class controllerBrands{
    private $model;
    private $view;
    private $helper;

    public function __construct(){
        $this->model = new brandsModel();
        $this->view = new brandsView();

        //Seguridad de la pagina
        $this->helper = new AuthHelper();
    }

    public function showBrandList(){
        $brands = $this->model->getAllBrands();

        $this->view->showBrands($brands);
    }
    
    public function showBrand(){
        
    }

    /*public function filterBrands($name){
        $games = $this->model->filterBrand("*", "games", $name);
        $this->view->filterBrand($games);
    }*/

    public function addBrand(){
        $brands = $this->model->getAllBrands();
        $this->view->showFormAddBrand($brands);
    }
}