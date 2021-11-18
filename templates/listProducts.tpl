{include file="header.tpl" title='Productos'}
<div class="flexColumna">
    <h1>Tabla de productos</h1>
    {if $userRol == 2}
        <h3>Agregar producto:</h3>
        <div class="flex">
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
                {if $userRol == 2}
                    <th>ADMINISTRAR</th>
                {else}
                    <th></th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
                <tr>
                    <td> {$product->nombre} </td>
                    <td> {$product->contenido} ml. </td>
                    <td> {$product->categoria} </td>
                    <td><a href ="product/{$product->id_producto}" class="btnVer">VER DETALLE</a>
                {if $userRol == 2}
                    <a href="editProduct/{$product->id_producto}" class="btnEditar">EDITAR</a>
                    <a href="deleteProduct/{$product->id_producto}" class="btnBorrar">BORRAR</a></td>
                {else}
                    </td>
                {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}