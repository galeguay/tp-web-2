<?php
/* Smarty version 3.1.39, created on 2021-10-14 18:32:11
  from '/var/www/html/web2/TPE/templates/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a1db276913_95405452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfd078d3a02e66f5c6dd856f76d467fce3b9ee6c' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/category.tpl',
      1 => 1634247129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168a1db276913_95405452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="centrado">
    <h1><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</h1>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
