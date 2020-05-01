<?php

session_start();


$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertabl where name = '$name' && password='$pass' ";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo" <script>alert('Username Already Taken');</script>";
}
else{
  $reg= "insert into usertabl(name , password) values('$name','$pass')";
  mysqli_query($con, $reg);
  echo" <script>alert('Registeration Successfull');</script>";
   
}

 ?>
