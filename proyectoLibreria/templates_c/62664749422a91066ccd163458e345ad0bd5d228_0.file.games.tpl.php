<?php
/* Smarty version 4.2.1, created on 2022-10-04 14:13:06
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\games.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c23527aee92_53230476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62664749422a91066ccd163458e345ad0bd5d228' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\games.tpl',
      1 => 1664884748,
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
function content_633c23527aee92_53230476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

<div>
    <form action="Filtrar" method="POST">
        <input type="hidden" name="brand" id="">
        <select name="brand" id="brand">
            <option value="0">Seleccione la empresa</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit" class='btn btn-primary ml-auto'>Filtrar</button>
    </form> 
</div>
<div>
    <a href="add" type='button' class='btn btn-primary ml-auto'>Agregar videojuego</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:form_game.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-striped">
    <thead bgcolor='#BFBFBF'>
        <td style="font-weight: bold;">Titulo</td>
        <td style="font-weight: bold;">Calificacion</td>
        <td style="font-weight: bold;">Empresa</td>
        <td style="font-weight: bold;">Eliminar item</td>
        <td style="font-weight: bold;">Ver item</td>
        <td style="font-weight: bold;">Editar item</td>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
            <tr class="table-info">
                <td style="font-weight: 600;"><?php echo $_smarty_tpl->tpl_vars['game']->value->juego_name;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['game']->value->calificacion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['game']->value->brand_name;?>
</td>
                <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
'type='button' class="btn btn-danger">Eliminar</button></td>
                <td>
                    <a href="ver_juego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" type='button' class='btn btn-primary ml-auto'>VER</a>
                </td>
                <td>
                    <a href='editar/<?php echo $_smarty_tpl->tpl_vars['game']->value->{$_smarty_tpl->tpl_vars['id']->value};?>
' type='button' class="btn btn-success">Editar</button>
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
