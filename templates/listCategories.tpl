{include file="header.tpl"}
<div class="centrado">
    <h1>Tabla de Categorías</h1>
    {if $isAdmin}
        <h3>Agregar categoria:</h3>
        <form action="addCategory" method="POST">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" id="btnAgregar" value="Agregar">
        </form>
    {/if}
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th></th>
                {if $isAdmin}
                <th></th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$categories item=$category}
                <tr>
                    <td>{$category->nombre}</td>
                    <td><a href ="category/{$category->id_categoria}" class="btnVer">VER PRODUCTOS</a></td>
                    {if $isAdmin}
                        <td>
                        <a href="editCategory/{$category->id_categoria}" class="btnEditar">EDITAR</a>
                        <a href="deleteCategory/{$category->id_categoria}" class="btnBorrar">BORRAR</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}