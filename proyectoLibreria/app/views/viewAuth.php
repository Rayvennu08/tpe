<?php
require_once ('libs/smarty-master/libs/Smarty.class.php');

class authView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showLogin($error = null){
            //Asigno variables al tpl Smarty
            $this->smarty->assign('error', $error);
            $this->smarty->assign('login', "Bienvenido, coloque sus datos para ingresar.");
            $this->smarty->assign('email', "Email:");
            $this->smarty->assign('pass', "Password:");
    
    
            //Muestro el tpl
            $this->smarty->display('templates/login.tpl');
        }

}
