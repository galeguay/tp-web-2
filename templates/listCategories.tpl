{include file="header.tpl" title="Categoria"}
<div class="flexColumna">
    <h1>Tabla de Categorías</h1>
    {if $userRol == 2}
        <h3>Agregar categoria:</h3>
        <div>
            <form action="addCategory" method="POST">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="submit" id="btnAgregar" value="Agregar">
            </form>
        </div>
    {/if}
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                {if $userRol == 2}
                    <th>ADMINISTRAR</th>
                {else}
                    <th></th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$categories item=$category}
                <tr>
                    <td>{$category->nombre}</td>
                    <td><a href ="category/{$category->id_categoria}" class="btnVer">VER PRODUCTOS</a>
                    {if $userRol == 2}
                        <a href="editCategory/{$category->id_categoria}" class="btnEditar">EDITAR</a>
                        <a href="deleteCategory/{$category->id_categoria}" class="btnBorrar">BORRAR</a></td>
                    {else}
                        </td></tr>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}