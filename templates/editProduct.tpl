{include file="header.tpl" title='Editar producto'}
<h1>Editar Producto</h1>
<form action="updateProduct/{$product->id_producto}" method="POST">
    <input name="nombre" placeholder="Nombre" value="{$product->nombre}">
    <textarea name="descripcion" placeholder="Descripción">{$product->descripcion}</textarea>
    <input type="number" name="contenido" placeholder="Contenido Neto (ml)" value="{$product->contenido}">
    <select name="id_categoria">
        {foreach from=$categories item=$category}
            {if $category->id_categoria == $product->id_categoria}
                <option value="{$category->id_categoria}" selected>{$category->nombre}</option>
            {else}
                <option value="{$category->id_categoria}">{$category->nombre}</option>
            {/if}
        {/foreach}
    </select>
    <input type="submit" value="Guardar">
</form>
{include file="footer.tpl"}