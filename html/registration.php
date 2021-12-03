<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ArtoTan - UserRegistration</title>

		<!-- Encoding -->
		<meta charset="UTF-8">

		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>

		<!-- Local CSS -->
		<link rel="stylesheet" href="../css/registration.css">

		<!-- CSS - Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

		<!-- JS - Required for Bootstrap -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>

	<body class="bg-secondary">
		<?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/header.html'?>

		<main class="container-flex">
            <?php require_once '../PHP/messages.php'; ?>
			<form id="regForm" action="../PHP/signup.php" method="post">
				<h1 id="formTitle">Register</h1>
<!--				<div class="regFormError"></div>-->
                <div>
                    <label for="regFormEmail">Email:</label>
                    <input type="email" id="regFormEmail" name="email">
                </div>
                <div>
					<label for="regFormUsername">Username:</label>
					<input type="text" id="regFormUsername" name="username" autofocus="">
				</div>
				<div>
					<label for="regFormPass">Password:</label>
					<input type="password" id="regFormPass" name="password">
				</div>
                <div>
                    <label for="regFormConfirmPass">Confirm Password:</label>
                    <input type="password" id="regFormConfirmPass" name="confirmPassword">
                </div>
				<div>
					<label for="regFormDOB">Date of Birth:</label>
					<input type="date" id="regFormDOB" name="dob">
				</div>
				<input id="regFormButton" type="submit" value="Sign Up">
			</form>
		</main>

		<?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/footer.html'?>
	</body>
</html>