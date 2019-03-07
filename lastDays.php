<?php
/**
 * Created by NetBeans.
 * User: Rodolfo Godinez
 * Date: 8/2/18
 * Time: 3:13 PM
 */
//Call connection variables
include 'includes/login.php';
//include "includes/functions.php";
//Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//@$db = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) die("Fatal Error");
if (mysqli_connect_errno()) {
echo '<p>Error: Could not connect to database.<br/>
    Please try again later.</p>';
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
        <link rel="stylesheet" href="css/bootstrap4/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap4/bootstrap-reboot.css"/>

        <title>Jesus Last Days - The Last Days of Jesus</title>

        <!-- General Styles -->
        <link rel="stylesheet" href="css/mainCSS.css"/>
        <link rel="stylesheet" href="css/mapStyles.css"/>
        <link rel="stylesheet" href="css/homeStyles.css"/>
        <link rel="stylesheet" href="css/lastDaysStyles.css"/>

        <!-- MapBox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet'/>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>-->
        

    </head>
    <body>
        <div id="headerMain" class="container-fluid bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Last Days</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="lastDays.php">Last Days of Jesus <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bible.php">Bible</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="prophecies.php">Prophecies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jesusTravels.php">Jesus Travels</a><!-- Maps showing Jesus's travel routes -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a><!-- Gallery of images and artifacts -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div id="lastDaysContent" class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h3>Timeline of Jesus Last Days</h3>
                    <div id="lastDaysCalendarButtonsContainer" class="col-4 float-left">
                        <button id="sunMarch29Btn" type="button" class="list-group-item list-group-item-action">Sunday, March 29</button>
                        <button id="monMarch30Btn" type="button" class="list-group-item list-group-item-action">Monday, March 30</button>
                        <button id="tueMarch31Btn" type="button" class="list-group-item list-group-item-action">Tuesday, March 31</button>
                        <button id="thuApril2Btn" type="button" class="list-group-item list-group-item-action">Thursday, April 2</button>
                        <button id="cruxBtn" type="button" class="list-group-item list-group-item-action">Crucifixion</button>
                        <button id="satApril4Btn" type="button" class="list-group-item list-group-item-action">Saturday, April 4</button>
                        <button id="resurrectionBtn" type="button" class="list-group-item list-group-item-action">Resurrection</button>
                        <button id="monApril6Btn" type="button" class="list-group-item list-group-item-action">Monday, April 6</button>
                        <button id="sunApril12Btn" type="button" class="list-group-item list-group-item-action">Sunday, April 12</button>
                        <button id="ascensionBtn" type="button" class="list-group-item list-group-item-action">Ascension</button>
                    </div>
                    <div id="lastDaysText" class="col-8 float-right">
                        <!--<div id="dayTitle">Date will display here.</div>-->
                        <div id="dayText">
                            
                        </div>
                    </div>
                </div>
                <div class="col-6 pl-0 pr-0">
                    <!-- MapBox -->
                    <div id='mapLastDays' style="width: 100%; height: calc(100vh - 116px);"></div>
                </div>
            </div>
        </div>
            <div class="row fixed-bottom">
                <div id="timeLineLastDays" class="col-12">
                    <h4>TIMELINE</h4>
                </div>
            </div>

        <!-- MapBox Start -->
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FuZ3VzY2F0IiwiYSI6ImNqazBoM29sOTA2c2wzd29nNzZqYnlla24ifQ.jzOzrlUH8Kx9vya3R-ZMqQ';
            var map = new mapboxgl.Map({
                container: 'mapLastDays',
                style: 'mapbox://styles/ganguscat/cjkd03ki99c7u2rpbt43iommv',
                center: [35.217018, 31.771959],
                zoom: 9
            });
        </script>
        <!-- MapBox End -->

        <!-- Optional JavaScript -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        
        <script src="js/lastDaysButtonHandlers.js"></script>
    </body>
</html>