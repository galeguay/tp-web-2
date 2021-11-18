<?php
/* Smarty version 3.1.39, created on 2021-11-18 15:35:52
  from '/var/www/html/web2/TPE/templates/listProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61969d0809d1f9_66877370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4483b88b7c03ec7f1ae5197c5f450d14c5c29863' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/listProducts.tpl',
      1 => 1637259790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61969d0809d1f9_66877370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Productos'), 0, false);
?>
<div class="flexColumna">
    <h1>Tabla de productos</h1>
    <?php if ($_smarty_tpl->tpl_vars['userRol']->value == 2) {?>
        <h3>Agregar producto:</h3>
        <div class="flex">
            <form action="addProduct" method="POST">
                <input name="nombre" placeholder="Nombre">
                <input name="descripcion" placeholder="Descripción">
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
                <input type="submit" value="Agregar">
            </form>
        </div>
    <?php }?>
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>CONTENIDO</th>
                <th>CATEGORÍA</th>
                <?php if ($_smarty_tpl->tpl_vars['userRol']->value == 2) {?>
                    <th>ADMINISTRAR</th>
                <?php } else { ?>
                    <th></th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['product']->value->contenido;?>
 ml. </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
 </td>
                    <td><a href ="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
" class="btnVer">VER DETALLE</a>
                <?php if ($_smarty_tpl->tpl_vars['userRol']->value == 2) {?>
                    <a href="editProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
" class="btnEditar">EDITAR</a>
                    <a href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
" class="btnBorrar">BORRAR</a></td>
                <?php } else { ?>
                    </td>
                <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
