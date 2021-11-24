"use strict"

const ApiURL = "api/comments";

let idProduct = document.querySelector("#nombreProducto").dataset.id;
let userRol = document.querySelector("#nombreProducto").dataset.rol;
let orderComments = "?orderBy=fecha&asc=asc";
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

async function getComments(idProduct){
    try {
        let response = await fetch (ApiURL + "/" + idProduct + orderComments + filter);
        console.log(ApiURL + "/" + idProduct + orderComments + filter);
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

//ESTABLECER ORDEN COMENTARIOS
let formOrder = document.querySelector("#formOrder");
formOrder.addEventListener("submit", e=>{
    e.preventDefault();
    let data = new FormData(formOrder);
    let newOrder = "?orderBy="+data.get("orderBy");
    //if (data.get("asc") != "")
    newOrder +="&asc="+data.get("asc");
    orderComments = newOrder;
    getComments(idProduct);
})

//ESTABLECER FILTRO ESTRELLAS COMENTARIOS
let formFilter = document.querySelector("#formFilter");
formFilter.addEventListener("submit", e=>{
    e.preventDefault();
    let data = new FormData(formFilter);
    if (data.get("estrellas") != ""){
        let newFilter ="?estrellas="+data.get("estrellas");
        filter = newFilter;
    }
    getComments(idProduct);
})



getComments(idProduct);