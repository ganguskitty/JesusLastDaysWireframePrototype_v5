<?php
/**
 * Created by NetBeans.
 * User: Rodolfo Godinez
 * Date: 7/24/2018
 * Time: 5:23 PM
 */
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="css/bootstrap4/bootstrap.css"/>-->
        <!--<link rel="stylesheet" href="css/bootstrap4/bootstrap-reboot.css"/>-->

        <title>Jesus Last Days - Home</title>

        <!-- General Styles -->
        <link rel="stylesheet" href="css/mainCSS.css"/>
        <link rel="stylesheet" href="css/mapStyles.css"/>
        <link rel="stylesheet" href="css/homeStyles.css" />

        <!-- MapBox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet'/>

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
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lastDays.php">Last Days of Jesus</a>
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

        <div id="homeContent" class="container-fluid">
            <div class="row">
                <h2>The Last Days of Jesus Christ</h2>
                <!-- MapBox Start -->
                <div id='mapHome' style="width: 75%; height: calc(100vh - 100px);"></div>
            </div>
            <div class="row fixed-bottom">
                <div id="timeLineHome" class="col-12">
                    <h4>TIMELINE</h4>
                </div>
            </div>

        </div>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FuZ3VzY2F0IiwiYSI6ImNqazBoM29sOTA2c2wzd29nNzZqYnlla24ifQ.jzOzrlUH8Kx9vya3R-ZMqQ';
            var map = new mapboxgl.Map({
                container: 'mapHome',
                style: 'mapbox://styles/ganguscat/cjkd03ki99c7u2rpbt43iommv',
                center: [35.217018, 31.771959],
                zoom: 9
            });
            
//            map.addControl(new mapboxgl.FullscreenControl()); //Adds full screen button for user control
        </script>
        <!-- MapBox End -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>