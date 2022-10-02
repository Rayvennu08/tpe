<?php
/* Smarty version 4.2.1, created on 2022-10-03 00:17:03
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\form_game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633a0ddfcba7b5_62486047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aa63a5f4393a7deef23ec968cbae483710e4fc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\form_game.tpl',
      1 => 1664749022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633a0ddfcba7b5_62486047 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Título</label>
                <input name="title" type="text" class="form-control">
            </div>
        </div>
        
        <div class="col-3">
            <div class="form-group">
                <label>Calificacion</label>
                <input name="qualification" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Empresa</label>
        <textarea name="brand" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
