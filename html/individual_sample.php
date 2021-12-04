<?php
	require_once  $_SERVER['DOCUMENT_ROOT'] . "/PHP/sessionvar.php";

    	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//*mysqli details for connection
		$servername = "localhost";
		$username ="root";
		$password = "e05#W-J&";
		$dbname ="artotan";
        	//* create connection
		$conne = new mysqli($servername, $username, $password, $dbname);
		if ($conne->connect_error){
			die( "Connection failed to database - 2" . $conne->error) ;
		}
        if(isset($_POST['objectIDHidden'])){
            $locID = $_POST['objectIDHidden'];
            $sql1 = "SELECT * FROM reviews where locationID = ? ";
            $stmt1= $conne->prepare($sql1);
            $stmt1->bind_param("d", $locID);
            $stmt1->execute();
            // this method have a seperate key where it stores result data
            $reviews = $stmt1->get_result();
            
            $sql2 = "SELECT * FROM objects where objectID = ? LIMIT 1";
            $stmt2= $conne->prepare($sql2);
            $stmt2->bind_param("d", $locID);
            $stmt2->execute();
            // this method have a seperate key where it stores result data
            $locDetail = $stmt2->get_result();
		}
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ArtoTan - sample</title>

        <!-- Encoding -->
        <meta charset="UTF-8">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>

        <!-- CSS - Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">		<!-- Awesome fonts -->
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
		<?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/header.php'?>


            <!-- Body -->
            <main class="bg-dark">
            <div class="container-flex  text-center text-light">
                <div class="d-flex justify-content-center">
                    <?php
                    if($locDetail->num_rows>0){
                        $row1 = $locDetail->fetch_assoc()
                        ?> <h2><u><?php echo $row1['name'];?></u></h2>
                        <?php
                            
                        }
                    ?>
                    
                </div>

                <!-- Google Maps -->
                <div class="map-canvas" id="map">
                    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                    <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_GVZ23Wf8RyDMdb3XP_oi7erLjCG1wrM&callback=initMap&v=weekly"
                            async
                    ></script>
                </div>
                    </div>
                <div class="container-flex text-center text-light rounded mx-auto my-4">
                    <div class="row ">
                        <?php 
                            if($reviews->num_rows>0){
                                $count=1;
                                
                                while($row2= $reviews->fetch_assoc()){
                                        ?>
                        <div class="col-lg-4">
                            <h2> <?php echo $row2['title']; ?></h2>
                            <p class="h4">
                                <?php echo $row2['description']; ?>
                            </p>
                            <?php 
                            for ($Astar = 0; $Astar < $row2['star'] ; $Astar++){
                                ?>
                                <span class="fa fa-star checked"></span>
                                <?php
                            } 
                            $Bstar= 5 -  $row2['star'] ;
                            for ($Astar = 0; $Astar < $Bstar ; $Astar++){
                                ?>
                                <span class="fa fa-star"></span>
                                <?php
                            }
                            ?>

                        </div>

                                    <?php
                                }
                            }
                            ?>
                    </div>
            </div>
                        </main>
        <?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/footer.php'?>

        <script>
            document.getElementById("login").onclick = function () {
                location.href = "./registration.php";
            };
        </script>
    </body>
    <!-- Local JS -->
    <script src="../js/google_maps.js"></script>
</html>