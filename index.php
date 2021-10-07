<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home page – My Website</title>
	<head>
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>

		<!-- CSS - Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">		<!-- Awesome fonts -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<!-- favicon -->

	</head>

	<body class="bg-dark">
		<!-- js -->	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<div style="background-color:#202428">

		<!--  header file -->
		<?php require("./assets/header.php"); ?>
		
		<!-- will include search page -->
		<main >
			<div class="container text-center text-white">
				<!-- <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3"> -->
				<!-- <div class="row-md-5 p-lg-5 mx-auto my-5"> -->
				<div class="row row-cols-1">
					<div class="col-md-auto p-lg-5 mx-auto my-5">
						<div class="display-4">
							Find coffee!					
						</div>
					</div>
				</div>
			</div>
			<div class="container text-center">
				<div class="row row-cols-1">
					<div class="col-md-auto p-lg-5 mx-auto">
						<div class="col-lg-auto">
							<form class="form-inline">
								<div class="input-group">
									<input class="form-control form control" type="search" placeholder="Search" aria-label="Search for coffee shops"> 
									<button class="btn btn-outline-secondary mx-2" type="button" id="searchButton" > Search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--  footer file -->
		<?php require("./assets/footer.php"); ?>
		</div>
	</body>
</html>