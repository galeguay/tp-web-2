<?php
require_once "controller/ProductController.php";

function showHome(){
    
}

function showProducts(){
    $productController = new ProductController();
    $productController->showProducts();
}

function showProduct($id_product){
    $productController = new ProductController();
    $productController->showProduct($id_product);
}

function showProductsAdmin(){
    $productController = new ProductController();
    $productController->showProductsAdmin();
}

function deleteProduct($id){
    $productController = new ProductController();
    $productController->deleteProduct($id);
}



/*

function showCategories(){
    include_once 'templates/header.php';
    $html =
        '<div class="centrado">
        <h1>Tabla de Categorías</h1>
        <table>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th></th>
                </tr>
            </thead><tbody>';
    $categories = getCategories();
    foreach ($categories as $category) {
        $html .=
            '<tr><td>'.$category->nombre.'</td>
            <td><a href ="category/'.$category->id_categoria.'">VER PRODUCTOS</a></td>
            </tr>';
    }
    $html .= '</tbody></thead></table></div>';
    echo $html;
    echo '<script type="text/javascript" src="js/pago.js"></script>';
    include_once 'templates/footer.php';
}*/