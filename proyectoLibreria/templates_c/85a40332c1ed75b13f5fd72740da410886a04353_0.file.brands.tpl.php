<?php
/* Smarty version 4.2.1, created on 2022-10-16 21:00:57
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c54e9b36cd4_48243861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85a40332c1ed75b13f5fd72740da410886a04353' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\brands.tpl',
      1 => 1665946856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c54e9b36cd4_48243861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

<?php if ((isset($_SESSION['USER_ID']))) {?>
    <a href="agregar_empresa" type='button' class='btn btn-primary ml-auto'>Agregar empresa</a>
<?php }?>

<table class="table">
    <thead>
        <tr>
            <th bgcolor='#BFBFBF' style="font-weight: bold;">Empresas</th>
            <th>Ver empresa</th>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
                <th>Eliminar empresa</th>
                <th>Editar empresa</th>
            <?php }?>
        </tr>
    </thead>

    <?php if ((isset($_SESSION['USER_ID']))) {?>
        <div class="alert alert-dark mt-3">
            <p>Para eliminar una empresa primero debe borrar todos los juegos con esa marca. (ESTO ES POR SEGURIDAD DE LA BASE DE DATOS).</p>
        </div>
    <?php }?>
    
    <tbody>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
            <tr>
                <td>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>

                    </p>
                </td>

                <td>
                    <a href="ver_empresa/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
" type='button' class='btn btn-primary ml-auto'>Ver</a>
                </td>

                <?php if ((isset($_SESSION['USER_ID']))) {?>
                    <td>
                        <a href='delete_brand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
'type='button' class="btn btn-danger">Eliminar</button></td>
                    </td>

                    <td>
                        <a href='editar_empresa/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
' type='button' class="btn btn-success">Editar</button>
                    </td>
                <?php }?>
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
