<?php

    $array = array("tiago" => "123", "lucas" => "abc", "nicolas" => "qwe");

    session_start();

    $user = strtolower($_REQUEST["user"]);
    if (array_key_exists($user,$array)){
        
        $pass = $array[$_REQUEST["user"]];
        if ( $pass == $_REQUEST["pass"]){
        
            $_SESSION["loggedin"] = true;
            header("Location: http://localhost/login/logado.php");
            die();
            
        }else{
            session_destroy();
            header("Location: http://localhost/login/index.php");
            die();
        }
           
    }else{
    
        session_destroy();    
        header("Location: http://localhost/login/index.php");
        die();

    }
  
?>
