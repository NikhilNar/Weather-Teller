<?php
error_reporting(E_ERROR | E_PARSE);

include("find-weather.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/weather-teller.css">
</head>
<body>
<div class="container" id="main-form">
    <h1>What's the weather?</h1>

    <form>
        <fieldset class="form-group">
            <label for="city" class="lead">Enter the name of the city</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Eg.Mumbai" >
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div id="weather">
        <?php
            if(isset($weather)){
                echo "<h4>". "Weather of ".$_GET['city']."</h4>";
                echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
            }
            else if(isset($_GET['city'])){
               echo' <div class="alert alert-danger" role="alert">No such city</div>';
            }

        ?>

    </div>

</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<script type="text/javascript" >
    window.onload=function(){
        document.getElementById("main-form").style.display="block";
    }
</script>
</body>
</html>