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

    function showGameDescription($id){
        $query = $this->db->prepare("SELECT id_juego, juego_name, sinopsis, calificacion, id_brand FROM games WHERE id_juego = ?");
        $query->execute([$id]);

        // Obtengo el resultado
        $showGame = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objeto
        
        return $showGame;
    }

    function getGameByIdBrand($id){
        $query = $this->db->prepare("SELECT juego_name, calificacion, id_brand FROM games WHERE id_brand = ?");
        $query->execute([$id]);

        $games = $query->fetchAll(PDO ::FETCH_OBJ);
        return $games;
    }

    /*Inserto un item en la base de datos*/
    public function saveRegister($title, $desc, $qualification, $id_brand){
        $query = $this->db->prepare("INSERT INTO games (juego_name, sinopsis, calificacion, id_brand) VALUES (?, ?, ?, ?)");
        $query->execute([$title, $desc, $qualification, $id_brand]);
    }

    function updateGame($game, $desc, $qualification, $brand, $id) {
        $query = $this->db->prepare("UPDATE games SET juego_name = ?, sinopsis = ?, calificacion = ?, id_brand = ? WHERE id_juego = ?");
        $query->execute([$game, $desc, $qualification, $brand, $id]);
    }    

    /*Elimino un juego por su id */
    public function deleteGameById($id){
        $query = $this->db->prepare('DELETE FROM games WHERE id_juego = ?');
        $query->execute([$id]);
    }
}