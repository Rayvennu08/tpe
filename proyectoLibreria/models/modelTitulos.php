<?php
class titulosModel{
    private $db;
    private function connect(){

        $db = new PDO('mysql:host=localhost;'
        .'dbname=brandonbooks;charset=utf8'
        , 'root', '');
        return $db;
    }

    function getAll(){
        $sentencia = $this->db->prepare( "SELECT * FROM  books");
        $sentencia->execute();
        $titulos=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $titulos;
    }

    function getById($id){
        $sentencia = $db->prepare( "SELECT * FROM Titulo WHERE id=?");
        $sentencia->execute([$id]);
        $titulo=$sentencia->fetch(PDO::FETCH_OBJ);
        return $titulo;
    }

    public function __construct(){
        $this->db=$this->connect();
    }

}