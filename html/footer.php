<?php
	require_once  $_SERVER['DOCUMENT_ROOT'] . "/PHP/sessionvar.php";
?>
<!DOCTYPE html>
<html>	
	<head lang="en">

		<!-- Encoding -->
		<meta charset="UTF-8">

		<!-- Mobile Specific Metas and encoding-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>

		<!-- CSS - Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">		<!-- Awesome fonts -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

		<!-- JS required for Bootstrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>

	<body>

		<footer class="navbar navbar-dark bg-dark fixed-bottom ">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#"> ArtoTan Inc. Copyright &copy; 2021</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"></a>
				</li>
				<li class="nav-item">
					<!-- will display username -->

					<button onclick="logout()" name="logoutBtn" id="logoutBtn" class="btn btn-dark" id="usrNameLabel" tabindex="-1"><?php
					$usrnameLabelValue = "Not Logged In";
				if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
					$usrnameLabelValue = $_SESSION["name"];
				} echo $usrnameLabelValue;?></a>
					
					<form method="post" name="logout" action="../PHP/logout.php">
					<input type="hidden" name="logoutVal" id="logoutVal" value=""> 
					
				</form>
				</li>
			</ul>
				<script>
					function logout(){
						var temp = document.getElementById("logoutVal");
						temp.value = "true";
						document.getElementById("logout").submit();
						location.reload();
					}
					</script>
			<span class="navbar-text">
				<button class="btn btn-primary" id="login" type="submit">sign up</button>
			</span>
		</footer>

	</body>
</html>
