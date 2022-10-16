<?php
require_once ('libs/smarty-master/libs/Smarty.class.php');
class brandsView{

    private $smarty;
    
    public function __construct(){
        //Inicializo Smarty
        $this->smarty = new Smarty(); 
    }

    function showBrands($brands){
        $this->smarty->assign('title', "Lista de empresas");
        $this->smarty->assign('brands', $brands);
        
        $this->smarty->display('templates/brands.tpl');
    }

    
    function showBrand($id){
        $titulo = "Informacion sobre la empresa";

        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('brand', $id);

        $this->smarty->display('brandDetail.tpl');
    }

    function showFormModifyBrand($brand){
        $accion = "modificar_empresa";
        $titulo = "Modificar empresa";
        $boton = "Actualizar";
        $this->smarty->assign('accion', $accion);
        $this->smarty->assign('brand', $brand);
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('boton', $boton);
        $this->smarty->display('formAddBrands.tpl');  
    }
    
    function showFormAddBrand(){
        $accion = "save_brand";
        $titulo = "Agregar empresa";
        $boton = "Guardar";
        $this->smarty->assign('accion', $accion);
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('boton', $boton);
        // $this->smarty->assign('empresas', $brands);
        $this->smarty->display('formAddBrands.tpl');
    }
        
}