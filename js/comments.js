"use strict"

const ApiURL = "api/comments";

let idProduct = document.querySelector("#nombreProducto").dataset.id;
let userRol = document.querySelector("#nombreProducto").dataset.rol;

if (userRol > 0){ //Si no es un usuario registrado en el tpl no estaría el formulario
    let formComments = document.querySelector("#formComentario");
    formComments.addEventListener("submit", e =>{
        e.preventDefault();
        let dataForm = new FormData(formComments);
        let comment = {
            contenido: dataForm.get("contenido"),
            puntaje: dataForm.get("puntaje"),
            id_producto: idProduct,
        }
        saveComment(comment);
    });
}

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
        userRol: userRol
    },
    methods:{
        deleteComment: function(id) {
            deleteComment(id)
        }
    }
});

async function getComments(idProduct){
    //fetch para traer los comentarios
    try {
        let response = await fetch (ApiURL + "/" + idProduct);
        let comments = await response.json();

        if (response.ok){
            app.comments = comments;
        }
    } catch (e) {
        console.log(e);
    }
}

async function deleteComment(idComment){
    let response = await fetch (ApiURL + "/" + idComment,{
        method : "DELETE",
        headers: { 'Content-Type': 'application/json' }
    });
    if(response.ok){
        getComments(idProduct);
    }
}

getComments(idProduct);