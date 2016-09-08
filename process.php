<?php
include 'database.php';

//Check if form submitted
if(isset($_POST['submit'])){
	$sender = mysqli_real_escape_string($con, $_POST['sender']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	$doctor = mysqli_real_escape_string($con, $_POST['doctor']);
	
	//Set timezone
	date_default_timezone_set('Africa/Conakry');
	$time = date('h:i:s a',time());
	
	//Validate input
	if(!isset($sender) || $sender == '' || !isset($message) || $message == ''){
		$error = "Please fill in your name and a question";
		header("Location: index.php?error=".urlencode($error));
		exit();
	} else {
		$query = "INSERT INTO tblquestion (sender, message, doctor, time)
				VALUES ('$sender','$message','$doctor','$time')";
		
		if(!mysqli_query($con, $query)){
			die('Error: '.mysqli_error($con));
		} else {
			header("Location: index.php");
			exit();
		}
	}

}