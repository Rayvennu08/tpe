<?php
/* Smarty version 4.2.1, created on 2022-10-02 22:56:28
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\app\models\modelBrands.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6339fafc0622b4_67973326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ab9e1ebc48f07c9835c04bd354196408fdf20e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\app\\models\\modelBrands.php',
      1 => 1664735088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6339fafc0622b4_67973326 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>


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
        $consulta = $query->fetchAll(PDO::FETCH_OBJ);

        return $consulta;
    }
}
<?php }
}
