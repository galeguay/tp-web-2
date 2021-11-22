<?php

require_once "api/ApiView.php";

abstract class ApiController{
    protected $model;
    protected $view;
    private $data;


    public function __construct(){
        $this->view = new ApiView();
    }


    function getData() {
        $this->data = file_get_contents("php://input");
        return json_decode($this->data);
    }
}