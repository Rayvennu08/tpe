<?php
class gamesModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=listgames;charset=utf8', 'root', '');
    }

    function getAllTitles(){
        $query = $this->db->prepare( "SELECT * FROM  games");
        $query->execute();
        $titulos=$query->fetchAll(PDO::FETCH_OBJ);
        return $titulos;
    }

    function getById($id){
        $query = $db->prepare( "SELECT * FROM juego_name WHERE id=?");
        $query->execute([$id]);
        $title=$query->fetch(PDO::FETCH_OBJ);
        return $title;
    }

}