<?php
/* Smarty version 4.2.1, created on 2022-10-01 20:20:11
  from 'C:\xampp\htdocs\tpe1\proyectoLibreria\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633884db2ea486_43575769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce6fc751a45002dddbda6df5118798c1bce72f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe1\\proyectoLibreria\\templates\\home.tpl',
      1 => 1664648409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633884db2ea486_43575769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</p>

<form action='post'>
    <label for=''><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</label> 
    <input type="text"> 
    <label for=''><?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</label> 
    <input type="password"> 
    <button class='button'>Login</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
