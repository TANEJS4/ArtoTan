<?php 
	require_once  $_SERVER['DOCUMENT_ROOT'] . "/PHP/sessionvar.php";

	echo "\nlogin";

	if (isset($_SESSION["name"]))
	{
		echo "\nexited";
		header("location:../index.php");
	}
		//* connect to database
		$servername = "localhost";
		$username ="shivam";
		$password = "";
		$dbname ="artotan";
		// $dsn = 'mysql:dbname=artotan;host=localhost';
		// $dbUser = 'shivam';
		// $dbPassword = '';
		// try {
		// 	$connection = new PDO($dsn, $dbUser, $dbPassword);
		// } catch (PDOException $exception) {
		// 	$_SESSION['messages'][] = 'Connection failed: ' . $exception->getMessage();
		// 	header('Location: ../html/registration.php'); // redirect back to registration.php
		// 	exit; // exit script
		// }
$connection = new mysqli($servername, $username, $password, $dbname);
		if ($connection->connect_error){
			die( "Connection failed to database - 2" . $connection->error) ;
		}
// if (isset($_POST["login"]))
// {
    if (!empty($_POST["oldUserUsrName"]) && !empty($_POST["oldUserPassword"]))
    {
		echo "\ninside if";
        $name = $_POST["oldUserUsrName"];
        $password = $_POST["oldUserPassword"];
		echo $name . " " . $password;
        $sql = "SELECT * FROM users WHERE username LIKE ? and password LIKE ?" ;

		$stmt = $connection->prepare($sql);
		$stmt->bind_param("ss",$name,$password);
		$stmt->execute();
		$result = $stmt->get_result();

        if ($result ->num_rows > 0)
        {
            // Saving the username and password as cookies
            // if (!empty($_POST["rememberme"]))
            // {
				echo "\n inside remember me";
  
                // Username is stored as cookie for 10 years as
                // 10years * 365days * 24hrs * 60mins * 60secs
                setcookie("oldUserUsrName", $name, time() +
                                    (  5 * 60));
  
                // Password is stored as cookie for 10 years as 
                // 10years * 365days * 24hrs * 60mins * 60secs
                setcookie("oldUserPassword", $password, time() +
                                    (  5 * 60));
  
                // After setting cookies the session variable will be set
                $_SESSION["name"] = $name;
				$_SESSION['loggedin'] = true;
  
            // }
            // else
            // {
            //     if (isset($_COOKIE["oldUserUsrName"]))
            //     {
            //         setcookie("oldUserUsrName", "");
            //     }
            //     if (isset($_COOKIE["oldUserPassword"]))
            //     {
            //         setcookie("oldUserPassword", "");
            //     }
            // }
            header("location:../index.php");
        }
	// }
        else
        {
            $message = "Invalid Login Credentials";
        }
    }
    else
    {
        $message = "Both are Required Fields. Please fill both the fields";
    }
// }
?>