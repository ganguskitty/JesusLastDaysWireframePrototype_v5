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
        <link rel="stylesheet" href="css/lastDaysStyles.css"/>

        <!-- MapBox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet'/>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>-->
        

    </head>
    <body>
        <div id="headerMain" class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-light">
                <span class="navbar-brand mb-0 h1 float-left">Last Days</span>
                <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
                    <div class="navbar-nav float-right">
                        <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="lastDays.php">Last Days of Jesus</a>
                        <a class="nav-link" href="bible.php">Bible</a>
                        <a class="nav-link" href="prophecies.php">Prophecies</a>
                        <a class="nav-link" href="jesusTravels.php">Jesus Travels</a>
                        <a class="nav-link" href="gallery.php">Gallery</a>

                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SEARCH</button>
                    </form>
                </div>
            </nav>
        </div>

        <div id="lastDaysContent" class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h2>Timeline of Jesus Last Days</h2>
                    <div id="lastDaysCalendarButtonsContainer" class="col-4 float-left">
                        <button id="sunMarch29Btn">Sunday, March 29</button>
                        <button id="monMarch30Btn">Monday, March 30</button>
                        <button id="tueMarch31Btn">Tuesday, March 31</button>
                        <button id="thuApril2Btn">Thursday, April 2</button>
                        <button id="cruxBtn">Crucifixion</button>
                        <button id="satApril4Btn">Saturday, April 4</button>
                        <button id="resurrectionBtn">Resurrection</button>
                        <button id="monApril6Btn">Monday, April 6</button>
                        <button id="sunApril12Btn">Sunday, April 12</button>
                        <button id="ascensionBtn">Ascension</button>
                    </div>
                    <div id="lastDaysText" class="col-8 float-right">
                        <!--<div id="dayTitle">Date will display here.</div>-->
                        <div id="dayText">
                            
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- MapBox -->
                    <div id='mapLastDays' style="width: 50%; height: 600px;"></div>
                </div>


            </div>
            <div class="row">
                <div id="timeLineHome" class="col-12">
                    <h4>TIMELINE</h4>
                </div>
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