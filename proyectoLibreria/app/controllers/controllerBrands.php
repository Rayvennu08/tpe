<?php
require_once('app/models/modelBrands.php');
require_once('app/views/viewBrands.php');

class controllerBrands{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new brandsModel();
        $this->view = new brandsView();
    }

    public function showBrandList(){
        $brands = $this->model->getAllBrands();
        $this->view->showBrands($brands);
    }
}