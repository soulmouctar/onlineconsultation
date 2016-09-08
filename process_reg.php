<?php
include 'database.php';

//Check if form submitted
if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$ad = mysqli_real_escape_string($con, $_POST['ad']);
	$med_qualification = mysqli_real_escape_string($con, $_POST['mq']);
	$email = mysqli_real_escape_string($con, $_POST['em']);
	$ph = mysqli_real_escape_string($con, $_POST['ph']);
	
	//Set timezone
	date_default_timezone_set('Africa/Conakry');
	$time = date('h:i:s a',time());
	
	//Validate input
	if(!isset($user) || $user == '' || !isset($pass) || $pass == ''){
		$error = "Please fill in informations about yourself";
		header("Location: index.php?error=".urlencode($error));
		exit();
	} else {
		$query = "INSERT INTO tbluser (user_name, password, full_name, medical_qualification,address, email, phone_number)
				VALUES ('$user','$pass','$name','$med_qualification','$ad','$email','$ph')";
		
		if(!mysqli_query($con, $query)){
			die('Error: '.mysqli_error($con));
		} else {

			?> 
			<div id="succes"> 
				<?php include("menu.php"); ?>
				<div class="jumbotron"> Registration Succres</div>
				</div>
			<?php
			header("Location: index.php?error=".urlencode($succes));
			//header("Location: index.php");

			exit();
		}
	}

}?>
