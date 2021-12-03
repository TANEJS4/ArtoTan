<?php 
	// session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$usrQuery = $_POST['searchQuery'];
		echo "here" . $usrQuery;
	} else {
		echo "Invalid request";
	}
					// $sql = "SELECT  FROM objects (name, description, latitude,  longitude) VALUES (?,?,?,?)";
					
?>
<!-- <thead>
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
					</tbody> -->












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