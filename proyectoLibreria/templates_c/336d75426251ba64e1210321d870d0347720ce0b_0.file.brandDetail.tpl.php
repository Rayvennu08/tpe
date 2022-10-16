<?php
/* Smarty version 4.2.1, created on 2022-10-13 20:20:45
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\brandDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634856fd65d938_04248882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336d75426251ba64e1210321d870d0347720ce0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\brandDetail.tpl',
      1 => 1665685224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634856fd65d938_04248882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<div class="card">
    <div class="card-body">
      <h6 class="card-subtitle">Empresa:</h6>
      <h5><?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
®</h5>
    </div>
</div>


<a href="brandList" type="button" class='btn btn-primary ml-auto'>Volver</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
