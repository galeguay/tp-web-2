<?php
/* Smarty version 3.1.39, created on 2021-11-18 15:28:00
  from '/var/www/html/web2/TPE/templates/logIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61969b3013dba7_64452463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06c229cb5d80e0d774dcb5e239cf62073961517d' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/logIn.tpl',
      1 => 1637260065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61969b3013dba7_64452463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Iniciar Sesión'), 0, false);
?>
<h1>Iniciar Sesión</h1>
<div class="flexColumna">
<form action="startSession" method="POST">
    <label for="email" >Email</label>
    <input type="password" name="pass" placeholder="Contraseña">
    <label for="pass" >Contraseña</label>
    <input type="password" name="pass" placeholder="Contraseña">
    <input type="submit" value="Iniciar Sesión">
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
