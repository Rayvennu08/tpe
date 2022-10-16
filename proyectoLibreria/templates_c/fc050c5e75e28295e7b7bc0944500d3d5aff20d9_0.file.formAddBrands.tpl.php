<?php
/* Smarty version 4.2.1, created on 2022-10-15 14:38:57
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\formAddBrands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634aa9e1a1b383_30821602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc050c5e75e28295e7b7bc0944500d3d5aff20d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\formAddBrands.tpl',
      1 => 1665837529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634aa9e1a1b383_30821602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<form action="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
" method="POST">
    <?php if ($_smarty_tpl->tpl_vars['accion']->value == "save_brand") {?>
        <div>
            <input type="text" name="id" id="" value="" hidden>
        </div>
    
        <div>
            <label for="brand">Empresa:</label>
            <input type="text" name="brand" id="">

        </div>
                
        <div>
            <button type="submit" class='btn btn-primary ml-auto'><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</button>
            <a href="brandList" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
        </div>
    
        <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value == "modificar_empresa") {?>
            <div>
            <input type="text" name="id" id="" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
" hidden>
            </div>
            <div>
                <label for="brand">Empresa:</label>
                <input type="text" name="brand" id="" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
">
            </div>
            <div>
                <button type="submit" class='btn btn-primary ml-auto'><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</button>
                <a href="brandList" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
            </div>
    <?php }?>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
