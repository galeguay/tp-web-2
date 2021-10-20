<?php
/* Smarty version 3.1.39, created on 2021-10-20 17:18:37
  from '/var/www/html/web2/TPE/templates/logIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6170799d430bf1_52681449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06c229cb5d80e0d774dcb5e239cf62073961517d' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/logIn.tpl',
      1 => 1634263737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6170799d430bf1_52681449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Iniciar Sesión</h1>
<form action="verifyLogIn" method="POST">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="pass" placeholder="Contraseña">
    <input type="submit" value="Iniciar Sesión">
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
