<?php
/* Smarty version 4.2.1, created on 2022-10-01 20:08:14
  from 'C:\xampp\htdocs\tpe1\proyectoLibreria\templates\brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6338820e510068_08433912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c578240ee577b6f669ceed6d3e2adf628ea3544' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe1\\proyectoLibreria\\templates\\brands.tpl',
      1 => 1664647692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6338820e510068_08433912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<table>
    <thead>
        <td bgcolor='#BFBFBF' style="font-weight: bold;">Empresas</td>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
            <tr>
                <td bgcolor='#DEB887' style="font-weight: 600;"><a href="<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
</a></td>
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
