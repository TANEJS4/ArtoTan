<?php 
	// set session variables
	if(session_status() === PHP_SESSION_DISABLED){

	session_start();
	}
	if (isset($_SESSION['loggedin']) and !empty($_SESSION['loggedin'])) {
        echo "\n";
    } else {
		$_SESSION['loggedin'] = false;

	}
	if (isset($_SESSION['alert']) and !empty($_SESSION['alert'])) {
        echo "\n";
    } else {
		$_SESSION['alert'] = -1;

	}
?>