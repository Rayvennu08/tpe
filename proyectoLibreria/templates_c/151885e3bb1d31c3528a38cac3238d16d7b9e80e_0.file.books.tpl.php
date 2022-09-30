<?php
/* Smarty version 4.2.1, created on 2022-09-30 14:36:12
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\books.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6336e2bca5f086_76103586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '151885e3bb1d31c3528a38cac3238d16d7b9e80e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\books.tpl',
      1 => 1664541371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6336e2bca5f086_76103586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<table>
    <thead>
        <td>Titulo</td>
        <td>Sinopsis</td>
        <td>Género</td>
        <td>Fecha de publicacion</td>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
            <tr>
                <td bgcolor='#D8FE3F'><?php echo $_smarty_tpl->tpl_vars['book']->value->Titulo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value->Sinopsis;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value->Genero;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value->Fecha_pub;?>
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
