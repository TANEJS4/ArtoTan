<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//*mysqli details for connection
		$servername = "localhost";
		$username ="shivam";
		$password = "";
		$dbname ="places";

	//* create connection
		$conne = new mysqli($servername, $username, $password, $dbname);
		if ($conne->connect_error){
			die( "Connection failed to database - 2" . $conne->error) ;
		}

	//* Checks if there was a search query 
		if (isset( $_POST['searchQuery'])){
			$usrQuery = $_POST['searchQuery'];
			if (empty($usrQuery)){ //if user didnt search for anything in particular
				$stmt = "SELECT objectID, name, latitude, longitude FROM objects ";
				$result =  $conne->query($stmt);
			} else { //if they did, 
				// explained the use of this emthod in addObject.php
				$sql = "SELECT objectID, name, latitude, longitude FROM objects where LOWER(name) LIKE ?";
				$stmt= $conne->prepare($sql);
				// just to lower everything to make a better search term 
				$temp = '%' . strtolower($usrQuery) . '%';
				$stmt->bind_param("s", $temp);
				$stmt->execute();
				// this method have a seperate key where it stores result data
				$result = $stmt->get_result();
			}
		}
	//* in case sort options were selected
		if(isset($_POST['sortByDistance'])){
			echo "dropdown";
		}
		// using haversine formula in kms 
		$sql = "SELECT objectID, 
						 6371 *acos( cos(radians(latitude)) *
						cos(radians(lat2)) *
						cos(radians(lng2) - radians(longitude)) +
						sin(radians(lat2)) *
						sin(radians(latitude))
						) AS distance,
						name, latitude, longitude FROM objects HAVING distance < 30 ORDER BY distance LIMIT 0, 20 ";

	



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

		<!-- Header -->
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
						<?php
						if ($result->num_rows > 0){
							while($row =  $result->fetch_assoc()){ ?>
							
							<tr>
								<th scope="row"><?php echo $row["objectID"]; ?></th>
								<td>
									<button id="<?php echo $row['objectID']; ?>" class="btn btn-link" onclick="poiMark({ lat: <?php echo $row['latitude']; ?>, lng: <?php echo $row['longitude']; ?> },<?php echo $row['objectID']; ?>)" ><?php echo $row["name"]; ?><span class="sr-only">(current)</span></button>
									<button id="<?php echo $row['objectID']; ?>" class="btn btn-primary" style="float: right;" onclick="moreDetail('<?php echo $row["objectID"]; ?>')">More details</button>
								</td>
							</tr>
							<?php
							}
						} else {
							echo "<td colspan='2'> No data available </td><td> 									<button id='noResult' class='btn btn-primary' style='float: right;' onclick='get_all()'>Get All</button> </td>";
						}
						?>

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