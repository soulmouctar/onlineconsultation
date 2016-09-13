<?php
         
    $pseudo=$_POST['usern']; $pass=$_POST['pwd'];
    try {
    	  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=onlineconsultation', 'root', '', $pdo_options);          	
    } catch (Exception $e) {
    	
    }

    $us;$pw;
     if (isset($_POST['submit']))
         {
	        $reponse=$bdd->query('SELECT COUNT(username) FROM tbluser WHERE (user_name="'.$pseudo.'" and password="'.$pass.'"));
	        while($donnees=$reponse->fetch())
	        {
		        if (($donnees['user_name']==1) and ($donnees['password']==1))
		        {
		        	//$us=$donnees[''];
		        	echo 'Welcome';
		        }	         
		        else
			        {
				        echo 'informations';
				        header('refresh:2;url=cnx.php');
			        }
	        }
	        
         }
?>