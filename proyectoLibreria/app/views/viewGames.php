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

    function showGames($games, $brands){
        $this->smarty->assign('titulo', "Tabla de videojuegos");
        $this->smarty->assign('games', $games);
        $this->smarty->assign('brands', $brands);
        // var_dump($brands);
        

        $this->smarty->display('templates/games.tpl');
    }

    function showGame($game, $brand){
        $titulo = "Informacion sobre la obra";
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('game', $game);
        $this->smarty->assign('brands', $brand);

        $this->smarty->display('templates/gameDetail.tpl');
    }

    function showGamesFiltered($games, $brand){
        $titulo = "Lista de juegos por su respectiva empresa: ";

        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('games', $games);
        $this->smarty->assign('brands', $brand);

        $this->smarty->display('templates/filterGames.tpl');
    }

    /*Funcion para mostrar formulario al usuario
    para agregar un videojuego*/
    function showFormAddJuego($brands){
        $accion = "Mandar_BD";
        $titulo = "Alta de videojuego";
        $boton = "Guardar";
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('boton', $boton);
        $this->smarty->assign('accion', $accion);
        $this->smarty->assign('brands', $brands);
        // $this->smarty->assign('empresas', $marcas);

        $this->smarty->display('templates/formAddGame.tpl');
    }

    function showFormUpdateGame($brands, $game, $brandGame){
        $accion = "modificar";
        $titulo = "Modificacion de videojuego";
        $boton = "Modificar";
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('boton', $boton);
        $this->smarty->assign('accion', $accion);
        $this->smarty->assign('empresas', $brands);
        $this->smarty->assign('empresaJuego', $brandGame);
        $this->smarty->assign('juego', $game);
        $this->smarty->display('templates/formAddGame.tpl');
    }
}