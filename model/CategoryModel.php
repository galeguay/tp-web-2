<?php

class CategoryModel{

    private function connectToDB(){
        return new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function getCategories(){
        $db = $this->connectToDB();
        $sentence = $db->prepare("SELECT * FROM categorias");
        $sentence->execute();
        $categories = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function getCategory($id_category){
        $db = $this->connectToDB();
        $sentencia = $db->prepare( "SELECT * FROM categorias WHERE id_categoria=?");
        $sentencia->execute(array($id_category));
        $category = $sentencia->fetch(PDO::FETCH_OBJ);
        return $category;
    }

    function updateCategoryToDB($id_category, $nombre){
        $db = $this->connectToDB();
        $sentencia = $db->prepare("UPDATE categorias SET nombre=? WHERE id_categoria=?");
        $sentencia->execute(array($nombre, $id_category));
    }
}