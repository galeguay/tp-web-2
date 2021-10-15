<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:09:17
  from '/var/www/html/web2/TPE/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168e2cdf2dff2_42133501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87a5c38b1d80c887b2658efde68837630a0a6831' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/header.tpl',
      1 => 1634263737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168e2cdf2dff2_42133501 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>Vinoteca</title>
</head>
<body>
    <header>
        <nav class="spaced">
            <div>
                <a href="categories">Categorias</a>
                <a href="products">Productos</a>
                <a href="adminCategories">Categorias(ADMIN)</a>
                <a href="adminProducts">Productos (ADMIN)</a>
            </div>
            <div>
                <a href="logIn">Iniciar Sesión</a>
                <a href="register">Registrarse</a>
            </div>
            <div>
            <a href="logOut">Cerrar Sesión</a>
            </div>
        </nav>
    </header>
    <div class="centrado"><?php }
}
