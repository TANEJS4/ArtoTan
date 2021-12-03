<?php
	require_once  $_SERVER['DOCUMENT_ROOT'] . "/PHP/sessionvar.php";

	if (isset($_POST['logoutVal'])){
		$boolVal = $_POST['logoutVal'];
		if (!empty($boolVal)){				
			session_destroy();
			unset($_SESSION["loggedin"]);
			unset($_SESSION["name"]);
			session_unset();
			$_SESSION = array();
		}
		// if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			// if (session_status() === PHP_SESSION_ACTIVE ){		

			// 	session_unset();
			// }session_unset();
			// $_SESSION = array();
	}
	header('Location: ../index.php');
	exit;
?>