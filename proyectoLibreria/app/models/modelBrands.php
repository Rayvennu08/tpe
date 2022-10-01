<?php

class brandsModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=listgames;charset=utf8', 'root', '');
    }

    public function getAllBrands(){
        //Conexion a db ya hecha por el constructor de la clase
        
        //Ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare( "SELECT * FROM  brands");
        $query->execute();
        //Obtengo los resultados
        $brands=$query->fetchAll(PDO::FETCH_OBJ);
        return $brands;
    }

    function filterBrand($row, $object, $name) {

        $query = $this->db->prepare("SELECT $row FROM $object WHERE brand_name = '$name'");
        $query->execute();
        $object = $query->fetchAll(PDO::FETCH_OBJ);

        return $object;
    }
}
