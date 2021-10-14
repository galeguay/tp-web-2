<?php
require_once "controller/ProductController.php";

function showHome(){
                    //FALTA EL HOME                   
}

function showProducts(){
    $categoriesController = new CategoryController();
    $categories = $categoriesController->getCategories();
    $productController = new ProductController();
    $productController->showProducts($categories);
}

function showProduct($id_product){
    $productController = new ProductController();
    $productController->showProduct($id_product);
}

function showProductsAdmin(){
    $categoriesController = new CategoryController();
    $categories = $categoriesController->getCategories();
    $productController = new ProductController();
    $productController->showProductsAdmin($categories);
}

function showCategories(){
    $categoryController = new CategoryController();
    $categoryController->showCategories();
}

function addProduct(){
    if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['contenido']) && isset($_POST['id_categoria'])){
        $productController = new ProductController();
        $productController->addProduct($_POST['nombre'], $_POST['descripcion'], $_POST['contenido'], $_POST['id_categoria']);
        header("Location: ".BASE_URL."admin/products");
    }
}

function deleteProduct($id){
    $productController = new ProductController();
    $productController->deleteProduct($id);
    header("Location: ".BASE_URL."admin/products");
}

function editProduct($id){
    $categoriesController = new CategoryController();
    $categories = $categoriesController->getCategories();
    $productController = new ProductController();
    $productController->showEditProduct($id, $categories);
}

function updateProduct($id_producto){
    if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['contenido']) && isset($_POST['id_categoria'])){
        $productController = new ProductController();
        $productController->updateProduct($_POST['nombre'], $_POST['descripcion'], $_POST['contenido'], $_POST['id_categoria'], $id_producto);
        header("Location: ".BASE_URL."admin/products");
    }
}