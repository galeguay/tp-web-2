"use strict"

const ApiURL = "api/comments";

let idProduct = document.querySelector("#nombreProducto").dataset.id;
let userRol = document.querySelector("#nombreProducto").dataset.rol;
let orderComments = "?orderBy=fecha&typeOrder=asc";
let filter = "";

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

//OBTIENE LOS COMENTARIOS A TRAVES DE LA API
    async function getComments(idProduct){
        try {
            let response = await fetch (ApiURL + "/" + idProduct + orderComments + filter);
            let comments = await response.json();
            if (response.ok){
                app.comments = comments;
            }
        } catch (e) {
            console.log(e);
        }
    }


//ELIMINA EL COMENTARIO A TRAVES DE LA API
async function deleteComment(idComment){
    let response = await fetch (ApiURL + "/" + idComment,{
        method : "DELETE",
        headers: { 'Content-Type': 'application/json' }
    });
    if(response.ok){
        getComments(idProduct);
    }
}

//ESTABLECE EL ORDEN EN LA LISTA COMENTARIOS
let formOrder = document.querySelector("#formOrder");
formOrder.addEventListener("submit", e=>{
    e.preventDefault();
    let data = new FormData(formOrder);
    let newOrder = "?orderBy="+data.get("orderBy");
    newOrder +="&typeOrder="+data.get("typeOrder");
    orderComments = newOrder;
    getComments(idProduct);
})

//ESTABLECE EL FILTRO ESTRELLAS COMENTARIOS
document.querySelector("#formFilter").addEventListener("submit", e=>{
    e.preventDefault();
    let data = new FormData(formFilter);
    if (data.get("estrellas") != ""){
        let newFilter ="&estrellas="+data.get("estrellas");
        filter = newFilter;
    }
    getComments(idProduct);
});

//QUITA FILTRO DE ESTRELLAS
document.querySelector("#btnNotFilter").addEventListener("click", e=>{
    filter = "";
    getComments(idProduct);
})


//TOMA LOS DATOS CARGADOS EN EL FORMULARIO PARA AGREGAR UN COMENTARIO
if (userRol > 0){ //Si no es un usuario registrado en el tpl no estaría el formulario
    let formComments = document.querySelector("#formComentario");
    document.querySelector("#formComentario").addEventListener("submit", e =>{
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

//GUARDA A TRAVES DE LA API EL COMENTARIO PASADO POR PARAMETRO
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

getComments(idProduct);