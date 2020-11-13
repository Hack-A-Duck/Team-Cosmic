<?php
    
    include("connection.php");
    session_start();
    session_unset();

    $_SESSION["status"] = "Passive";
    
    header("Location: /index.php");    

?>