"use strict"

const ApiURL = "api/comment";

let formComments = document.querySelector("#formComentario");
formComments.addEventListener("click", e =>{
    let dataForm = new FormData(formComments);
    let comment = {
        contenido: dataForm.contenido,
        puntaje: dataForm.puntaje,
    }
    saveComment(comment);
});

async function saveComment(comment){
    try{
        let response = await fetch(ApiURL,{
            method: 'POST',
            headers: {'Content-Type':'application/json'},
            body: JSON.stringify(comment) //stringfy lo convierte a string
        })
        if (response.ok){
            getComments();
        }
    }catch(error){
        console.log(error);
    }
}


let app = new Vue({
    el: "#commentsVue",
    data: {
        comments: [],
    }
});


async function getComments(){
    //fetch para traer los comentarios
    try {
        let response = await fetch (ApiURL);
        let comments = await response.json();

        app.comments = comments;
    } catch (e) {
        console.log(e);
    }
}

getComments();






