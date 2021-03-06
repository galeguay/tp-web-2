{include file="header.tpl" title="Productos"}
<div class="flexColumna">
    <h1>Productos</h1>
    {if $userRol == 2}
        <h3>*AL BORRAR UN PRODUCTO, SE ELIMINARÁ EL PRODUCTO Y SUS COMENTARIOS</h5>
    {/if}
    <section class="flexWrap">
    {foreach from=$products item=$product}
        <div class="tarjetaProducto">
            <div class="nombreProducto">
                {$product->nombre}
            </div>
            <div class="datosProducto">
                <span class="datoProducto">{$product->categoria}</span>
                <span class="datoProducto">{$product->contenido} ml.</span>
                <a href ="product/{$product->id_producto}" class="btnBlue">VER DETALLE</a>
            </div>
            {if $userRol == 2}
                <div class="botoneraAdmin">
                    <a href="editProduct/{$product->id_producto}" class="btnOrange">EDITAR</a>
                    <a href="deleteProduct/{$product->id_producto}" class="btnRed">BORRAR</a>
                </div>
            {/if}
        </div>
    {/foreach}
    </section>
    {if $userRol == 2}
    <section class="agregar">
        <span>Agregar producto</span>
        <form action="addProduct" method="POST">
            <div class="flexWrap">
                <input name="nombre" placeholder="Nombre">
                <input type="number" name="contenido" placeholder="Contenido Neto (ml)">
                <select name="id_categoria">
                    {foreach from=$categories item=$category}
                        <option value="{$category->id_categoria}">{$category->nombre}</option>
                    {/foreach}
                </select>
            </div>
            <div class="flexWrap">
            <textarea name="descripcion" placeholder="Descripción"></textarea>
            </div>
            <div class="flexColumna">
                <input type="submit" class="btnGreen" value="Agregar">
            </div>
        </form>
    </section>
    {/if}
{include file="footer.tpl"}
