<?php

class modelCharacters{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=brandonbooks;charset=utf8', 'root', '');
    }

    public function getAllCharacters(){
        //Conexion a db ya hecha por el constructor de la clase
        
        //Ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare( "SELECT * FROM  books");
        $query->execute();
        //Obtengo los resultados
        $characters=$query->fetchAll(PDO::FETCH_OBJ);
        return $characters;
    }
}
