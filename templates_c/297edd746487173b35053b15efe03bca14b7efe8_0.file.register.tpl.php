<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:23:09
  from '/var/www/html/web2/TPE/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168e60d4f5f34_65461589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '297edd746487173b35053b15efe03bca14b7efe8' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/register.tpl',
      1 => 1634264588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168e60d4f5f34_65461589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Registrar Usuario</h1>
<form action="addUser" method="POST">
    <input type="text" name="nombre" placeholder="Usuario">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="pass" placeholder="Contraseña">
    <input type="submit" value="Registrarse">
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
