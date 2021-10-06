<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="search" content="map-et-table"/>
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>

		<!-- CSS - Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">		<!-- Awesome fonts -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		
	</head>

	<body >
		<!-- js -->	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<div style="background-color:#202428">

			<?php require("./header.php"); ?>

			<!--  Body -->
			<div class=" container-fluid text-center">
				<div class="row ">
					<div class="col-2">
						<div class="table-responsive">
							<table class="table table-hover table-dark">
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
												<table >
													<tr><td>name1</td></tr>
													<tr><td> add1</td></tr>
													<tr><td>timing1</td></tr>
												</table>
										</td>

									</tr>
									<tr>
										<th scope="row">B</th>
										<td>
												<table >
													<tr><td>name2</td></tr>
													<tr><td> add2</td></tr>
													<tr><td>timing2</td></tr>
												</table>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="col-10">
						<img src="../img/coffee_near_me.png" class="rounded mx-auto my-2 img-fluid" alt="googleMapAPI">
							3/4 picture
					</div>
				</div>
			</div>
			<!--  footer file -->
			<?php require("./footer.php"); ?>
		</div>
	</body>
</html>