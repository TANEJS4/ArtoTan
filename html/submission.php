<?php
	require_once  $_SERVER['DOCUMENT_ROOT'] . "/PHP/sessionvar.php";
    if($_SESSION['loggedin'] ==false){
        $_SESSION['showalert'] = 1;
        echo "<script type='text/javascript'>alert('you were not logged in.Log in and then submit');</script>";
		}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ArtoTan - ObjectSubmission</title>

        <!-- Encoding -->
        <meta charset="UTF-8">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>

        <!-- Local CSS -->
        <link rel="stylesheet" href="../css/submission.css">

        <!-- CSS - Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- JS - Required for Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>

    <body class="bg-secondary">

        <?php include $_SERVER['DOCUMENT_ROOT'] .  '/html/header.php'?>

        <main class="container-flex">
            <form id="addLocForm" method="post" action="http://localhost/php/addObject.php">
                <h1 id="formTitle">Add Location</h1>
                <div class="addLocFormError"></div>
                <div>
                    <label for="addLocFormLocName">Location Name:</label>
                    <input type="text" id="addLocFormLocName" name ="addLocFormLocName" required>
                </div>
                <div>
                    <label for="addLocFormLocDesc">Location Description:</label>
                    <input type="text" id="addLocFormLocDesc" name ="addLocFormLocDesc" required>
                </div>
                <div>
                    <label for="addLocFormLocLat">Latitude (up to 6 decimal point):</label>
                    <!-- Regex: Start with + or - and up to 6 decimals -->
                    <input type="text" id="addLocFormLocLat" name="addLocFormLocLat" pattern="^(\+|-)?(?:90(?:(?:\.0{1,6})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,6})?))$" required>
                </div>
                <div>
                    <label for="addLocFormLocLong">Longitude (up to 6 decimal point): </label>
                    <!-- Regex: Start with + or - and up to 6 decimals -->
                    <input type="text" id="addLocFormLocLong" name="addLocFormLocLong" pattern="^(\+|-)?(?:180(?:(?:\.0{1,6})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,6})?))$" required>
                </div>
                <div>
                    <label for="addLocFormLocImg">Upload Location Image:</label>
                    <input type="file" id="addLocFormLocImg" name="addLocFormLocImg">
                </div>
                <div>
                    <button type="button" id="getCurrentLatLong" name="getCurrentLatLong">Get Current Location</button>
                </div>
                <input id="addLocFormButton" name="addLocFormButton" type="submit" value="Submit">
            </form>
        </main>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/html/footer.php'?>

    </body>
    <!-- Local JS -->
    <script src="../js/submission.js"></script>
</html>