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

}