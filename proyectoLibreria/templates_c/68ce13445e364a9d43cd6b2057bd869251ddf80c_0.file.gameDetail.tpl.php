<?php
/* Smarty version 4.2.1, created on 2022-10-09 15:48:05
  from 'C:\xampp\htdocs\tpe\proyectoLibreria\templates\gameDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6342d1155493f8_13750433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68ce13445e364a9d43cd6b2057bd869251ddf80c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\proyectoLibreria\\templates\\gameDetail.tpl',
      1 => 1665323282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6342d1155493f8_13750433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>


  <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h6 class="card-subtitle">Videojuego:</h6>
      <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['game']->value->juego_name;?>
</h5>
      <h6 class="card-subtitle mb-2 text-muted">Empresa: <?php echo $_smarty_tpl->tpl_vars['game']->value->id_brand;?>
</h6>
      <h6 class="card-subtitle">Sinopsis/Descripcion:</h6>
      <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['game']->value->sinopsis;?>
</p>
    </div>
  </div>


<a href="gameList.tpl" type="button" class='btn btn-primary ml-auto'>Volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
