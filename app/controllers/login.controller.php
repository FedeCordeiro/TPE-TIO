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

// Segunda parte

function login(){

    $this->view-> mostrar();
}

//Tercera parte

function home(){
    $user= $_POST["user"];
    $pass=$_POST["password"];
    $usuario=$this->model->get_usuarios($user);
   
     if($usuario->name==$user && password_verify($pass,$usuario->password)){
         $this->view->mostrar_home($user);
     
     }else{
     
         $this->view-> mostrar("Usuario o contraseña incorrecta");
    }
 }

    

