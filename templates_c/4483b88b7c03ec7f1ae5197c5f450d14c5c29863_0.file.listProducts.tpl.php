<?php
/* Smarty version 3.1.39, created on 2021-11-19 14:08:50
  from '/var/www/html/web2/TPE/templates/listProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6197da22384dc2_18747010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4483b88b7c03ec7f1ae5197c5f450d14c5c29863' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/listProducts.tpl',
      1 => 1637341698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6197da22384dc2_18747010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Productos"), 0, false);
?>
<div class="flexColumna">
    <h1>Productos</h1>

    <section class="flexWrap">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="tarjetaProducto">
            <div class="nombreProducto">
                <?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>

            </div>
            <div class="datosProducto">
                <span class="datoProducto"><?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
</span>
                <span class="datoProducto"><?php echo $_smarty_tpl->tpl_vars['product']->value->contenido;?>
 ml.</span>
                <a href ="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
" class="btnVerDetalle">VER DETALLE</a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['userRol']->value == 2) {?>
                <div class="flexSpaceAround">
                    <a href="editProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
" class="btnEditar">EDITAR</a>
                    <a href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
" class="btnBorrar">BORRAR</a>
                </div>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>

    <?php if ($_smarty_tpl->tpl_vars['userRol']->value == 2) {?>
    <section class="agregar">
        <span>Agregar producto</span>
        <form action="addProduct" method="POST">
            <div class="flexWrap">
                <input name="nombre" placeholder="Nombre">
                <input type="number" name="contenido" placeholder="Contenido Neto (ml)">
                <select name="id_categoria">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="flexWrap">
            <textarea name="descripcion" placeholder="Descripción"></textarea>
            </div>
            <div class="flexColumna">
                <input type="submit" class="btnAgregar" value="Agregar">
            </div>
        </form>
    </section>
    <?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
