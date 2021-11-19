<?php

class CategoryModel{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function getCategories(){
        $sentence = $this->db->prepare("SELECT * FROM categorias");
        $sentence->execute();
        $categories = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function getCategory($id_category){
        $sentence = $this->db->prepare( "SELECT * FROM categorias WHERE id_categoria=?");
        $sentence->execute(array($id_category));
        $category = $sentence->fetch(PDO::FETCH_OBJ);
        return $category;
    }

    function addCategory($nombre){
        $sentence = $this->db->prepare("INSERT INTO categorias(nombre) VALUES (?)");
        $sentence->execute(array($nombre));
    }

    function updateCategoryToDB($id_category, $nombre){
        $sentence = $this->db->prepare("UPDATE categorias SET nombre=? WHERE id_categoria=?");
        $sentence->execute(array($nombre, $id_category));
    }

    function deleteCategory($id_category){
        $sentence = $this->db->prepare( "DELETE FROM categorias WHERE id_categoria=?");
        $sentence->execute(array($id_category));
    }

}