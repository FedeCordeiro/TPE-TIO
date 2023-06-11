<?php

require_once 'app/models/login_model.php';
require_once 'app/controllers/login.controller.php';
require_once "templates/login.tpl";

$controller= new login_controller();

$parteURL= explode('/', $_GET["action"]);

//Segunda parte

if($parteURL[0]==""){
    $controller->login();

}

//Tercera parte

if ($parteURL[0]=="login"){
    $controller->home();
}

?>
