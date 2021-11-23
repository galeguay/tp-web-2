{literal}
<div id="commentsVue">
    <div class="comentario" v-for="comment in comments">
        <div class="puntaje">
            {{ comment.puntaje }} <span class="estrella">★</span>
        </div>
        <div class="contenido">
            {{ comment.contenido }}
        </div>
        <a v-if="userRol == 2" v-on:click="deleteComment(comment.id_comentario)" class="btnBorrar" >Borrar</a>
    </div>
</div>
{/literal}