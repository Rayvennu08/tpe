<?php
/* Smarty version 4.2.1, created on 2022-10-01 00:40:34
  from 'C:\xampp\htdocs\tpe1\proyectoLibreria\templates\books.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63377062ad3936_21816054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d66c8b92a4a848da9d509c048f46e735dbb11b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe1\\proyectoLibreria\\templates\\books.tpl',
      1 => 1664577493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63377062ad3936_21816054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<table>
    <thead>
        <td>Titulo</td>
        <td>Calificacion</td>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
            <tr>
                <td bgcolor='#D8FE3F'><?php echo $_smarty_tpl->tpl_vars['game']->value->juego_name;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['game']->value->calificacion;?>
</td>
            </tr>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
