<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
	//* check connoection database
		$servername = "localhost";
		$username ="root";
		$password = "";
		$conn = new mysqli($servername, $username, $password); // Create connection
	
	//* Check connection
		if ($conn->connect_error){
			die( "Connection failed - 1" . $conn->connect_error) ;
		}
		$conn->close();
	
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
		
		$locName = $_POST['addLocFormLocName'];
		$locDesc = $_POST['addLocFormLocDesc'];
		$locLat = $_POST['addLocFormLocLat'];
		$locLong = $_POST['addLocFormLocLong'];
		// TODO connect to S3 and get path? 
		// $locImg = $_POST['addLocFormLocImg']; 
		

	// SQL query
		//! okay, when i tried the commented line it did not work apparaently sql had issues understanding the variables
		// $sql = "INSERT INTO objects (name, description, latitude,  longitude) VALUES ( '$locName' ,'$locDesc' , $locLat, $locLong)";

		//? So i found this another method at https://phpdelusions.net/mysqli_examples/insert, 
		//? it is basically a normal query but we let mysqli to add in the parameters however it deems fit
		$sq? = "INSERT INTO objects (name, description, latitude,  longitude) VALUES (?,?,?,?)";

		//? prepare actually sends the query to db but db waits for the parameters and then executes the sql 
		$stmt= $conne->prepare($sql);

		//? and here is where we "bind paramters" to the sql query. not much to explain tbh 
		//? 's' -> strings, 'd' -> float/double
		$stmt->bind_param("ssdd",$locName ,$locDesc , $locLat, $locLong);

		//* check sql Query
		if ($stmt->execute() === TRUE){ //? Executed without errors
			echo "successful";
		} else { //? query Failed
			die( "Connection failed to database -3" . $conne->error) ;
		}
		$conne->close(); 
	} else {
		echo "Invalid request";
	}
?>
