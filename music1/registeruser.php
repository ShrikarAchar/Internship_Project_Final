<?php
require_once("connect.php");
$user_name=$_POST['username'];
$password=$_POST['password'];
$conf_pass=$_POST['cpassword'];
if($conf_pass!=$password){
    echo "<script> alert('Confirm password again!');window.location.href='register.php?useradded=0'; </script>";
}
else{
    mysqli_query($connect,"INSERT INTO users(username,password) VALUES ('".$user_name."','".$password."')");
    header("Location:register.php?useradded=1");
}
?>