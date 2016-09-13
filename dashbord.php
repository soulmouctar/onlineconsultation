<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Dashbord</title>        
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php include("menu.php"); ?>
    <nav class="menu" tabindex="0">
	      <div class="smartphone-menu-trigger"></div>
        <header class="avatar">
        		<img src="images/ehA.jpg" />
            <h2 style="color:white;">Usman</h2>
        </header>
    	<ul style="color:white;font-size:20px; font-style:bold;">
          <li tabindex="0" class="icon-dashboard"><span>Dashboard</span></li>
         
          <li tabindex="0" class="icon-settings"><span>Log-out</span></li>
      </ul>
    </nav>

<main style="margin-top:100px;" > 
<p style="text-align:center;font-size:30px; font-style:bold; color:green;" >Patient's diseases control</p>
  <?php include 'database.php';
  //Create Select Query
  $query = "SELECT * FROM tblquestion ORDER BY id DESC";
    $quz = mysqli_query($con, $query);
?>
                <table class="table table-striped"> 
                    <tr class="success" style="color:green; font-size:18px;">
                    <td><strong>Time</strong></td>
                    <td><strong>Sender Name</strong></td>
                    <td>
                      <strong>Question Description</strong>
                    </td>
                    <td><strong>Patient's Contact</strong></td>
                    </tr>
                  <?php while($row = mysqli_fetch_assoc($quz)) : ?>                                 
                    <tr>
                      <td><em><?php echo $row['time'] ?> </em></td>
                      <td><strong><?php echo $row['sender'] ?></strong></td>
                      <td><em> <?php echo $row['message'] ?></em></td>
                      <td></strong><?php echo $row['contact'] ?></strong></td> 
                      </tr>                               
                  <?php endwhile; ?>

                  </table>
  </main>
    <p align="center"><?php include("footer.php"); ?></p>
        <script src="js/index.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function() {
              $("#rep").hide();
              $("a").click(function(){
                $("a").parent().next().slideToggle(1000);
              });
          })
        </script>

<script type="text/javascript" src="node_modules/angular/angular.min.js"></script>
  </body>
</html>
