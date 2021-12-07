{literal}
<div id="commentsVue">
    <div class="comentario" v-for="comment in comments">
        <div class="flexColumna">
            <span class="fechaComenterio">{{ comment.fecha_y_hora }}</span>
            <div class="flexLeft">
                <div class="puntaje">
                    {{ comment.puntaje }} <span class="estrella">★</span>
                </div>
                <div class="contenido">
                {{ comment.contenido }}
                </div>
            </div>
        </div>
        <a v-if="userRol == 2" v-on:click="deleteComment(comment.id_comentario)" class="btnRed" >Borrar</a>
    </div>
</div>
{/literal}