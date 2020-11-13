<?php
     include("connection.php");
     $sql = "select * from people";
     $result = mysqli_query($conn, $sql);

     session_start();
     $_SESSION["status"] = "Passive";
     
     $flag = 0;

     while($row = mysqli_fetch_object($result)){

     if($_POST["reguser"] == $row->user){

        
        $flag = 1;
     
     }
     if(strlen($_POST["regpass"]) < 8){

        $flag = 2; 
  
     }
     if($_POST["regemail"] == $row->email){

        $flag = 3;

     }
     if(strpos($_POST["regemail"], "@") == false){

        $flag = 4;

     }

     
     }

    if($flag == 0){
     $name = $_POST["reguser"];
     $word = $_POST["regpass"];
     $email = $_POST["regemail"];

     $func = mysqli_query($conn, "insert into people(user,pass,email) values('$name', '$word', '$email')");
            
        $_SESSION["user"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["status"] = "Active";
       
       

        header("Location: /index.php");
        exit;

    
     
     
    }
    
    else if($flag == 1){
         header("Location: /Login/loginuserexists.php");
         exit;
     }
     else if($flag == 3){
        $_SESSION["mailgone"] = 1;
        header("Location: /Login/login.php");
        exit;
     }


     else if($flag == 2){
        $_SESSION["smol"] = 1;
        header("Location: /Login/login.php");
        exit;
     }

     else if($flag == 4){
        $_SESSION["@"] = 1;
        header("Location: /Login/login.php");
        exit;
     }
?>