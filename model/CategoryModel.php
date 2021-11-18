<?php

class CategoryModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function getCategories(){
        $sentence = $this->db->prepare("SELECT * FROM categorias");
        $sentence->execute();
        $categories = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function getCategory($id_category){
        $sentencia = $this->db->prepare( "SELECT * FROM categorias WHERE id_categoria=?");
        $sentencia->execute(array($id_category));
        $category = $sentencia->fetch(PDO::FETCH_OBJ);
        return $category;
    }

    function addCategory($nombre){
        $sentencia = $this->db->prepare("INSERT INTO categorias(nombre) VALUES (?)");
        $sentencia->execute(array($nombre));
    }

    function updateCategoryToDB($id_category, $nombre){
        $sentencia = $this->db->prepare("UPDATE categorias SET nombre=? WHERE id_categoria=?");
        $sentencia->execute(array($nombre, $id_category));
    }

    function deleteCategory($id_category){
        $sentencia = $this->db->prepare( "DELETE FROM categorias WHERE id_categoria=?");
        $sentencia->execute(array($id_category));
    }

}