<?php
class titulosModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=brandonbooks;charset=utf8', 'root', '');
    }

    function getAllTitles(){
        $query = $this->db->prepare( "SELECT * FROM  books");
        $query->execute();
        $titulos=$query->fetchAll(PDO::FETCH_OBJ);
        return $titulos;
    }

    function getById($id){
        $query = $db->prepare( "SELECT * FROM Titulo WHERE id=?");
        $query->execute([$id]);
        $title=$query->fetch(PDO::FETCH_OBJ);
        return $title;
    }

}