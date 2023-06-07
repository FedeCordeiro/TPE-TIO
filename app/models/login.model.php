<?php

class login_model{
    private $db;
    public function __construct(){
    try{
        $this->db = new PDO('mysql:host=localhost;dbname=db_usuarios','root','');
      
    }catch(PDExeption $e){
        echo $e;
    }
}
}

?>