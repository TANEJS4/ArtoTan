<?php
//? TO BE USED FOR COPY-PASTE 
	//* connect to database
		$servername = "localhost";
		$username ="shivam";
		$password = "";
		$dbname ="artotan";
	
	//* create connection
		$conne = new mysqli($servername, $username, $password, $dbname);
		if ($conne->connect_error){
			die( "Connection failed to database - 2" . $conne->error) ;
		}

?>
