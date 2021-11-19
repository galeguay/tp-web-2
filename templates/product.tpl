{include file="header.tpl" title=$product->nombre}
<div class="flexColumna">
    <h1>{$product->nombre}</h1>
    <p class="angosto"><span class="resaltado">DESCRIPCIÓN:</span> {$product->descripcion}</p>
    <p><span class="resaltado">CONTENIDO:</span> {$product->contenido} ml.</p>
    <p><span class="resaltado">CATEGORIA:</span> {$product->categoria}</p>
    <p><span class="resaltado">COMENTARIOS:</span></p>
    <div class="flexColumna">
        <form id="formComentario">
            <label for="contenido">Contenido del comentario</label>
            <textarea name="contenido"></textarea>
            <label for="puntaje">Puntaje</label>
            <input type="number" min="1" max="5" name="puntaje">
            <input type="submit" value="Agregar">
        </form>
        <div>
        {include file="vue/commentsList.tpl"}
        </div>
    </div>
</div>
<script type="text/javascript" src="js/comments.js"></script>
{include file="footer.tpl"}