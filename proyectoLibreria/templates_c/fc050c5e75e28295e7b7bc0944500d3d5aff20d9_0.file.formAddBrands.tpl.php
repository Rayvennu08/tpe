<?php
/* Smarty version 4.2.1, created on 2022-10-10 10:16:59
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\formAddBrands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6343d4fb51d613_20606557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc050c5e75e28295e7b7bc0944500d3d5aff20d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\formAddBrands.tpl',
      1 => 1665389818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6343d4fb51d613_20606557 (Smarty_Internal_Template $_smarty_tpl) {
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
            <label for="brand">Empresa:</label>
            <input type="text" name="brand" id="">
        </div>
                
        <div>
            <button type="submit" class='btn btn-primary ml-auto'><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</button>
            <a href="brands" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
        </div>
    
        <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value == "editar") {?>
        
            <div>
                <label for="brand">Empresa:</label>
                <input type="hidden" name="brand" id="">
                
            </div>
            <div>
                <button type="submit" class='btn btn-primary ml-auto'><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</button>
                <a href="games" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
            </div>
    <?php }?>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
