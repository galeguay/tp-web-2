{include file="header.tpl" title=$product->nombre}
<div class="flexColumna">
        <h1 id="nombreProducto" data-id="{$product->id_producto}" data-rol="{$userRol}">{$product->nombre}</h1>
    <section class="producto">
        <p><span class="resaltado">DESCRIPCIÓN:</span> {$product->descripcion}</p>
        <div class="flexSpaceAround">
            <p><span class="resaltado">CONTENIDO:</span> {$product->contenido} ml.</p>
            <p><span class="resaltado">CATEGORIA:</span> {$product->categoria}</p>
        </div>
    </section>
    <section class="comentarios">
            <div class="encabezadoComentarios">
                <span class="resaltadoComentario">COMENTARIOS SOBRE EL PRODUCTO</span>
                <div class="flexSpaceAround">
                    <form id="formOrder">
                        <select name="orderBy">
                            <option value="fecha" selected>Fecha y hora</option>
                            <option value="estrellas">Estrellas</option>
                        </select>
                        <select name="typeOrder">
                            <option value="asc" selected>Ascendente</option>
                            <option value="desc">Descendente</option>
                        </select>
                        <input type="submit" class="btnEditar" value="Ordenar">
                    </form>
                    <form id="formFilter">
                        <label for="estrellas">Estrellas:</label>
                        <select name="estrellas">
                            <option value="5" selected>5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                        <input type="submit" class="btnEditar" value="Filtrar">
                        <a id="btnNotFilter" class="btnBorrar">Quitar filtro</a>
                    </form>
                </div>
            </div>
            {include file="vue/commentsList.tpl"}
    </section>
    {if $userRol > 0}
    <section class="addComentario">
        <form id="formComentario">
            <div class="flexSpaceAround">
                <textarea class="comentario" name="contenido" placeholder="Comentario..." maxlength="300"></textarea>
                <div class="columnaComentario">
                    <label for="puntaje">Puntaje</label>
                    <p class="puntuacion">
                        <input id="radio1" type="radio" name="puntaje" value="5"><!--
                        --><label for="radio1">★</label><!--
                        --><input id="radio2" type="radio" name="puntaje" value="4"><!--
                        --><label for="radio2">★</label><!--
                        --><input id="radio3" type="radio" name="puntaje" value="3"><!--
                        --><label for="radio3">★</label><!--
                        --><input id="radio4" type="radio" name="puntaje" value="2"><!--
                        --><label for="radio4">★</label><!--
                        --><input id="radio5" type="radio" name="puntaje" value="1"><!--
                        --><label for="radio5">★</label>
                    </p>
                    <input type="submit" value="Agregar" class="btnAgregar">
                </div>
            </div>
        </form>
    </section>
    {/if}
</div>
<script type="text/javascript" src="js/comments.js"></script>
{include file="footer.tpl"}