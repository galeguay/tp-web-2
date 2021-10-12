"use strict"

let botonesEditar = document.querySelectorAll(".btnEditar");
for (const btnEditar of botonesEditar) {
    //let idProduct = this.dateset.id;
}

let botonesBorrar = document.querySelectorAll(".btnBorrar");
for (const btnBorrar of botonesBorrar) {
    btnBorrar.addEventListener("click", function(e){
        e.preventDefault();
        let idProduct = this.dataset.id;
        redirectDeleteProduct(idProduct);
    });
}

async function redirectDeleteProduct(id){
    let res = await fetch("admin/deleteProduct/"+id);
}

