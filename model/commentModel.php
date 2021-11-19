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

    function getComment($idComment){
        $sentence = $this->db->prepare("SELECT * FROM comentarios WHERE id_categoria=?");
        $sentence->execute($idComment);
        $comment = $sentence->fetch(PDO::FETCH_OBJ);
        return $comment;
    }

    function deleteComment($idComment){
        $sentence = $this->db->prepare("DELETE FROM comentarios WHERE id_categoria=?");
        $sentence->execute();
    }
}