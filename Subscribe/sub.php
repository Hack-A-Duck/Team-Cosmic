<?php
    include "connection.php";
    session_start();

    mysqli_query($conn, "insert into subscriptions(email,phone) values('{$_GET['email']}','{$_GET['phone']}'); ");

    $_SESSION['sub'] = 1;

    header("Location: /index.php ");

?>