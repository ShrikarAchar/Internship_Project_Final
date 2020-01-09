<?php
require_once('connect.php');
$ip = $_SERVER['REMOTE_ADDR'];
$time = time();
$timeout = 60*60*12; //24 hours
$out = $time - $timeout;
$name = $_GET['artist_name'];
$old_rating=mysqli_query($connect,"SELECT * FROM artists WHERE artist_name='$name' ");
$row = mysqli_fetch_assoc($old_rating);
if(isset($_POST['rating'])){
    $new_rating=$_POST['rating'];
    if( $row['rating'] >= 0 ) 
        mysqli_query($connect, "UPDATE artists SET rating=rating+$new_rating WHERE artist_name='$name'");
    header("Location:artist.php?id=$name&success=1");
}
else{
    echo "<script> alert('Please select rating!');window.location.href='artist.php?id=$name&success=0'; </script>";
    //header("Location:artist.php?id=$name&success=0");
}
?>