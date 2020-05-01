<html>
<head>
  <title>login page</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="login-box">
      <h2>Login Here</h2>
      <form action="validation.php" method="post">
         <div class="form-group">
           <label>Username</label>
           <input type="text" name="user" class="form-control" required>
         </div>
         <div class="form-group">
           <label>Password</label>
           <input type="password" name="password" class="form-control" required>
         </div>
         <button type="submit" class="btn">Log In</button>
         <p>Don't have an account?  <a class="sign in" href="http://localhost/new%20project/Sign%20up.php">Sign up.</a></P>


       </form>

   </div>



</body>
</html>
