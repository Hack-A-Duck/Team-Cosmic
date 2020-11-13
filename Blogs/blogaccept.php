<?php
    include "connection.php";
    
    session_start();

    $maal = $_GET['blog'];

    $maal = str_replace("'","&#39;",$maal);
        
    mysqli_query($conn, "insert into content(user,email,blog,heading) values('{$_SESSION['user']}','{$_SESSION['email']}','{$maal}','{$_GET['bheading']}');");

    header("Location: /view_blogs.php");

    $_SESSION["posted"] = 1;
    
?>