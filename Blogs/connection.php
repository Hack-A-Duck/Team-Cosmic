<?php  

    $servername = "localhost";  
    $username = "root"; 
    $password = "4761";  //put your own username and password
    $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
    $sql = mysqli_select_db ($conn, 'cosmic') or die("unable to connect to database"); //change database name to your convenience

?>