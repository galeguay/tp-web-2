<?php
/* Smarty version 3.1.39, created on 2021-10-14 10:45:20
  from '/var/www/html/web2/TPE/templates/listCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616834707ff8f7_04310161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdf2afad2e7cca09290cf7d6559342e18ef0f81d' => 
    array (
      0 => '/var/www/html/web2/TPE/templates/listCategories.tpl',
      1 => 1634219101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_616834707ff8f7_04310161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="centrado">
    <h1>Tabla de Categorías</h1>
    <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <h3>Agregar categoria:</h3>
        <form id="form-categoria" method="GET">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" id="btnAgregar" value="Agregar">
        </form>
    <?php }?>
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</td>
                    <td><a href ="admin/category<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
">VER PRODUCTOS</a>
                    <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                        <td>
                            <a href="editCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
" class="btnEditar">EDITAR</a>
                            <a href="editCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
" class="btnBorrar">BORRAR</a></td>
                        <td>
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
