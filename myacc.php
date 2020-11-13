 <?php
    include "connection.php";
    
    session_start();
        
     $flag = 1;

     if(isset($_SESSION["status"]) && $_SESSION["status"] == "Active"){
        $flag = 0;
         
?>
<?php
 if(isset($_SESSION['bloggone']) && $_SESSION['bloggone'] == 1){
?>
    <script>
        alert("Blog has been deleted!");
    </script>

<?php
    unset($_SESSION['bloggone']);
}
?>


    <!DOCTYPE html>
    <html lang="en" style="scroll-behavior: smooth">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

        <title>My Account</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-style.css">
        <link rel="stylesheet" href="assets/css/owl.css">

    </head>

    <body class="is-preload" style="background-image: url(mountain.jpg);background-attachment: fixed;">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
            <div id="main">
                <div class="inner" style="opacity:0.7">

                    <!-- Header -->
                    <header id="header">
                        <div class="logo">
                            <a href="index.php">TIDBITS</a>
                        </div>
                    </header>

                    <!-- Page Heading -->
                    <div class="page-heading">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 style="text-align:center">MY ACCOUNT</h1>
                                </div>
                            </div>
                        </div>
                    </div>



                    <br>
                    <br>







                    <!-- Tab links -->
                    <div class="tab">
                        <script>
                            document.getElementById("defaultOpen").click();
                        </script>
                        
                        <button class="tablinks" onclick="openCity(event, 'ea')" id="defaultOpen">EDIT ACCOUNT</button>
                        <button class="tablinks" onclick="openCity(event, 'da')">DELETE ACCOUNT</button>
                        <button class="tablinks" onclick="openCity(event, 'vmb')">VIEW MY BLOGS</button>
                        <button class="tablinks" onclick="openCity(event, 'dmb')">DELETE MY BLOGS</button>
                    </div>

                    <!-- Tab content -->
                    <div id="ea" class="tabcontent" style="padding: 20px;">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-heading">

                                        <button class="accordion">EDIT EMAIL-ID</button>
                                        <div class="panel" style="padding-top:10px;padding-bottom:10px">

                                        <form id="mailchange" action="/updatecredentials/updatecredentials.php" method="post">

                                            <p> UPDATED E-MAIL</p>
                                            
                                            <div class="col-md-6">
                                            <fieldset>
                                                <input name="email" type="text" class="form-control" id="name" placeholder="" required="">
                                            </fieldset>
                                            </div><br/>
                                            
                                            <p> PASSWORD</p>
                                            
                                            <div class="col-md-6">
                                            <fieldset>
                                                <input name="passe" type="password" class="form-control" id="name" placeholder="" required="">
                                            </fieldset>
                                            </div><br/>
                                            
                                            <div style="margin-left: 15px;" class="primary-button">
                                                <button >SUBMIT</button>
                                            </div><br/>
                                        </form>
                                            <?php
                                                if(isset($_SESSION["changemail"]) && $_SESSION["changemail"] == 1){
                                            ?>
                                                <script>
                                                    alert("E-mail has been succesfully changed!");
                                                </script>
                                            <?php 
                                                unset($_SESSION['changemail']);
                                                }
                                                else if(isset($_SESSION["changemail"]) && $_SESSION["changemail"] == 0){
                                            ?>
                                                <script>
                                                    alert("E-mail couldn't be changed, wrong password or e-mail is already registered!");
                                                </script>
                                            <?php
                                                unset($_SESSION['changemail']);
                                                }
                                            ?>
                                                
                                        </div>



                                        <button class="accordion">EDIT NAME</button>

                                        <div class="panel" style="padding-top:10px;padding-bottom:10px">
                                        <form id="namechange" action="/updatecredentials/updatecredentials.php" method="post">
                                            <p>NAME</p>
                                            <div class="col-md-6">
                                            <fieldset>
                                                <input name="name" type="text" class="form-control" id="name" placeholder="" required="">
                                            </fieldset>
                                            </div><br/>
                                            <p>PASSWORD</p>
                                            <div class="col-md-6">
                                            <fieldset>
                                                <input name="passn" type="password" class="form-control" id="name" placeholder="" required="">
                                            </fieldset>
                                            </div><br/>
                                            <div style="margin-left: 15px;" class="primary-button">
                                                <button>SUBMIT</button>
                                            </div>
                                        </form>
                                            <?php
                                                if(isset($_SESSION["namech"]) && $_SESSION["namech"] == 1){
                                            ?>
                                                <script>
                                                    alert("Name has been succesfully changed!");
                                                </script>
                                            <?php 
                                                unset($_SESSION['namech']);
                                                }
                                                else if(isset($_SESSION["namech"]) && $_SESSION["namech"] != 1){
                                            ?>
                                                <script>
                                                    alert("Name couldn't be changed, wrong password!");
                                                </script>
                                            <?php
                                                unset($_SESSION['namech']);
                                                }
                                            ?>
                                            
                                        </div>



                                        <button class="accordion">EDIT USERNAME</button>
                                        <div class="panel" style="padding-top:10px;padding-bottom:10px">
                                        <form id="contact" action="/updatecredentials/updatecredentials.php" method="post">
                                            <p>NEW USERNAME</p>
                                            <div class="col-md-6">
                                            <fieldset>
                                                <input name="username" type="text" class="form-control" id="name" placeholder="" required="">
                                            </fieldset>
                                            </div><br/>
                                            <p>PASSWORD</p>
                                            <div class="col-md-6">
                                            <fieldset>
                                                <input name="passu" type="password" class="form-control" id="name" placeholder="" required="">
                                            </fieldset>
                                            </div><br/>
                                            
                                            <div style="margin-left: 15px;" class="primary-button">
                                               <button>SUBMIT</button>
                                            </div>
                                        </form>
                                            <?php
                                                if(isset($_SESSION["changeuser"]) && $_SESSION["changeuser"] == 1){
                                            ?>
                                                <script>
                                                    alert("Username has been succesfully changed!");
                                                </script>
                                            <?php 
                                                unset($_SESSION['changeuser']);
                                             }
                                                else if (isset($_SESSION["changeuser"]) && $_SESSION["changeuser"] == 0){
                                            ?>
                                                <script>
                                                    alert("Username couldn't be changed, wrong password or username already exists!");
                                                </script>
                                            <?php
                                                unset($_SESSION['changeuser']);
                                                }
                                            ?>
                                        </div>



                                        <button class="accordion">EDIT PASSWORD</button>
                                        <div class="panel" style="padding-top:10px;padding-bottom:10px">
                                        <form id="contact" action="/updatecredentials/updatecredentials.php" method="post">
                                            <p>OLD PASSWORD</p>
                                            <div class="col-md-6">
                                            <fieldset>
                                                <input name="oldpassword" type="password" class="form-control" id="name" placeholder="" required="">
                                            </fieldset>
                                            </div><br/>
                                            <p>NEW PASSWORD</p>
                                            <div class="col-md-6">
                                            <fieldset>
                                                <input name="newpassword1" type="password" class="form-control" id="name" placeholder="" required="">
                                            </fieldset>
                                            </div><br/>
                                           
                                            <p>CONFIRM NEW PASSWORD</p>
                                            <div class="col-md-6">
                                            <fieldset>
                                                <input name="newpassword2" type="password" class="form-control" id="name" placeholder="" required="">
                                            </fieldset>
                                            </div><br/>
                                            <div style="margin-left: 15px;" class="primary-button">
                                                <button>SUBMIT</button>
                                            </div>
                                        </form>
                                            <?php
                                                if(isset($_SESSION["changepass"]) && $_SESSION["changepass"] == 1){
                                            ?>
                                                <script>
                                                    alert("Password has been succesfully changed!");
                                                </script>
                                            <?php 
                                                unset($_SESSION['changepass']);
                                             }
                                             else if(isset($_SESSION["changepass"]) && $_SESSION["changepass"] == 0){
                                            ?>
                                                <script>
                                                    alert("Password don't match!");
                                                </script>
                                            <?php
                                                unset($_SESSION['changepass']);
                                                }
                                                else if(isset($_SESSION["changepass"]) && $_SESSION["changepass"] == 2){
                                            ?>
                                                <script>
                                                    alert("Password should be more than 8 characters!");
                                                </script>
                                            <?php
                                                unset($_SESSION['changepass']);
                                                }
                                                else if(isset($_SESSION["changepass"]) && $_SESSION["changepass"] == 3){
                                            ?>
                                                <script>
                                                    alert("Wrong password!");
                                                </script>
                                            <?php
                                                unset($_SESSION['changepass']);
                                                }

                                            ?>

                                            
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div id="da" class="tabcontent" style="padding: 20px;">
                        <p> ENTER PASSWORD</p>
                        <form method="post" action="/DeleteAccount/deluser.php">
                        <div class="col-md-4">
                                        <fieldset>
                                        <input name="passdel" type="password" class="form-control" id="name" placeholder="" required="">
                                        </fieldset>
                        </div><br/>
                        <h4 style="color:Tomato; text-align:left;font-size:small">ONCE YOU PRESS THE BUTTON BELOW YOU CANNOT RETRIEVE YOUR ACCOUNT. ALL YOUR BLOGS AND THEIR CONTENT WILL BE DELETED. YOU'LL HAVE TO CREATE A NEW ACCOUNT.</h4>
                        <br/><div style="margin-left: 15px;text-align:left" class="primary-button" >
                             <button style="background:red;color:white;border-color:red;align-content:flex-end">DELETE</button>
                        </div>
                        </form>
                                            
                                            <?php                                                 
                                             if(isset($_SESSION["del"]) && $_SESSION["del"] == 0){
                                            ?>
                                                <script>
                                                    alert("Account couldn't be deleted, wrong credentials!");
                                                </script>
                                            <?php
                                                unset($_SESSION['del']);
                                                }
                                            ?>
                                            
                    </div>

                    <div id="vmb" class="tabcontent">
                        
                        <?php
                        $result = mysqli_query($conn, "select * from content;");
                        while($row = mysqli_fetch_object($result)){

                            if($row->user == $_SESSION["user"]){
                        ?>
                        
                        
                        <!-- Simple Post -->
                                    <section class="simple-post" style="background-color:rgb(164, 54, 149);padding:40px;opacity:1;margin-top:10px">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="down-content">
                                                        <h1 style="color:snow"><?php echo $row->heading; ?></h1>
                                                        <p style="color:snow">

                                                        <?php
                                                               
                                                                           $example = array($row->blog);
                                                               
                                                               
                                                                           $arr = explode(".",$row->blog);
                                                                           $size = sizeof($arr);
                                                               
                                                                           for($i = 0 ; $i<($size-3); $i++)
                                                                           {
                                                                               array_pop($arr);
                                                                           }
                               
                                                                           echo implode(".", $arr);
                                                               
                                                                                                                            
                                                            ?>
                                               
                                                        </p>
                                                         <br />
                                                        <form style="text-align:center" method="get" action="/display.php">
                                                            <input type="hidden" name="blogid" value="<?php echo $row->id ?>" />
                                                            <button style="border-color:transparent;margin:0px;padding:10px;"><a style="font-size:13px;color:lightpink;" name="view" >read blog</a></button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                
                <?php }
                     }   
                ?>
                    </div>
                    <div id="dmb" class="tabcontent">
                        <?php
                        $result = mysqli_query($conn, "select * from content;");
                        while($row = mysqli_fetch_object($result)){

                            if($row->user == $_SESSION["user"]){
                        ?>
                        
                        
                        <!-- Delete Blog -->
                                    <section class="simple-post" style="background-color:rgb(164, 54, 149);padding:10px;opacity:1;margin-top:10px">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="down-content">
                                                        <h1 style="color:snow"><?php echo $row->heading; ?></h1>                                                        

                                                        
                                                    </div>
                                                    <form method="get" action="/Blogs/blogdelete.php" style="text-align:right">
                                                    <input type="hidden" name="delblog" value=" <?php echo $row->id; ?>" />
                                                    <button style="background:red;color:white;border-color:red;align-content:flex-end">DELETE</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                
                <?php }
                     }   
                ?>
                    </div>



                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar" style="opacity:0.85">

                <div class="inner">

                    <!-- Search Box -->
                <nav>
                <ul>
                
                   <h1 style="color:snow;margin-left:-45px;margin-top:30px" >
                       <?php 
                       if(isset($_SESSION["user"])) { 
                            $dispname = $_SESSION["user"];
                            echo "$dispname"; 
                       } 
                       else 
                            echo "Guest"; 
                    ?>
                   </h1>
                
                </ul>
                </nav>

                    <!-- Menu -->
                    <nav id="menu">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="view_blogs.php">VIEW BLOGS</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li>
                                <a href="wb.php">WRITE BLOG</a>
                            </li>
                            <?php if($flag == 0){                     
                        ?>
                            <li><a href="">MY ACCOUNT</a></li>
                            <li><a href="/Login/logoutmech.php"> LOGOUT</a></li>
                            <?php }
                         else if($flag == 1){
                        ?>
                            <li><a href="/Login/login.php">LOGIN/REGISTER</a></li>
                            <?php } ?>
                        </ul>
                    </nav>

                    <!-- CONTACT US -->
                    <div class="featured-posts">
                        <div class="heading">
                            <h1 style="text-align:center;color:snow;font-size:30px">CONTACT US</h1>
                            <hr />
                        </div>
                        <p style="font-size:20px">Creators' Names</p>
                        <p style="font-size:12px">Abhishek Purty - IT k19</p>
                        <p style="font-size:12px">Amman Mohit Minz - Prod k19</p>
                        <p style="font-size:12px">Justin Arpit Indwar - ECE k19</p>
                        <p style="font-size:12px">Anirban Aditya Halder - ECE k19</p>
                        <hr />
                        <p style="font-size:20px">Phone/Whatsapp</p>
                        <p style="font-size:12px">+91 7544894946</p>
                        <p style="font-size:12px">+91 9650698089</p>
                        <p style="font-size:12px">+91 9905399111</p>
                        <p style="font-size:12px">+91 9971380184</p>
                        <hr />
                    </div>



                </div>
            </div>

        </div>

        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/accordion.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/transition.js"></script>
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/custom.js"></script>

        <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.0.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.0.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
    </body>



    </html>
    
    <?php } 
    
            else{

                header("Location: /index.php");
            }
    
    
    
    ?> 