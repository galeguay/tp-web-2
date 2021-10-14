<?php

class UserModel{

    private function connectToDB(){
        return new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function addUser($nombre, $email, $pass){
        $db = $this->connectToDB();
        $sentence = $db->prepare("INSERT INTO usuarios(nombre, email, contraseña) VALUES(?,?,?)");
        $sentence->execute(array($nombre, $email, $pass));
    }

    function getUser($email){
        $db = $this->connectToDB();
        $sentence = $db->prepare(
            "SELECT *
            FROM usuarios
            WHERE email=?");
        $sentence->execute(array($email));
        $user = $sentence->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}