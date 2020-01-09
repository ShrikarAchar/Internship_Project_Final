<?php
require_once('connect.php');

/*if($_POST['name'] == ""){
	echo "Error!";	
}else{*/
	$name    = $_POST['name'];
	$email   = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$feedback = mysqli_query($connect,"INSERT INTO feedback(name,email,subject,message) VALUES 
			('".$name."','".$email."','".$subject."','".$message."')") or die (mysql_error());
	header("Location:contact.php?success=1");		
//}
?>