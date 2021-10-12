<?php

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
        $sentence = $db->prepare("SELECT * FROM productos WHERE id_categoria=?");
        $sentence->execute(array($id_category));
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function deleteProduct($id_producto){
        $db = $this->connectToDB();
        $sentence = $db->prepare(
            "DELETE FROM `productos` WHERE id_producto=?");
        $sentence->execute(array($id_producto));
    }
}