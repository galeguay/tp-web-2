{include file="header.tpl"}
<div class="centrado">
    <h1>Tabla de Categorías</h1>
    {if $isAdmin}
        <h3>Agregar categoria:</h3>
        <form id="form-categoria" method="GET">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" id="btnAgregar" value="Agregar">
        </form>
    {/if}
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$categories item=$category}
                <tr>
                    <td>{$category->nombre}</td>
                    <td><a href ="admin/category{$category->id_categoria}">VER PRODUCTOS</a>
                    {if $isAdmin}
                        <td>
                            <a href="editCategory/{$category->id_categoria}" class="btnEditar">EDITAR</a>
                            <a href="editCategory/{$category->id_categoria}" class="btnBorrar">BORRAR</a></td>
                        <td>
                    {else}
                        </td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}