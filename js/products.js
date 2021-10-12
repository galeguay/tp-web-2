"use strict"


//BOTONES BORRAR PRODUCTO
let botonesBorrar = document.querySelectorAll(".btnBorrar");
for (const btnBorrar of botonesBorrar) {
    btnBorrar.addEventListener("click", function (e) {
        e.preventDefault();
        let idProduct = this.dataset.id;
        redirectDeleteProduct(idProduct);
    });
}

async function redirectDeleteProduct(id) {
    let res = await fetch("admin/deleteProduct/" + id);
}



//BOTON AGREGAR PRODUCTO
document.querySelector("#formProduct").addEventListener("submit", function (e) {
    e.preventDefault();
    redirectAddProduct;
});

async function redirectAddProduct(urlDataProduct) {
    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['contenido']) && isset($_POST['categoria'])) {
        let dataProduct = $_POST['nombre'] + '/' + $_POST['descripcion'] + '/' + $_POST['contenido'];
        redirectAddProduct(dataProduct);
    let res = await fetch("admin/addProduct/" + urlDataProduct);
    }
}



//BOTONES EDITAR PRODUCTO
let botonesEditar = document.querySelectorAll(".btnEditar");
for (const btnEditar of botonesEditar) {
    //let idProduct = this.dateset.id;
}
