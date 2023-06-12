<?php

class login_model{
    private $db;
    
    public function __construct(){
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=db_usuarios', 'root', '');
        } 
        catch (PDOException $e) {
            echo $e;
        }
    }

    function get_usuarios($user){
        $sentense=$this->db->prepare("SELECT*from usuarios where name=?");
        $sentense->execute(array($user));
        return $sentense-> fetch(PDO::FETCH_OBJ);
    }
}

?>