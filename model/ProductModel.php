<?php

class ProductModel{

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function getProducts(){
        $sentence = $this->db->prepare(
            "SELECT productos.*, categorias.nombre AS categoria
            FROM productos
            JOIN categorias ON productos.id_categoria = categorias.id_categoria");
        $sentence->execute();
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id_producto){
        $sentence = $this->db->prepare(
            "SELECT productos.*, categorias.nombre AS categoria
            FROM productos
            JOIN categorias ON productos.id_categoria = categorias.id_categoria
            WHERE id_producto=?");
        $sentence->execute(array($id_producto));
        $product = $sentence->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    function getProductsCategory($id_category){
        $sentence = $this->db->prepare(
            "SELECT productos.*, categorias.nombre AS categoria
            FROM productos
            JOIN categorias ON productos.id_categoria = categorias.id_categoria
            WHERE categorias.id_categoria=?");
        $sentence->execute(array($id_category));
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function addProductToDB($nombre, $descripcion, $contenido, $categoria){
        $sentence = $this->db->prepare("INSERT INTO productos(nombre, descripcion, contenido, id_categoria) VALUES(?,?,?,?)");
        $sentence->execute(array($nombre, $descripcion, $contenido, $categoria));
    }

    function updateProduct($nombre, $descripcion, $contenido, $id_categoria, $id_producto){
        $sentence = $this->db->prepare("UPDATE productos SET nombre=?, descripcion=?, contenido=?, id_categoria=? WHERE id_producto=?");
        $sentence->execute(array($nombre, $descripcion, $contenido, $id_categoria, $id_producto));
    }

    function deleteProductFromDB($id_producto){
        $sentence = $this->db->prepare("DELETE FROM `productos` WHERE id_producto=?");
        $sentence->execute(array($id_producto));
    }
}