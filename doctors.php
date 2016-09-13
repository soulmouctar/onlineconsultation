<!DOCTYPE html>
<html lang="en">
<head>
	<title> Doctors </title>
	<link href="styles/bootstrap.css" rel="stylesheet">
	<link href="styles/style.css" rel="stylesheet">
</head>
<body>
<?php include("menu.php") ?>
<div class="jumbotron">
<div class="bienv">Doctor registration Form</div>
	<form method="POST" action="process_reg.php">
	<fieldset>
	    <div class="form-group">
	        <label for="inputEmail">Username</label>
	        <input type="text" class="form-control" id="inputEmail" name="user" placeholder="Enter your Username" required>
	    </div>
	    <div class="form-group">
	        <label for="inputPassword">Password</label>
	        <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Your Password" required>
	    </div>
	    <div class="form-group">
	        <label for="inputEmail">Full Name</label>
	        <input type="text" class="form-control" id="inputEmail" name="name" placeholder="Full Name" required>
	    </div>
	    <div class="form-group">
	        <label for="inputEmail">Medical Qualification</label>
	        <input type="text" class="form-control" id="inputEmail" name="mq" placeholder="Medical Qualification" required>
	    </div>
	    <div class="form-group">
	        <label for="inputEmail">Adress</label>
	        <input type="text" class="form-control" id="inputEmail"	name="ad" placeholder="Adress" required>
	    </div>
	    <div class="form-group">
	        <label for="inputEmail">e-mail</label>
	        <input type="email" class="form-control" id="inputEmail" name="em" placeholder="Email" required>
	    </div>
	    <div class="form-group">
	        <label for="inputPassword">Phone Number</label>
	        <input type="number" class="form-control" id="inputPassword" name="ph" placeholder="Phone Number" required>
	    </div>
	     <div class="form-group">
	        <label for="inputEmail">Avalaible Time</label>
	        <input type="text" class="form-control" id="inputEmail"	name="at" placeholder="Avalaible Time" required>
	    </div>
	    <div class="checkbox">
	        <label><input type="checkbox"> Remember me</label>
	    </div>
	    <button type="submit" class="btn btn-primary" name="submit">Register</button>
	    </fieldset>
	</form>
</div>


</body>
</html>