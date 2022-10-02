<?php
/* Smarty version 4.2.1, created on 2022-10-03 00:14:48
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633a0d58490528_75708421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76b02b9ae0fa4acaebec5fbe21b7a460fdd14eff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\login.tpl',
      1 => 1664748871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633a0d58490528_75708421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="post">
    <h5><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h5>
    
    <div class="form-floating mt-3 mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Username">
        <label for="floatingInput"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword"><?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</label>
    </div>

    <div>
        <button class="btn">Login</button>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
