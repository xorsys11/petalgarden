<?php

    
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
    }
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
    exit;

?>