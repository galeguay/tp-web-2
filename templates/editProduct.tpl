{include file="header.tpl"}
<div>
    <form id="formProduct" action="updateProduct/{$product->id_producto}" method="POST">
        <input name="nombre" placeholder="Nombre" value="{$product->nombre}">
        <input name="descripcion" placeholder="Descripción" value="{$product->descripcion}">
        <input type="number" name="contenido" placeholder="Contenido Neto (ml)" value="{$product->contenido}">
        <select name="id_categoria">
            {foreach from=$categories item=$category}
                <option value="{$category->id_categoria}">{$category->nombre}</option>
            {/foreach}
        </select>
        <input type="submit" value="Guardar">
    </form>
</div>
{include file="footer.tpl"}