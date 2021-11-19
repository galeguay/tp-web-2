<?php
/* Smarty version 3.1.39, created on 2021-11-18 15:42:44
  from '/var/www/html/web2/TPE/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61969ea42bd201_35548814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87a5c38b1d80c887b2658efde68837630a0a6831' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/header.tpl',
      1 => 1637260799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_61969ea42bd201_35548814 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'Vinoteca Bohemian' : $tmp);?>
</title>
</head>
<body>
    <header>
        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>
    <div class="flexColumna">
<?php }
}
