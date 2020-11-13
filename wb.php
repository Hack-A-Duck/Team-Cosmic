<?php
    include "connection.php";
    
    session_start();
        
    $flag = 1;

     if(isset($_SESSION["status"]) && $_SESSION["status"] == "Active"){
        $flag = 0;
     
    
?>



        <!DOCTYPE html>
        <html lang="en" style="scroll-behavior: smooth">

        <head>
            <style>

            </style>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

            <title>Write Blog</title>

            <!-- Bootstrap core CSS -->
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


            <!-- Additional CSS Files -->
            <link rel="stylesheet" href="assets/css/fontawesome.css">
            <link rel="stylesheet" href="assets/css/templatemo-style.css">
            <link rel="stylesheet" href="assets/css/owl.css">

        </head>

        <body class="is-preload" style="background-image: url(mountain.jpg);background-attachment: fixed;">

            <!-- Wrapper -->
            <div id="wrapper" style="background-attachment: fixed;">

                <!-- Main -->
                <div id="main">
                    <div class="inner" style="opacity:0.7">

                        <!-- Header -->
                        <header id="header">
                            <div class="logo">
                                <a href="index.php">TIDBITS</a>
                            </div>
                        </header>


                         <section class="left-image" style="background-color:rgb(164, 54, 149);padding:30px;opacity:1">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="right-content">
                                            <p style="color:snow">
                                                Submitting a blog is probably the easiest part of the site. Just enter the title of your blog, and get started with the content below. <br /> If you want to get a bit more creative and add a bit of a personal touch to your blogs, you can use basic html heading and editing tags. We've got a list of them below for those who aren't familiar with it - <br />
                                                <br />1. &lt;i&gt;[Your Content]&lt;/i&gt; - Enclosing your text in this will add an <i>italic</i> style to it.
                                                <br />2. &lt;b&gt;[Your Content]&lt;/b&gt; - Enclosing your text in this will add an <b>bold</b> style to it.
                                                <br />3. &lt;u&gt;[Your Content]&lt;/u&gt; - Enclosing your text in this will add an <u>underlined</u> style to it.
                                                
                                                <br />4. &lt;p&gt;[Your Content]&lt;/p&gt; - Enclosing your text in this will put the text into a separate paragraph.
                                                
                                            </p>
                                         </div>
                                    </div>
                                </div>
                            </div>
                         </section>


                        <!-- FIRSTBLOG -->
                        <section class="left-image" style="background-color:rgb(164, 54, 149);padding:30px;opacity:1">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="right-content">
                                            <form method="get" action="/Blogs/blogaccept.php">
                                            <b><h2 style="color:snow" >WRITE YOUR BLOG</h2></b><br />
                                            
                                            <p style="color:snow">Enter blog heading:</p>
                                           
                                                <input type="text" id="fname"  class="form-control" name="bheading" size="70" required="">
                                           
                                            <br>

                                            <p style="color:snow">Enter your content:</p>
                                            
                                                <textarea name="blog" rows="15" class="form-control" id="blog" style="border-radius:0px" required=""></textarea>
                                            
                                            <div class="primary-button">
                                                <button style="background:#52057b;color:snow;border-color:#52057b">POST</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>

                <!-- Sidebar -->
                <div id="sidebar" style="opacity:0.85;">

                    <div class="inner">

                        <!-- Search Box -->
                        <nav>
                            <ul>

                                <h1 style="color:snow;margin-left:-45px;margin-top:30px">
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
                                ?>
                                <li><a href="myacc.php">MY ACCOUNT</a></li> <li><a href="/Login/logoutmech.php"> LOGOUT</a></li>
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