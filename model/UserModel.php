<?php


ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

class UserModel{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8','root','');
    }

    function addUser($nombre, $email, $pass){ //SI ES INVITADO VALOR DEL ROL ES 0, SI ESTA REGISTRADO ES 1 Y SI ADMIN ES 2
        $sentence = $this->db->prepare("INSERT INTO usuarios(nombre, email, contraseña, rol) VALUES(?,?,?,1)");
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