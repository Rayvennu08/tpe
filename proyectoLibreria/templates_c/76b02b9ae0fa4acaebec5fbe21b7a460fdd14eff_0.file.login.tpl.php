<?php
/* Smarty version 4.2.1, created on 2022-10-11 08:57:07
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634513c3487071_88864777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76b02b9ae0fa4acaebec5fbe21b7a460fdd14eff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\login.tpl',
      1 => 1665471408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634513c3487071_88864777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="POST" action="validate">
    <h5><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h5>
    
    <div class="form-group">
        <label for="email"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="password"><?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</label>
        <input type="password" class="form-control" name="password">
    </div>

    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>

    <div>
        <button class="btn btn-primary ml-auto">Login</button>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
