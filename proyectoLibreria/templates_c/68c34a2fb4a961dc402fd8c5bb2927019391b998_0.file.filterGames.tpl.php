<?php
/* Smarty version 4.2.1, created on 2022-10-03 00:14:51
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\filterGames.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633a0d5b2989f2_31172332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68c34a2fb4a961dc402fd8c5bb2927019391b998' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\filterGames.tpl',
      1 => 1664747253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633a0d5b2989f2_31172332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
    <thead bgcolor='#BFBFBF'>
        <td style="font-weight: bold;">Titulo</td>
        <td style="font-weight: bold;">Calificacion</td>
        <td style="font-weight: bold;">Empresa</td>
    </thead>
    <tbody>
     <?php echo '<?php'; ?>
 while($row = mysqli_fetch_array($brands)): <?php echo '?>'; ?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
            <tr>
                <td><a href="show.php?id=<?php echo '<?php'; ?>
 echo <?php echo '?>'; ?>

                " style="text-decoration: none; color: rgb(159, 16, 25);"><?php echo $_smarty_tpl->tpl_vars['game']->value->juego_name;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['game']->value->calificacion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['game']->value->brand_name;?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    <?php echo '<?'; ?>
 php endwhile <?php echo '?>'; ?>

    </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
