<?php include 'database.php';
	//Create Select Query
	$query = "SELECT * FROM tblquestion ORDER BY id DESC";
	$quz = mysqli_query($con, $query);
?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Health Quz Application</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php include("menu.php"); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
     
     <div class="container">
      
      <div class="col-lg-12" style="margin-left: auto; margin-right:auto;">
                <h1><?php echo date("l, d F, Y"); ?></h1>
                <div style="float: left;">
                  <img src="images/doctor24.jpg" alt="Doctor">
                </div>
      <p style="float:right; color:white;">
        The application is going to have two interfaces, members interface and user interface.
        The member’s interface will allow doctors to register themselves to the application and be candidate for answering people’s questions.
        The visitor interface is the main interface of the application, from this interface, visitors can see the available doctors online, and can be able to select a doctor for their questions.
        The can send questions simply by selecting doctor name, typing their name, phone number and the question, and then click send.
        After clicking send button, the question will be listed on the screen.</p>
      </div>
    </div>
    </div>
</div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
            <div class="well">

                  <hr>

                    <div class="row">
                        <div class="col-md-12">
                <table class="table table-striped"> 
										<tr class="success" style="color:green; font-size:18px;">
										<td><strong>Time</strong></td>
										<td><strong>Sender Name</strong></td>
										<td><strong>Question Description</strong></td>
										<td><strong>Doctor Name</strong></td>
										</tr>
									<?php while($row = mysqli_fetch_assoc($quz)) : ?>																	
										<tr>
											<td><em><?php echo $row['time'] ?> </em></td>
											<td><strong><?php echo $row['sender'] ?></strong></td>
											<td><em> <?php echo $row['message'] ?></em></td>
											<td></strong><?php echo $row['doctor'] ?></strong></td> 
											</tr>																
									<?php endwhile; ?>

									</table>		

                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            
                            <div id="input">
								<?php if(isset($_GET['error'])) : ?>
								<div class="error"><?php echo $_GET['error']; ?></div>
								<?php endif; ?>
							<form method="post" action="process.php">
										<input class="form-control" id="inputSuccess4" type="text" name="sender" placeholder="Enter Your Name" />
										<input class="form-control" id="inputSuccess4" type="text" name="doctor" placeholder="Enter Doctor Name" /><br />
										<textarea class="form-control" rows="3" type="textarea" name="message" placeholder="Enter A Message" /></textarea><br />
										
									<br />
									<input class="btn btn-success" type="submit" name="submit" value="Send" />
							</form>
			         </div>
                     </div>
                    </div>

                    <hr>

                    <div class="row">
                        
                    </div>

                </div>


      <hr>

      <footer>
        <p>&copy; 2016 Health Questions App, Guinea.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="styles/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>



