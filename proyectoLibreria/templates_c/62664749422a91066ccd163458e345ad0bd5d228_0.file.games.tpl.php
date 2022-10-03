<?php
/* Smarty version 4.2.1, created on 2022-10-03 02:59:45
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\games.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633a3401a37ae0_62695098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62664749422a91066ccd163458e345ad0bd5d228' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\games.tpl',
      1 => 1664758784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_game.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633a3401a37ae0_62695098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

<?php $_smarty_tpl->_subTemplateRender("file:form_game.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-striped">
    <thead bgcolor='#BFBFBF'>
        <td style="font-weight: bold;">Titulo</td>
        <td style="font-weight: bold;">Calificacion</td>
        <td style="font-weight: bold;">Empresa</td>
        <td style="font-weight: bold;">Finalizar item</td>
        <td style="font-weight: bold;">Borrar item</td>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
            <li class='
                list-group-item d-flex justify-content-between align-items-center
                <?php if ($_smarty_tpl->tpl_vars['game']->value->finalizado) {?> finalizado <?php }?>
            '>
            
            <tr class="table-info">
                <td style="font-weight: 600;"><?php echo $_smarty_tpl->tpl_vars['game']->value->juego_name;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['game']->value->calificacion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['game']->value->brand_name;?>
</td>
                <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
'type='button' class="btn btn-success">Finalizar</button></td>
                <td>
                    <?php if (!$_smarty_tpl->tpl_vars['game']->value->finalizado) {?>
                        <a href='finalize/<?php echo $_smarty_tpl->tpl_vars['game']->value->{$_smarty_tpl->tpl_vars['id']->value};?>
' type='button' class="btn btn-danger">Eliminar</button>
                    <?php }?>
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
