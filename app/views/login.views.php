<?php

require_once "./libs/Smarty/Smarty.class.php";
class login_view
{

    
    function mostrar($mensaje=''){
        $smarty= new Smarty();
        $smarty-> assign('title', "LOGIN");
        $smarty-> assign('mensaje', $mensaje);
        $smarty-> display ('login.tpl');
    }
}