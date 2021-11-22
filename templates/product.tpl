{include file="header.tpl" title=$product->nombre}
<div class="flexColumna">
        <h1 id="nombreProducto" data-id="{$product->id_producto}">{$product->nombre}</h1>
    <section class="producto">
        <p><span class="resaltado">DESCRIPCIÓN:</span> {$product->descripcion}</p>
        <div class="flexSpaceAround">
            <p><span class="resaltado">CONTENIDO:</span> {$product->contenido} ml.</p>
            <p><span class="resaltado">CATEGORIA:</span> {$product->categoria}</p>
        </div>
    </section>
    <section class="comentarios">
    <div class="flexWrap">
        <p><span class="resaltadoComentario">COMENTARIOS</span></p>
        {include file="vue/commentsList.tpl"}
    </div>
    </section>
    <section class="comentario">
        <form id="formComentario">
            <div class="flexSpaceAround">
                <!--<label for="contenido">Contenido del comentario</label>-->
                <textarea class="comentario" name="contenido" placeholder="Comentario..."></textarea>
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
</div>
<script type="text/javascript" src="js/comments.js"></script>
{include file="footer.tpl"}