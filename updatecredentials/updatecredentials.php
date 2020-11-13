<?php
    include("connection.php");

    $db = mysqli_query($conn, "select * from people;");

    session_start();


    {
    
        while($row = mysqli_fetch_object($db))
            {
                if(isset($_POST["passe"]) && $_POST["passe"] == $row->pass && $_SESSION["user"] == $row->user)
                {   
                $flag = 0;
                $mail = $_POST["email"];
                $db2 = mysqli_query($conn, "select * from people;");
                while($rowww = mysqli_fetch_object($db2)){

                    if($mail == $rowww->email or $_SESSION["email"] == $mail){
        
                        $flag = 1;
     
                    }

     
                }
                if($flag == 0){

                    mysqli_query($conn, "update people set email = '$mail' where email = '{$_SESSION['email']}' ;");
                    mysqli_query($conn, "update content set email = '$username' where email = '{$_SESSION['email']}' ;");
                    $_SESSION["email"] = $mail;
                    $_SESSION["changemail"] = 1;        
                             
          
                }
    
                else if($flag == 1){
                     $_SESSION["changemail"] = 0;
                     
                }

                }
                else if(isset($_POST["passe"]) and $_POST["passe"] != $row->pass && $_SESSION["user"] == $row->user){
    
                    $_SESSION["changemail"] = 0;
                    

                }
                    



                
                if(isset($_POST["passn"]) && $_POST["passn"] == $row->pass && $_SESSION["user"] == $row->user)
                {
                    $name = $_POST["name"];
                    mysqli_query($conn, "update people set name = '$name' where user = '$row->user' ;");
                    $_SESSION["namech"] = 1;
                                        
                }
                else if(isset($_POST["passn"]) && $_POST["passn"] != $row->pass && $_SESSION["user"] == $row->user)
                {
                    $_SESSION["namech"] = 0;
                     
                }
                
                                   



                if(isset($_POST["oldpassword"]) &&  $_POST["oldpassword"] == $row->pass && $_SESSION["user"] == $row->user)
                {
                    $newpass = $_POST["newpassword1"];

                    if($_POST["newpassword1"] == $_POST["newpassword2"] && strlen($_POST["newpassword1"]) > 8){
                         mysqli_query($conn, "update people set pass = '$newpass' where user = '$row->user' ;");
                          $_SESSION["changepass"] = 1;
                    }
                    else if(strlen($_POST["newpassword1"]) < 8){
                          $_SESSION["changepass"] = 2;
                    }
                    else if($_POST["newpassword1"] != $_POST["newpassword2"])
                           $_SESSION["changepass"] = 0;

                   
                }
                else if(isset($_POST["oldpassword"]) &&  $_POST["oldpassword"] != $row->pass && $_SESSION["user"] == $row->user){
                       $_SESSION["changepass"] = 3;
                       
                }

                

                if(isset($_POST["username"]) && $_POST["passu"] == $row->pass && $_SESSION["user"] == $row->user)
                {   
                $flag = 0;
                $username = $_POST["username"];
                $db2 = mysqli_query($conn, "select * from people;");
                while($roww = mysqli_fetch_object($db2)){

                    if($username == $roww->user or $_SESSION["user"] == $username){
        
                        $flag = 1;
     
                    }

     
                }
                if($flag == 0){

                    mysqli_query($conn, "update people set user = '$username' where user = '{$_SESSION['user']}' ;");
                    mysqli_query($conn, "update content set user = '$username' where user = '{$_SESSION['user']}' ;");
                    $_SESSION["user"] = $username;
                    $_SESSION["changeuser"] = 1;        
                             
          
                }
    
                else if($flag == 1){
                     $_SESSION["changeuser"] = 0;
                     
                }

                }
                else if(isset($_POST["username"]) and $_POST["passu"] != $row->pass && $_SESSION["user"] == $row->user){
    
                    $_SESSION["changeuser"] = 0;
                    

                }                      

        }  

        

     header("Location: /myacc.php"); 
                 
    } 
          
    
?>


/*if($_SESSION["user"] == $row->user && isset($_POST["username"]) && $_POST["username"] != null)
                {
                    $username = $_POST["username"];
                    $flag = 0;
                    
                    while($bro = mysqli_fetch_object($db))
                    {   
                        
                        if($bro->user == $username && $bro->user != $row->user)
                            $flag = 1;
                            break;
                    }
                        
                        if($flag == 0){
                           mysqli_query($conn, "update people set user = '$username' where user = '$row->user' ;");
                           $_SESSION["user"] = $username;
                           $_SESSION["changeuser"] = 1;
                        }
                        else
                           $_SESSION["changeuser"] = 0;
                    

                } */


/* while($row = mysqli_fetch_object($db))
            {
                if($username == $row->user and $_SESSION["user"] != $row->user)
                {
                    $flag = 1;
                }
                
            }           
             
            if($flag == 0)
            {          
                mysqli_query($conn, "update people set user = '$username' where user = '{$_SESSION['user']}' ;");
                $_SESSION["user"] = $username;
                $_SESSION["changeuser"] = 1;
            }
            else if($flag == 1)
                $_SESSION["changeuser"] = 0; 
        } */