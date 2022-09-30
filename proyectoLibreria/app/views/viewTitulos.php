<?php   
require_once ('libs/smarty-master/libs/Smarty.class.php');
class titulosView {
    
    private $smarty;
    public function __construct(){
        //Inicializo Smarty
        $this->smarty = new Smarty(); 
    }

    function showHome(){
        //Asigno variables al tpl Smarty
        $this->smarty->assign('home', "Home");
        $this->smarty->assign('bookList', "Ver libros");

        //Muestro el tpl
        $this->smarty->display('templates/home.tpl');
    }
    
    function showBooks($books){
        $this->smarty->assign('title', "Listado de libros");
        $this->smarty->assign('books', $books);

        $this->smarty->display('templates/books.tpl');

    }

}