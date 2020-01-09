<?php
require_once("connect.php");
$user_name=$_POST['username'];
$password=$_POST['password'];
$loginquery=mysqli_query($connect,"SELECT * FROM users WHERE username=$user_name and password=$password");
//$numrows=mysqli_num_rows($loginquery);
echo "<script> alert('Welcome to Musicians' Website!');window.location.href='index.php'; </script>";

if($loginquery==TRUE){
    echo "<script> alert('Not a registered user!');window.location.href='login.php'; </script>";
}
?>