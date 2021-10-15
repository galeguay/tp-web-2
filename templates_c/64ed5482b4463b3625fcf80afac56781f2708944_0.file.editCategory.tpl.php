<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:22:27
  from '/var/www/html/web2/TPE/templates/editCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168e5e30ea341_44742770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64ed5482b4463b3625fcf80afac56781f2708944' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/editCategory.tpl',
      1 => 1634264541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168e5e30ea341_44742770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Editar Categoria</h1>
<form action="updateCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
" method="POST">
    <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
" placeholder="Nombre">
    <input type="submit" value="Guardar">
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
