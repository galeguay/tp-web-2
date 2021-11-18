{include file="header.tpl"}
<div class="centrado">
    <h1>{$product->nombre}</h1>
    <p class="angosto"><span class="resaltado">DESCRIPCIÓN:</span> {$product->descripcion}</p>
    <p><span class="resaltado">CONTENIDO:</span> {$product->contenido} ml.</p>
    <p><span class="resaltado">CATEGORIA:</span> {$product->categoria}</p>
    <p><span class="resaltado">COMENTARIOS:</span>{$comentario->contenido}</p>
</div>
{include file="footer.tpl"}