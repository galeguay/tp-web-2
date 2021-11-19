<?php

class CommentModel{

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
        $sentence = $this->db->prepare("SELECT * FROM comentarios WHERE id_categoria=?");
        $sentence->execute($idComment);
        $comment = $sentence->fetch(PDO::FETCH_OBJ);
        return $comment;
    }

    function deleteComment($idComment){
        $sentence = $this->db->prepare("DELETE FROM comentarios WHERE id_categoria=?");
        $sentence->execute();
    }

    function addComment($contenido, $puntaje){
        $sentence = $this->db->prepare("INSERT INTO comentarios(contenido, puntaje) VALUES(?,?)");
        $sentence->execute(array($contenido, $puntaje));
        return $this->db->lastInsertId();
    }

    function updateComment($id_comentario, $contenido, $puntaje){
        $sentence = $this->db->prepare("UPDATE comentarios SET contenido=?, puntaje=? WHERE id_comentario=?");
        $sentence->execute(array($contenido, $puntaje, $id_comentario));
    }

}