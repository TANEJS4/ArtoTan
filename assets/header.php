
<!DOCTYPE html>
<html lang="en">
		
	<head>
	<meta name="header" content="static header file"/>
			<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>


		<!-- CSS - Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">		<!-- Awesome fonts -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<!-- favicon -->

	</head>

	<body>
		<!-- js -->	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<!-- header -->
		<header id="home">

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="..\index.php">ArtoTan</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active"> 
								<a class="nav-link" href="..\index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://github.com/TANEJS4/ArtoTan">Github</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Sort by</a>
								<div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="assets\search.php">rating</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="assets\search.php">distance</a>
								</div>
							</li>
						</ul>
						<form class="form-inline my-2 my-lg-2">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> 
							<button class="btn btn-outline-success my-2 my-sm-0" type="button" id="searchButton" > Search</button>
						</form>
						
					</div>
			</nav>
		</header>
		<!-- JS for on click buttons   -->

		<!-- search -->
		<script type="text/javascript">
			document.getElementById("searchButton").onclick = function () {
			location.href = "assets\\search.php";
    };
</script>
	</body>
</html>