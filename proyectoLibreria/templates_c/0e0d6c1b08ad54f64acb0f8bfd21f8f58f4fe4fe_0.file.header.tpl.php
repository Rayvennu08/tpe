<?php
/* Smarty version 4.2.1, created on 2022-10-11 09:05:07
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634515a3532c72_80067110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0d6c1b08ad54f64acb0f8bfd21f8f58f4fe4fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\header.tpl',
      1 => 1665471905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634515a3532c72_80067110 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?php echo BASE_URL;?>
">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Empresas y videojuegos</title>
        <!--Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body class="container">
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="brandList">Empresas</a>
                    <a class="navbar-brand" href="gameList">Ver juegos</a>
                    <?php if (!(isset($_SESSION['USER_ID']))) {?>
                        <a class="navbar-brand" href="login">Login</a>
                    <?php } else { ?> 
                        <a class="navbar-brand" href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
                    <?php }?>
                </div>
            </nav>
        </header>
        <!-- inicio main container -->
        <div><?php }
}
