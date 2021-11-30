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
        <div style="background-color:#202428">
            <!-- on startup place markers -->
            <script>
                window.onload = function () {
                    markAll();
                }
            </script>
		<?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/header.html'?>


            <!-- Body -->
            <div class="container text-center text-light">
                <div class="d-flex justify-content-center">
                    <h2><u>Decently Ok Coffee Shop</u></h2>
                </div>

                <!-- Google Maps -->
                <div class="map-canvas" id="map">
                    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                    <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_GVZ23Wf8RyDMdb3XP_oi7erLjCG1wrM&callback=initMap&v=weekly"
                            async
                    ></script>
                </div>

                <div class="rounded mx-auto d-block">
                    <div class="row">
                        <div class="col-lg-4">
                            <h3>Review 1</h3>
                            <p>
                                "Decent spot"
                            </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>

                        <div class="col-lg-4">
                            <h3>Review 2</h3>
                            <p>
                                "Great place! Will definitely visit again!"
                            </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>

                        <div class="col-lg-4">
                            <h3>Review 3</h3>
                            <p>
                                "Terrible customer service"
                            </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>

        <?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/footer.html'?>

        </div>
        <script>
            document.getElementById("login").onclick = function () {
                location.href = "./registration.php";
            };
        </script>
    </body>
    <!-- Local JS -->
    <script src="../js/google_maps.js"></script>
</html>