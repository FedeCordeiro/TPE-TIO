<?php

require_once "app/models/login.model.php";
require_once "app/views/login.views.php";

class login_controller{

    private $view;
    private $model;
    private $title;

}
    function __construct(){
   
    $this->view= new login_view();
    $this->model= new login_model();
    $this->title= "Login";
    

}
