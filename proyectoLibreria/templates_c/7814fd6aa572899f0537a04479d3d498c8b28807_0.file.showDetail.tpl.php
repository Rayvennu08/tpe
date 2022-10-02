<?php
/* Smarty version 4.2.1, created on 2022-10-02 23:45:20
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\showDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633a06702468f7_27953332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7814fd6aa572899f0537a04479d3d498c8b28807' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\showDetail.tpl',
      1 => 1664747115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633a06702468f7_27953332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Videojuego</h5>
    <h6 class="card-subtitle mb-2 text-muted">Empresa</h6>
    <p class="card-text">Aca iria la descripcion del videojuego</p>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
