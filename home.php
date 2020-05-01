<?php

session_start();
if(!isset($_SESSION['Username'])){
  header('location:login.php');
}
?>
 <html>
 <head>
  <title>Home Page</title>
  <link rel="stylesheet" type="text/css" href="stylee.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
 </head>
 <body>
    <center><h1>Welcome <?php echo $_SESSION['Username']; ?></h1></center>
    <a href="logout.php">Logout</a>

  </div>
 </body>
 </html>
