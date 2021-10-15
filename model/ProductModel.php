<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

class ProductModel{

    private function connectToDB(){
        return new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function getProducts(){
        $db = $this->connectToDB();
        $sentence = $db->prepare(
            "SELECT productos.*, categorias.nombre AS categoria
            FROM productos
            JOIN categorias ON productos.id_categoria = categorias.id_categoria");
        $sentence->execute();
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id_producto){
        $db = $this->connectToDB();
        $sentence = $db->prepare(
            "SELECT productos.*, categorias.nombre AS categoria
            FROM productos
            JOIN categorias ON productos.id_categoria = categorias.id_categoria
            WHERE id_producto=?");
        $sentence->execute(array($id_producto));
        $product = $sentence->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    function getProductsCategory($id_category){
        $db = $this->connectToDB();
        $sentence = $db->prepare(
            "SELECT productos.*, categorias.nombre AS categoria
            FROM productos
            JOIN categorias ON productos.id_categoria = categorias.id_categoria
            WHERE categorias.id_categoria=?");
        $sentence->execute(array($id_category));
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function addProductToDB($nombre, $descripcion, $contenido, $categoria){
        $db = $this->connectToDB();
        $sentence = $db->prepare("INSERT INTO productos(nombre, descripcion, contenido, id_categoria) VALUES(?,?,?,?)");
        $sentence->execute(array($nombre, $descripcion, $contenido, $categoria));
    }

    function updateProduct($nombre, $descripcion, $contenido, $id_categoria, $id_producto){
        $db = $this->connectToDB();
        $sentence = $db->prepare("UPDATE productos SET nombre=?, descripcion=?, contenido=?, id_categoria=? WHERE id_producto=?");
        $sentence->execute(array($nombre, $descripcion, $contenido, $id_categoria, $id_producto));
    }

    function deleteProductFromDB($id_producto){
        $db = $this->connectToDB();
        $sentence = $db->prepare("DELETE FROM `productos` WHERE id_producto=?");
        $sentence->execute(array($id_producto));
    }
}