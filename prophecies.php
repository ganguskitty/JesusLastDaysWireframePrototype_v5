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
        <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
        <link rel="stylesheet" href="css/bootstrap4/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap4/bootstrap-reboot.css" />

        <title>Jesus Last Days - Prophecies</title>

        <!-- General Styles -->
        <link rel="stylesheet" href="css/mainCSS.css"/>
        <link rel="stylesheet" href="css/mapStyles.css"/>
        <link rel="stylesheet" href="css/homeStyles.css" />
        <link rel="stylesheet" href="css/propheciesCSS.css" />

        <!-- MapBox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet'/>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
    <body onload="loadProphecies()">
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
                        <li class="nav-item">
                            <a class="nav-link" href="lastDays.php">Last Days of Jesus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bible.php">Bible</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="prophecies.php">Prophecies <span class="sr-only">(current)</span></a>
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

        <div id="propheciesContent" class="container-fluid">
            <div class="row">
                <div class="col-6 container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <h3>Messianic Prophecies</h3>
                            <!--                            <div id="prophecyTextListing" class="row">
                            
                                                        </div>-->
                        </div>
                        <div class="col-2">
                            <h6>OT Scripture</h6>
                            <!--                            <div id="prophecyOTListing" class="row">
                            
                                                        </div>-->
                        </div>
                        <div class="col-2">
                            <h6>NT Scripture</h6>
                            <!--                            <div id="prophecyNTListing" class="row">
                            
                                                        </div>-->
                        </div>
                    </div>
                    <div id="prophecyListing" class="row">

                    </div>
                    
                </div>
                <div class="col-6 pl-0 pr-0">
                    <!-- MapBox -->
                    <div id='mapProphecies' style="width: 100%; height: calc(100vh - 116px);"></div>
                    <div id="prophecyTOC"></div>
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
                container: 'mapProphecies',
                style: 'mapbox://styles/ganguscat/cjvym4qpj0htf1cplo95i79mx',
                center: [35.23, 31.77],
                zoom: 12
            });

            map.on('click', function(e) {
                var features = map.queryRenderedFeatures(e.point, {
                    layers: ['placemarks-rev3'] //Replace this with the name of the layer
                });
                
                if (!features.length) {
                    return;
                }
                
                var feature = features[0];
                
                var popup = new mapboxgl.Popup({ offset: [0, -15] })
                        .setLngLat(feature.geometry.coordinates)
                        .setHTML('<h4>' + feature.properties.Label + '</h4><span class=\"mapSubHead\">' + feature.properties.VerseName + '</span>' + '<br><p>' + feature.properties.VerseText + '</p>')
                        .setLngLat(feature.geometry.coordinates)
                        .addTo(map);
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

        <script src="js/prophecies.js"></script>

    </body>
</html>