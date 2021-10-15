{include file="header.tpl"}
<div class="centrado">
    <h1>Tabla de productos</h1>
    {if $isAdmin}
        <div>
            <form action="addProduct" method="POST">
                <input name="nombre" placeholder="Nombre">
                <input name="descripcion" placeholder="Descripción">
                <input type="number" name="contenido" placeholder="Contenido Neto (ml)">
                <select name="id_categoria">
                    {foreach from=$categories item=$category}
                        <option value="{$category->id_categoria}">{$category->nombre}</option>
                    {/foreach}
                </select>
                <input type="submit" value="Agregar">
            </form>
        </div>
    {/if}
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>CONTENIDO</th>
                <th>CATEGORÍA</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
                <tr>
                    <td> {$product->nombre} </td>
                    <td> {$product->contenido} ml. </td>
                    <td> {$product->categoria} </td>
                    <td><a href ="product/{$product->id_producto}" class="btnVer">VER DETALLE</a>
                {if $isAdmin}
                    <a href="editProduct/{$product->id_producto}" class="btnEditar">EDITAR</a>
                    <a href="deleteProduct/{$product->id_producto}" class="btnBorrar">BORRAR</a></td></tr>
                {else}
                    </td></tr>
                {/if}
            {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}