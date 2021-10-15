<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:18:25
  from '/var/www/html/web2/TPE/templates/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168e4f16fe409_13392878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf350fb1d13ccd33b9d69bbfc04c80b433a663e' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/product.tpl',
      1 => 1634264304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168e4f16fe409_13392878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="centrado">
    <h1><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</h1>
    <p class="angosto"><span class="resaltado">DESCRIPCIÓN:</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
</p>
    <p><span class="resaltado">CONTENIDO:</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->contenido;?>
 ml.</p>
    <p><span class="resaltado">CATEGORIA:</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
</p>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
