{include file="templates/header.php"}
<div class="centrado">
    <h1>Tabla de Categorías</h1>
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=categories item=$category}
                <tr>
                    <td>{$category->nombre}</td>
                    <td><a href ="admin/category{$category->id_categoria}">VER PRODUCTOS</a>
                    {if $isAdmin}
                    <td>
                        <a class="btnEditar" data-id="{$product->id_producto}">EDITAR</a>
                        <a class="btnBorrar" data-id="{$product->id_producto}">BORRAR</a></td>
                    <td>
                    {else}
                        </td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
<script type="text/javascript" src="js/categories.js"></script>
{include file="templates/footer.tpl"}