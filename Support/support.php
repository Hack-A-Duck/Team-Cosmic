<?php
    include "connection.php";
    session_start();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $query = $_POST["query"];

    mysqli_query($conn, "insert into faq(name, email, query) values('$name', '$email', '$query')");


    header("Location: /faq.php");

?>

