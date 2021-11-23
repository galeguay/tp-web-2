<?php

class CommentsModel{

    private $db;


    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }


    function getComments($idProduct){
        $sentence = $this->db->prepare("SELECT * FROM comentarios WHERE id_producto=?");
        $sentence->execute(array($idProduct));
        $comments = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    function getComment($idComment){
        $sentence = $this->db->prepare("SELECT * FROM comentarios WHERE id_comentario=?");
        $sentence->execute(array($idComment));
        $comment = $sentence->fetch(PDO::FETCH_OBJ);
        return $comment;
    }

    function deleteComment($idComment){
        $sentence = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario=?");
        $sentence->execute(array($idComment));
        return $sentence->rowCount();
    }

    function addComment($contenido, $puntaje, $idProducto){
        $sentence = $this->db->prepare("INSERT INTO comentarios(contenido, puntaje, id_producto) VALUES(?,?,?)");
        $sentence->execute(array($contenido, $puntaje, $idProducto));
        return $this->db->lastInsertId();
    }

}