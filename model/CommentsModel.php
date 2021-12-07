<?php

class CommentsModel{

    private $db;


    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }


    function getCommentsFromDB($idProduct, $orderBy, $typeOrder, $filter){
        $order_querys = [
            "id" => " ORDER BY id_comentario",
            "fecha" => " ORDER BY fecha_y_hora",
            "estrellas" => " ORDER BY puntaje"
        ];
        $filter_querys = [
            "1" => " AND puntaje=1",
            "2" => " AND puntaje=2",
            "3" => " AND puntaje=3",
            "4" => " AND puntaje=4",
            "5" => " AND puntaje=5",
        ];
        if (isset($filter_querys[$filter])){
            $filter_query = $filter_querys[$filter];
        }
        if (isset($order_querys[$orderBy])){
            $order_query = $order_querys[$orderBy];
            if($typeOrder == "desc")
                $order_query .= " ASC";
            else $order_query .= " DESC"; //por defecto
        }else $order_query = "";
        $sentence = $this->db->prepare("SELECT * FROM comentarios WHERE id_producto=? $filter_query $order_query");
        $sentence->execute(array($idProduct));
        $comments = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    function getCommentFromDB($idComment){
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