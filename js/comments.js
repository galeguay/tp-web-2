"use strict"

const ApiURL = "api/comments";

let idProduct = document.querySelector("#nombreProducto").dataset.id;
let formComments = document.querySelector("#formComentario");
formComments.addEventListener("submit", e =>{
    e.preventDefault();
    let dataForm = new FormData(formComments);
    let comment = {
        id_usuario: idProduct,
        contenido: dataForm.get("contenido"),
        puntaje: dataForm.get("puntaje"),
        id_producto: idProduct,
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
            getComments(idProduct);
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


async function getComments(idProduct){
    //fetch para traer los comentarios
    try {
        let response = await fetch (ApiURL + "/" + idProduct);
        let comments = await response.json();

        app.comments = comments;
    } catch (e) {
        console.log(e);
    }
}
getComments(idProduct);






