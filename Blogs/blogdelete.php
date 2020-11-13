<?php
    include "connection.php";
    session_start();

    mysqli_query($conn, "delete from content where id = {$_GET['delblog']};");

    $_SESSION['bloggone'] = 1;

    header("Location: /myacc.php");
?>