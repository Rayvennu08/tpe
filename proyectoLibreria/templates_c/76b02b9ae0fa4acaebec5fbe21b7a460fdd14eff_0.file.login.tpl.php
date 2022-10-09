<?php
/* Smarty version 4.2.1, created on 2022-10-07 22:58:15
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634092e73fc1a7_62271836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76b02b9ae0fa4acaebec5fbe21b7a460fdd14eff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\login.tpl',
      1 => 1665176293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634092e73fc1a7_62271836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="post">
    <h5><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h5>
    
    <div class="form-group">
        <label for="email"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</label>
        <input type="email" required class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="password"><?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</label>
        <input type="password" required class="form-control" id="password" name="password">
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
