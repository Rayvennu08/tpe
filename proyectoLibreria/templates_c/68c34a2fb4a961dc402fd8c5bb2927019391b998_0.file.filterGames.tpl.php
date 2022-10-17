<?php
/* Smarty version 4.2.1, created on 2022-10-17 03:05:40
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\filterGames.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634caa64bdb106_90300669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68c34a2fb4a961dc402fd8c5bb2927019391b998' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\filterGames.tpl',
      1 => 1665968739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634caa64bdb106_90300669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <form action="Filtrar" method="POST">
        <input type="hidden" name="brand" id="">
        <select name="brand" id="brand">
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

<table class="table table-striped">
    <thead bgcolor='#BFBFBF'>
        <td style="font-weight: bold;">Empresa</td>
        <td style="font-weight: bold;">Titulo</td>
        <td style="font-weight: bold;">Calificacion</td>
        <th>Ver item</th>
        <?php if ((isset($_SESSION['USER_ID']))) {?>
            <th>Eliminar item</th>
            <th>Editar item</th>
        <?php }?>
    </thead>

    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
                <tr class="table-info">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['brand']->value->id_brand == $_smarty_tpl->tpl_vars['game']->value->id_brand) {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
</td>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->juego_name;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->calificacion;?>
</td>
                    <?php if ((isset($_SESSION['USER_ID']))) {?>
                        <td>                        
                            <a href="/ver_juego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" type='button' class='btn btn-primary ml-auto'>Ver</a>
                        </td>
                        <td>
                            <a href="delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" type='button' class="btn btn-danger">Eliminar</a>
                        </td>
                        
                        <td>
                            <a href="editar/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" type='button' class="btn btn-success">Editar</a>
                        </td>
                    <?php } else { ?>
                        <td>                        
                            <a href="ver_juego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" type='button' class='btn btn-primary ml-auto'>Ver</a>
                        </td>
                    <?php }?>
                </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </tbody>
</table>

<a href="gameList" type="button" class='btn btn-primary ml-auto'>Volver</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
