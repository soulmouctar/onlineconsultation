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
<div class="bienv">Welcome</div>
	<form action="process_con.php" method="POST">
	    <div class="form-group">
	        <label for="inputEmail">Username</label>
	        <input type="text" class="form-control" name="usern" id="inputEmail" placeholder="username">
	    </div>
	    <div class="form-group">
	        <label for="inputPassword">Password</label>
	        <input type="password" class="form-control" name="pwd" id="inputPassword" placeholder="Password">
	    </div>
	    <div class="checkbox">
	        <label><input type="checkbox"> Remember me</label>
	    </div>
	    <button type="submit" class="btn btn-primary" name="submit">Login</button>
	    </fieldset>
	</form>
</div>
<p align="center"><?php include("footer.php"); ?></p>

</body>
</html>