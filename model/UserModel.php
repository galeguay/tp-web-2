<?php

class UserModel{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function addUser($nombre, $email, $pass){
        $sentence = $this->db->prepare("INSERT INTO usuarios(nombre, email, contraseña) VALUES(?,?,?)");
        $sentence->execute(array($nombre, $email, $pass));
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
}