<?php
    include "connection.php";
    
    $sql = "select * from content;";    
    $result = mysqli_query($conn, $sql);    

    session_start();
        
     $flag = 1;

     if(isset($_SESSION["status"]) && $_SESSION["status"] == "Active"){
        $flag = 0;
     }

     if(isset($_SESSION["posted"]) && $_SESSION["posted"] == 1 ){
     ?>
    <!--  <script>
          alert("Blog Posted!");
      </script> -->
     <?php

     unset($_SESSION["posted"]);

     }

    
     
?>


<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Blogs</title>

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
            <div class="inner"  style="opacity:0.7;">

                <!-- Header -->
                <header id="header">
                    <div class="logo">
                        <a href="index.php">TIDBITS</a>
                    </div>
                </header>
                <br>
                <!-- Search Box -->
                
                    <div class="col-md-12">
                        <form method="get" style="text-align:center" action="/search.php">
                            <input type="text" name="search" class="form-control"  placeholder="Search..." /><br />
                            <button style="background-color:#52057b;color:snow" class="inner">Search</button>
                        </form>
                    </div>
                

                <?php while($row = mysqli_fetch_object($result)){
                ?>
                        <!-- Simple Post -->
                        <section class="simple-post" style="background-color:rgb(164, 54, 149);padding:40px;opacity:1;">
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
                                                               echo ".......";
                                                               
                                                              
                                                               
                                                ?>
                                                
                                                
                                            </p>
                                            <div style="color:snow;text-align:right;font-size:15px">
                                              <i> ~ by <?php echo $row->user ?> </i>
                                            </div>
                                            <br />
                                                <form style="text-align:center" method="get" action="/display.php">
                                                    <input type="hidden" name="blogid" value="<?php echo $row->id ?>" />
                                                    <button style="border-color:transparent;margin:0px;padding:10px;"><a style="font-size:13px;color:lightpink;">read blog</a></button>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                
                <?php }
                ?> 

              <!--  <section class="simple-post"  style="background-color:rgb(164, 54, 149);padding:40px;opacity:1" >
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-6" >
                                <h2 style="color:snow">02 Blog Heading</h2>
                                <p style="color:snow">Blog Content</p>
                                <br><br>

                            </div>
                            <div class="col-md-6" >
                                <h2 style="color:snow">02 Blog Heading</h2>
                                <p style="color:snow">Blog Content</p>

                            </div>
                        </div>

                    </div>
                </section>

                <section class="simple-post"  style="background-color:rgb(164, 54, 149);padding:40px;opacity:1">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-4">
                                <h2 style="color:snow">Blog Heading</h2>
                                <p style="color:snow">Blog Content</p>
                                <br>

                            </div>
                            <div class="col-lg-4">
                                <h2 style="color:snow">Blog Heading</h2>
                                <p style="color:snow">Blog COntent</p>
                                <br>

                            </div>
                            <div class="col-lg-4">
                                <h2 style="color:snow">Blog Heading</h2>
                                <p style="color:snow">Blog Content</p>

                            </div>
                        </div>

                    </div>
                </section> -->

                <!-- Contact Form -->
       <!--         <section class="contact-form" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="contact" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset>
                                                <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                            </fieldset>

                                            <div class="primary-button">

                                                <a href="#">SUBMIT</a>
                                            </div>
                                    </div>
                                </form>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>
                </section>  -->




                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar" style="opacity:0.85;" >





                <div class="inner" >

                    <!-- Search Box -->
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
                            <?php if($flag == 0){                     
                                 ?>
                                <li>
                                    <a href="wb.php">WRITE BLOG</a>
                                </li>
                                <?php } ?>
                        <?php if($flag == 0){                     
                        ?><li><a href="myacc.php">MY ACCOUNT</a></li> <li><a href="/Login/logoutmech.php"> LOGOUT</a></li><?php }
                         else if($flag == 1){
                        ?><li><a href="/Login/login.php">LOGIN/REGISTER</a></li><?php } ?>
                        </ul>
                    </nav>

                    <!-- CONTACT US -->
                    <div class="featured-posts">
                        <div class="heading">
                            <h1 style="text-align:center;color:snow;font-size:30px">CONTACT US</h1><hr />
                        </div>
                        <p style="font-size:20px">Creators' Names</p>
                        <p style="font-size:12px">Abhishek Purty - IT k19</p><p style="font-size:12px">Amman Mohit Minz - Prod k19</p><p style="font-size:12px">Justin Arpit Indwar - ECE k19</p><p style="font-size:12px">Anirban Aditya Halder - ECE k19</p><hr />
                        <p style="font-size:20px">Phone/Whatsapp</p>
                        <p style="font-size:12px">+91 7544894946</p><p style="font-size:12px">+91 9650698089</p><p style="font-size:12px">+91 9905399111</p><p style="font-size:12px">+91 9971380184</p><hr />
                        <!--<p style="font-size:20px">E-Mail</p>-->
                        <!--<p style="font-size:12px">ak124445@gmail.com</p><p style="font-size:12px">ammanminz@gmail.com</p><p style="font-size:12px"></p><p style="font-size:12px">anirbanhalder38@ymail.com</p><hr />-->
                    </div>



                </div>
            </div>

        </div>

        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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