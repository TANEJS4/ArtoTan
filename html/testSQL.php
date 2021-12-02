<?php
	

	//* connect to database
		$servername = "localhost";
		$username ="shivam";
		$password = "";
		$dbname ="places";
	
	//* create connection
		$conne = new mysqli($servername, $username, $password, $dbname);
		if ($conne->connect_error){
			die( "Connection failed to database - 2" . $conne->error) ;
		}
		$stmt = "SELECT objectID, name, latitude, longitude FROM objects ";
		$result =  $conne->query($stmt);
		while($row =  $result->fetch_assoc()){ 
			echo $row["objectID"] ;

		}
		echo "here";
	
		$conne->close(); 

?>
