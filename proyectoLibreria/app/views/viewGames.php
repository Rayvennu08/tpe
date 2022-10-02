<?php   
require_once ('libs/smarty-master/libs/Smarty.class.php');
class gamesView {
    
    private $smarty;
    public function __construct(){
        //Inicializo Smarty
        $this->smarty = new Smarty(); 
    }

    function showLogin(){
        //Asigno variables al tpl Smarty
        $this->smarty->assign('Login', "Bienvenido, ingrese sus datos para ingresar.");
        $this->smarty->assign('user', "Username:");
        $this->smarty->assign('pass', "Password:");


        //Muestro el tpl
        $this->smarty->display('templates/login.tpl');
    }

    function showGames($games){
        $this->smarty->assign('title', "Tabla de videojuegos");
        $this->smarty->assign('games', $games);

        $this->smarty->display('templates/games.tpl');
    }
}