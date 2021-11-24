{include file="header.tpl" title="Categorias"}
<div class="flexColumna">
    <h1>Categorías</h1>
    <section class="flexColumna">
    {foreach from=$categories item=$category}
        <div class="elementoLista">
            {$category->nombre}
            <div>
                <a href ="category/{$category->id_categoria}" class="btnVerDetalle">VER PRODUCTOS</a>
                {if $userRol == 2}
                    <a href="editCategory/{$category->id_categoria}" class="btnEditar">EDITAR</a>
                    <a href="deleteCategory/{$category->id_categoria}" class="btnBorrar">BORRAR</a>
                {/if}
            </div>
        </div>
    {/foreach}
    </section>
    {if $userRol == 2}
        <h3>*SOLO SE PODRÁ ELIMINAR UNA CATEGORÍA SI NO TIENE PRODUCTOS ASOCIADOS</h5>
        <section class="agregar">
        <div class="flexColumna">
            <span>Agregar categoria:</span>
            <form action="addCategory" method="POST">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="submit" class="btnAgregar" value="Agregar">
            </form>
        </div>
        </section>
    {/if}
</div>
{include file="footer.tpl"}