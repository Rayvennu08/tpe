<?php
/* Smarty version 4.2.1, created on 2022-10-11 09:08:33
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\games.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63451671682ca8_45787954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62664749422a91066ccd163458e345ad0bd5d228' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\games.tpl',
      1 => 1665472110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63451671682ca8_45787954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<div>
    <p>↶ Pulsa aqui para insertar tu videojuego favorito</p>
    <a href="add" type='button' class='btn btn-primary ml-auto'>Agregar videojuego</a>
</div>

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


<div class="tabla">
    <table class="table table-striped">
        <thead bgcolor='#BFBFBF'>
            <th>Titulo</th>
            <th>Calificacion</th>
            <th>Empresa</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->juego_name;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->calificacion;?>
</td>
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
                    <td>
                        <a href="ver_juego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" type='button' class='btn btn-primary ml-auto'>Ver</a>
                    </td>
                    <?php if ((isset($_SESSION['USER_ID']))) {?>

                        <td>
                            <a href="delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" type='button' class="btn btn-danger">Eliminar</a>
                        </td>
                        
                        <td>
                            <a href="editar/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" type='button' class="btn btn-success">Editar</a>
                        </td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
