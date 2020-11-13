<?php
    header("Pragma: no-cache");
    header('Cache-Control: no-cache, must-revalidate');
    session_start();
	session_unset();

    $_SESSION["status"] = "Passive";
?>

<!DOCTYPE html>

<!--#ED2553 is the main color-->

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login/Signup</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&amp;subset=latin,latin-ext'><link rel="stylesheet" href="./style.css">

</head>
<body style="background-image:url(mountain.jpg)">
<!-- partial:index.partial.html -->
<div class="materialContainer">


   <div class="box">

      <div class="title">LOGIN</div>
      <div style="color:red">Username already exists</div>

      <form action="/Login/process.php" method="post">

      <div class="input">
         <label for="name"></label>
         <input type="text" name="username" placeholder="Username" id="name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass"></label>
         <input type="password" name="pass" placeholder="Password" id="pass">
         <span class="spin"></span>
      </div>

      <div class="button login">
         <button><span>GO</span> <i class="fa fa-check"></i></button>
      </div>

      </form>

      <a href="" class="pass-forgot">Forgot your password?</a>

   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">REGISTER</div>

      <form method="post" action="/Login/regprocess.php">
      
      <div class="input">
         <label for="regpass"></label>
         <input type="text" name="regemail" placeholder="E-Mail" id="regemail">
         <span class="spin"></span>
      </div>    
      
      <div class="input">
         <label for="regname"></label>
         <input type="text" name="reguser" placeholder="Username" id="reguser">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass"></label>
         <input type="password" name="regpass" placeholder="Password" id="regpass">
         <span class="spin"></span>
      </div>
      
      <div class="button">
         <button><span>NEXT</span></button>
      </div>

      </form>

   </div>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.0.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.0.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

</body>
</html>
