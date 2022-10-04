<?php
/* Smarty version 4.2.1, created on 2022-10-04 14:27:00
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\formAddGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c26943aefb2_23235631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '153768ebfa83f8e8ed032027e549f42865639972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\formAddGame.tpl',
      1 => 1664883315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_633c26943aefb2_23235631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<form action="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
" method="POST">
    <?php if ($_smarty_tpl->tpl_vars['accion']->value == "Mandar_BD") {?>
        <div>
            <input type="text" name="id" id="" value="" hidden>
        </div>
        <div>
            <label for="title">Videojuego:</label>
            <input type="text" name="title" id="" value="">
        </div>
        <div>
            <label for="qualification">Calificacion:</label>
            <input type="text" name="qualification" id="" value="">
        </div>
        <div>
            <label for="brand">Empresa:</label>
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
        </div>
                
        <div>
            <button type="submit" class='btn btn-primary ml-auto'><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</button>
            <a href="gameList" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value == "editar") {?>
        <div>
            <input type="text" name="id" id="" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" hidden>
        </div>

        <div>
            <label for="title">Videojuego:</label>
            <input type="text" name="title" id="" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->juego_name;?>
">
        </div>

        <div>
            <label for="qualification">Calificacion:</label>
            <input type="text" name="qualification" id="" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->calificacion;?>
">
        </div>

        <div>
            <label for="genero">Empresa:</label>
            <input type="hidden" name="brand" id="">
            <select name="brand" id="brand">
                <option value="<?php echo $_smarty_tpl->tpl_vars['brandGame']->value->id_brand;?>
"><?php echo $_smarty_tpl->tpl_vars['brandGame']->value->brand_name;?>
</option>
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
        </div>

        <div>
            <button type="submit" class='btn btn-primary ml-auto'><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</button>
            <a href="gameList" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
        </div>
            
    <?php }?>


</form><?php }
}
