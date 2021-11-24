"use strict"

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