<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9"/>

    <!-- CSS - Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">		<!-- Awesome fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body class="bg-secondary">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <div style="background-color:#202428">

        <!-- Header -->
        <?php require("./header.php");?>

        <!-- Body -->
        <div class="container text-light">
            <div class="d-flex justify-content-center">
                <h2><u>Add Location</u></h2>
            </div>

            <form>
                <div class="form-group">
                    <label for="formLocationName">Location Name:</label>
                    <input type="text" class="form-control" id="formLocationName" placeholder="Location Name">
                </div>
                <div class="form-group">
                    <label for="formLocationDescription">Location Description:</label>
                    <input type="text" class="form-control" id="formLocationDescription" placeholder="Location Description">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputLatitude">Latitude:</label>
                        <input type="text" class="form-control" id="inputLatitude" placeholder="Latitude">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputLongitude">Latitude:</label>
                        <input type="text" class="form-control" id="inputLongitude" placeholder="Longitude">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="customFile">Upload Location Image:</label>
                    <input type="file" class="form-control" id="customFile" />
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary my-1">Submit</button>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <?php require("./footer.php");?>

    </div>
</body>