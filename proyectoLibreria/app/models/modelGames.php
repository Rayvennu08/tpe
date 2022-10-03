<?php
class gamesModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=listgames;charset=utf8', 'root', '');
    }

    /* Devuelve la lista de juegos completa.*/
    public function getAllTitles(){
        $query = $this->db->prepare( "SELECT * FROM  games");
        $query->execute();
        $titulos=$query->fetchAll(PDO::FETCH_OBJ);
        return $titulos;
    }

    /*function getById($id){
        $query = $this->db->prepare( "SELECT * FROM juego_name WHERE id=?");
        $query->execute([$id]);
        $title=$query->fetch(PDO::FETCH_OBJ);
        return $title;
    }*/

    /*Inserta un juego en la base de datos.*/
    public function insertGame($title, $qualification, $brand) {
        $query = $this->db->prepare("INSERT INTO games (juego_name, calificacion, brand_name) VALUES (?, ?, ?)");
        $query->execute([$title, $qualification, $brand]);

        return $this->db->lastInsertId();
    }

    /*Elimino un juego por su id */
    public function deleteGameById($id){
        $query = $this->db->prepare('DELETE FROM games WHERE id_juego = ?');
        $query->execute([$id]);
    }

    public function finalize(){
        $query = $this->db->prepare('UPDATE games SET finalizado = 1 WHERE id = ?');
        $query->execute([$id]);
    }
}