<?php

class CommentModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function getComments(){
        $sentence = $this->db->prepare("SELECT contenido, puntaje FROM comentarios");
        $sentence->execute();
        $comments = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
}