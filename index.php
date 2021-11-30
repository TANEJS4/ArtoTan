<!DOCTYPE html>
<html>
	<head lang="en">
		<title>ArtoTan – Homepage</title>

		<!-- Encoding -->
		<meta charset="UTF-8">

		<!-- Mobile Specific Metas and encoding-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>

	</head>

	<body  class=" bg-secondary">
		<?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/header.html'?>
	

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
							<form id="searchBox" action="./html/result_sample.php" class="form-inline" method="post" >
								<div class="input-group">
									<input id="searchQuery" class="form-control form control" type="text" placeholder="Search" aria-label="Search for coffee shops">
									<button class="btn btn-dark mx-2" type="submit" id="searchButton">Search</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="row row-cols-1">
					<div class="col-md-auto mx-auto">
						<div class="col-lg-auto">
							<div class="input-group">
								<button class="btn btn-dark btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Find shops by
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="/html/result_sample.php">distance</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/html/result_sample.php">rating</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/html/footer.html'?>
	</body>
	<!-- Local JS -->
	<script src="./js/index.js"></script>
</html>