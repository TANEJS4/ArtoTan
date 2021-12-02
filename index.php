<!DOCTYPE html>
<html>
	<head lang="en">
		<title>ArtoTan – Homepage</title>

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

	<body  class=" bg-secondary">
		<?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/header.html';?>
	

		<main >
			<div class="container text-white">
				<div class="row row-cols-1">
					<!-- added p-lg-5 to add space on top (better job than margin for us) -->
					<div class="col-md-auto p-lg-5 mx-auto my-2">
						<div class="display-4">
							Find coffee!
						</div>
					</div>
				</div>
			</div>

			<div style="height: 100%">
				<div class="row row-cols-1">
					<div class="col-md-auto p-lg-5 mx-auto">
						<div class="col-lg-auto">
							<!-- Form to send it to database later on -->
							<form id="searchBox" action="http://localhost/html/result_sample.php" class="form-inline" method="post" >
								<div class="input-group">
									<input id="searchQuery" class="form-control form control" type="text" name="searchQuery" placeholder="Search" aria-label="Search for coffee shops">
									<button class="btn btn-dark mx-2" type="submit" id="searchButton">Search</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="row row-cols-1">
					<div class="col-md-auto mx-auto">
						<div class="col-lg-auto">
							<form id="dropDownOptions"  action="http://localhost/html/result_sample.php"  method="post" class="form-inline">
							<!-- <div class="input-group"> -->
								<label> Find shops by: </label>
									<div class="form-group">
									<button  type="submit" name="sortByDistance" id="sortByDistance" class="btn btn-light mx-2" >distance</a>
									<button type="submit" name="sortByRating" id="sortByRating" class="btn btn-light" >rating</a>
							</div>
								<!-- <button class="btn btn-dark btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Find shops by
								</button>
								<div class="dropdown-menu">
									<input  type="button" name="sortByDistance" id="sortByDistance" class="dropdown-item" href="/html/result_sample.php">distance</a>
									<div class="dropdown-divider"></div>
									<input name="sortByRating" id="sortByRating"class="dropdown-item" href="/html/result_sample.php">rating</a>
								</div> -->
							<!-- </div> -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/html/footer.html';?>
	</body>
	<!-- Local JS -->
	<script src="./js/index.js"></script>
</html>