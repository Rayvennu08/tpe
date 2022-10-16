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

    function showBrandList(){
        $this->helper->checkLoggedIn();
        $brands = $this->model->getAllBrands();
        $this->view->showBrands($brands);

    }
    
    function showBrand($id){
        $this->helper->checkLoggedIn();
        $brand = $this->model->getBrandById($id);
        $this->view->showBrand($brand);
    }

    function showFormUpdateBrand($id){
        $this->helper->checkLoggedIn();
        $brand = $this->model->getBrandById($id);
        $this->view->showFormModifyBrand($brand);
    }

    function updateBrand(){
        $this->helper->checkLoggedIn();
        $id = $_POST['id'];
        $brand = $_POST['brand'];
        if(!empty($brand)){
            $this->model->updateBrand($brand, $id);
            header("Location: " . BASE_URL . "brandList");
        }
        else {
            echo "DEBE COMPLETAR LOS CAMPOS CORRESPONDIENTES!";
        }
    }

    function saveNewBrand(){
        $this->helper->userRestrict();

        $brand = $_POST['brand'];
        if (!empty($brand)){
            $this->model->saveBrand($brand);
            header("Location: " . BASE_URL . "brandList");
        }
        else{
            echo "DEBE COMPLETAR LOS CAMPOS CORRESPONDIENTES!";
        }
    }
    
    public function addBrand(){
        $this->helper->userRestrict();
        $this->view->showFormAddBrand();
    }
    
    function showFormAddBrands(){
        session_start();
        $brands = $this->model->getAllBrands();
        $this->view->showFormAddBrand($brands);
    }

    function deleteBrand($id){
        $this->helper->userRestrict();
        $this->model->deleteBrandById($id);
        header("Location: " . BASE_URL . "brandList");
    }

}