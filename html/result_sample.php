<?php 
	// session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$usrQuery = $_POST['searchQuery'];

		include $_SERVER['DOCUMENT_ROOT'] . '/php/connectDB.php';
		if (empty($usrQuery)){
		$stmt = "SELECT objectID, name, latitude, longitude FROM objects ";
		} else {
			$sql = "SELECT objectID, name, latitude, longitude FROM objects where LOWER(name) LIKE LOWER(%?%)";
			$stmt= $conne->prepare($sql);
			$stmt->bind_param("s",$usrQuery);
		}
		

					
?>
<!DOCTYPE html>
<html>
	<head lang="en">
		<title>ArtoTan – ResultSample</title>

		<!-- Encoding -->
		<meta charset="UTF-8">

		<!-- Mobile Specific Metas and encoding-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>

		<!-- CSS - Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

		<!-- JS required for Bootstrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- Google Maps Assets  -->
		<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
		<link rel="stylesheet" type="text/css" href="../css/google_maps.css"/>
	</head>

	<body class="bg-secondary">
		<!-- on startup place markers -->
		<script>
			window.onload = function () {
				markAll();
			}
		</script>

		<?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/header.html';?>


		<!-- used for JS to search for places -->
		<!-- MIGHT REMOVE -->
		<label hidden  name= "UsrQuery" id="UsrQuery"></label>

		<main>
			<div class="d-flex justify-content-center ">
				<div class="row"></div>
			</div>
		</main>

		<!-- Google Maps -->
		<div class="map-canvas" id="map">
			<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
			<script
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_GVZ23Wf8RyDMdb3XP_oi7erLjCG1wrM&callback=initMap&v=weekly"
				async
			></script>
		</div>
			<main>
		<div class="container">
			<div class="table-responsive">
				<table class="table table-hover table-borderless table-dark my-2">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">
							Info
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">A</th>
						<td>

							<button id="row1_label" class="btn btn-link" onclick="poiMark({ lat: 43.26225288818, lng: -79.90583551229605 },'row1_label')" >Decently Ok Coffee Shop<span class="sr-only">(current)</span></button>
							<button id="row1_more" class="btn btn-primary" style="float: right;" onclick="moreDetail('row1_label')">More details</button>
						</td>
					</tr>
					<tr>
						<th scope="row">B</th>
						<td>
							<button  id="row2_label" class="btn btn-link" onclick="poiMark({ lat: 43.253531005298015, lng: -79.92186482908565 },'row2_label')">Another Coffee Shop<span class="sr-only">(current)</span></button>
							<button id="row2_more" class="btn btn-primary" style="float: right;" onclick="moreDetail('row2_label')">More details</button>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		</main>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/html/footer.html';?>


		<!-- onclick  -->
		<script>
			document.getElementById("login").onclick = function () {
			location.href = "./registration.php";
			};
			document.getElementById("row1_more").onclick = function () {
			location.href = "./individual_sample.php";
			};
			document.getElementById("row2_more").onclick = function () {
			location.href = "./individual_sample.php";
			};
		</script>

		<!-- get searchBox value (from index.php) -->
		<!-- <script>
			const inputTest = localStorage.getItem('objectToPass');
			const displayData = inputTest;
			document.getElementById('UsrQuery').innerHTML = inputTest;
			// alert('Inserted Data' + inputTest);
			localStorage.removeItem( 'objectToPass' ); // Clear the localStorage
		</script> -->
	</body>
	<!-- Local JS -->
	<script src="../js/google_maps.js"></script>

	<!-- end of PHP -->
	<?php
		$conne->close();
		} else {
			echo "Invalid request";
		}
	?>
</html>