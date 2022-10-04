<?php
class gamesModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=listajuegos;charset=utf8', 'root', '');
    }

    /* Devuelve la lista de juegos completa.*/
    public function getAllTitles(){
        $query = $this->db->prepare( "SELECT * FROM  games");
        $query->execute();

        $titulos=$query->fetchAll(PDO::FETCH_OBJ);
        
        return $titulos;
    }

    function getGameById($id){
        $query = $this->db->prepare("SELECT id_juego, juego_name, calificacion, brand_name FROM games WHERE id_juego = ?");
        $query->execute([$id]);

        // Obtengo el resultado
        $game = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objeto
        
        return $game;
    }

    function getGameByIdBrand($id){
        $query = $this->db->prepare("SELECT juego_name, calificacion, id_brand FROM games WHERE id_brand = ?");
        $query->execute([$id]);

        $games = $query->fetchAll(PDO ::FETCH_OBJ);
        return $games;
    }

    /*Inserto un item en la base de datos*/
    public function saveRegister($title, $qualification, $id_brand){
        $query = $this->db->prepare("INSERT INTO games (juego_name, calificacion, id_brand) VALUES (?, ?, ?)");
        $query->execute([$title, $qualification, $id_brand]);
    }

    /*Inserta un juego en la base de datos.*/
    /*public function insertGame($title, $qualification, $brand) {
        $query = $this->db->prepare("INSERT INTO games (juego_name, calificacion, brand_name) VALUES (?, ?, ?)");
        $query->execute([$title, $qualification, $brand]);

        return $this->db->lastInsertId();
    }*/

    /*Elimino un juego por su id */
    public function deleteGameById($id){
        $query = $this->db->prepare('DELETE FROM games WHERE id_juego = ?');
        $query->execute([$id]);
    }
}