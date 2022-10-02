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

    function showLogin(){
        //Asigno variables al tpl Smarty
        $this->smarty->assign('login', "Bienvenido, coloque sus datos para ingresar.");
        $this->smarty->assign('user', "Username:");
        $this->smarty->assign('pass', "Password:");


        //Muestro el tpl
        $this->smarty->display('templates/login.tpl');
    }

    function filterBrand($games){
        $this->smarty->assign('games', $games);

        $this->smarty->display('templates/filterGames.tpl');
    }
    
}