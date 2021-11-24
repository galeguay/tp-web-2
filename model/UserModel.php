<?php

class UserModel{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function addUser($nombre, $email, $pass){ 
        //SI ES INVITADO VALOR DEL ROL ES 0, SI ESTA REGISTRADO ES 1 Y SI ADMIN ES 2
        $sentence = $this->db->prepare("INSERT INTO usuarios(nombre, email, contraseña, rol) VALUES(?,?,?,1)");
        $sentence->execute(array($nombre, $email, $pass));
    }

    function modifyUserRol($idUsuario, $rol){
        $sentence = $this->db->prepare("UPDATE usuarios SET rol=? WHERE id_usuario=?");
        $sentence->execute(array($rol, $idUsuario));
    }

    function getUser($email){
        $sentence = $this->db->prepare(
            "SELECT *
            FROM usuarios
            WHERE email=?");
        $sentence->execute(array($email));
        $user = $sentence->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function getUsers(){
        $sentence = $this->db->prepare("SELECT id_usuario, nombre, email, rol FROM usuarios");
        $sentence->execute();
        $users = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function deleteUserFromDB($userEmail){
        $sentence = $this->db->prepare("DELETE FROM `usuarios` WHERE email=?");
        $sentence->execute(array($userEmail));
    }
}