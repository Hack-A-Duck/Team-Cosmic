<?php
     include("connection.php");
     $sql = "select * from people";
     $result = mysqli_query($conn, $sql);

     session_start();
     
    

     
     $flag = 0;

     while($row = mysqli_fetch_object($result)){

     if($_SESSION["user"] == $row->user && $_POST["passdel"] == $row->pass){

        $_SESSION["status"] = "Passive";

        $name = $_SESSION['user'];
        $func = mysqli_query($conn, "delete from people where user = '$name' ");

        $db = "delete from content where user = '{$_SESSION["user"]}';";
        mysqli_query($conn, $db);

        unset($_SESSION['user']);
        unset($_SESSION['email']);

        $_SESSION["del"] = 1;
        $flag = 1;
        header("Location: /myacc.php");
        
        exit;
     
     }
     else if($_SESSION["user"] == $row->user && $_POST["passdel"] != $row->pass){
         
         $_SESSION["del"] = 0;

        header("Location : /myacc.php");

        exit;

     }
        
    
     }

     
     



   
    
   
?>