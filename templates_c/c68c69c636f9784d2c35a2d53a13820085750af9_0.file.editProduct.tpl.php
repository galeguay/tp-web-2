<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:41:06
  from '/var/www/html/web2/TPE/templates/editProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168b202b3ef06_24687285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c68c69c636f9784d2c35a2d53a13820085750af9' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/editProduct.tpl',
      1 => 1634251261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168b202b3ef06_24687285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <form action="updateProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
" method="POST">
        <input name="nombre" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
">
        <input name="descripcion" placeholder="Descripción" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
">
        <input type="number" name="contenido" placeholder="Contenido Neto (ml)" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->contenido;?>
">
        <select name="id_categoria">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value->id_categoria == $_smarty_tpl->tpl_vars['product']->value->id_categoria) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
" selected><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
                <?php }?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="submit" value="Guardar">
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
