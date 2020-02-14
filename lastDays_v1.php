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
if ($conn->connect_error)
    die("Fatal Error");
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
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
        <link rel="stylesheet" href="css/bootstrap4/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap4/bootstrap-reboot.css"/>

        <title>Jesus Last Days - The Last Days of Jesus</title>

        <!-- General Styles -->
        <link rel="stylesheet" href="css/mainCSS.css"/>
        <link rel="stylesheet" href="css/mapStyles.css"/>
        <link rel="stylesheet" href="css/homeStyles.css"/>
        <link rel="stylesheet" href="css/lastDaysStyles.css"/>

        <!-- MapBox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet'/>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   

    </head>
    <body>
        <div id="headerMain" class="container-fluid bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Last Days of Jesus Christ</a>
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
                <div class="col">
                    <h4>Timeline of Jesus Last Days</h4>
                    <div id="lastDaysCalendarButtonsContainer" class="accordion">
                        <div class="card">
                            <div class="cardheader" id="headingOne">
                                <!--<h3 class="mb-0">-->
                                    <button id="sunMarch29Btn" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Sunday, March 29</button>
                                <!--</h3>-->
                            </div>
                            <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="sunMarch29BtnResult" class="card-body"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="cardheader" id="headingTwo">
                                <!--<h2 class="mb-0">-->
                                    <button id="monMarch30Btn" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Monday, March 30</button>
                                <!--</h2>-->
                            </div>
                            <div id="collapseTwo" class="collapse hide" aria-labelledby="headingTwo" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="monMarch30BtnResult" class="card-body"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="cardheader" id="headingThree">
                                <!--<h2 class="mb-0">-->
                                    <button id="tueMarch31Btn" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Tuesday, March 31</button>
                                <!--</h2>-->
                            </div>
                            <div id="collapseThree" class="collapse hide" aria-labelledby="headingThree" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="tueMarch31BtnResult" class="card-body"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="cardheader" id="headingFour">
                                <!--<h2 class="mb-0">-->
                                    <button id="thuApril2Btn" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Thursday, April 2</button>
                                <!--</h2>-->
                            </div>
                            <div id="collapseFour" class="collapse hide" aria-labelledby="headingFour" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="thuApril2BtnResult" class="card-body"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="cardheader" id="headingFive">
                                <!--<h2 class="mb-0">-->
                                    <button id="cruxBtn" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Crucifixion</button>
                                <!--</h2>-->
                            </div>
                            <div id="collapseFive" class="collapse hide" aria-labelledby="headingFive" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="cruxBtnResult" class="card-body"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="cardheader" id="headingSix">
                                <!--<h2 class="mb-0">-->
                                    <button id="satApril4Btn" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">Saturday, April 4</button>
                                <!--</h2>-->
                            </div>
                            <div id="collapseSix" class="collapse hide" aria-labelledby="headingSix" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="satApril4BtnResult" class="card-body"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="cardheader" id="headingSeven">
                                <!--<h2 class="mb-0">-->
                                    <button id="resurrectionBtn" type="button" class="btn btn-link mb-0 h3" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">Resurrection</button>
                                <!--</h2>-->
                            </div>
                            <div id="collapseSeven" class="collapse hide" aria-labelledby="headingSeven" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="resurrectionBtnResult" class="card-body"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="cardheader" id="headingEight">
                                <!--<h2 class="mb-0">-->
                                    <button id="monApril6Btn" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">Monday, April 6</button>
                                <!--</h2>-->
                            </div>
                            <div id="collapseEight" class="collapse hide" aria-labelledby="headingEight" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="monApril6BtnResult" class="card-body"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="cardheader" id="headingNine">
                                <!--<h2 class="mb-0">-->
                                    <button id="sunApril12Btn" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">Sunday, April 12</button>
                                <!--</h2>-->
                            </div>
                            <div id="collapseNine" class="collapse hide" aria-labelledby="headingNine" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="sunApril12BtnResult" class="card-body"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="cardheader" id="headingTen">
                                <!--<h2 class="mb-0">-->
                                    <button id="ascensionBtn" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">Ascension</button>
                                <!--</h2>-->
                            </div>
                            <div id="collapseTen" class="collapse hide" aria-labelledby="headingTen" data-parent="#lastDaysCalendarButtonsContainer">
                                <div id="ascensionBtnResult" class="card-body"></div>
                            </div>
                        </div>
                        <!--                    <div id="lastDaysText" class="col-8 float-right">
                                                <div id="dayTitle">Date will display here.</div>
                                                <div id="dayText">
                        
                                                </div>
                                            </div>-->
                    </div>
                    <!--                <div class="col-6 pl-0 pr-0">
                                         MapBox 
                                        <div id='mapLastDays' style="width: 100%; height: calc(100vh - 116px);"></div>
                                    </div>-->
                </div>
            </div>
            <!--        <div class="row fixed-bottom">
                        <div id="timeLineLastDays" class="col-12">
                            <h4>TIMELINE</h4>
                        </div>
                    </div>-->

            <!-- MapBox Start -->
            <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FuZ3VzY2F0IiwiYSI6ImNqazBoM29sOTA2c2wzd29nNzZqYnlla24ifQ.jzOzrlUH8Kx9vya3R-ZMqQ';
                var map = new mapboxgl.Map({
                    container: 'mapLastDays',
                    style: 'mapbox://styles/ganguscat/cjvym4qpj0htf1cplo95i79mx',
                    center: [35.23, 31.77],
                    zoom: 12
                });

                map.on('click', function (e) {
                    var features = map.queryRenderedFeatures(e.point, {
                        layers: ['placemarks-rev3'] //Replace this with the name of the layer
                    });

                    if (!features.length) {
                        return;
                    }

                    var feature = features[0];

                    var popup = new mapboxgl.Popup({offset: [0, -15]})
                            .setLngLat(feature.geometry.coordinates)
                            .setHTML('<h4>' + feature.properties.Label + '</h4><span class=\"mapSubHead\">' + feature.properties.VerseName + '</span>' + '<br><p>' + feature.properties.VerseText + '</p>')
                            .setLngLat(feature.geometry.coordinates)
                            .addTo(map);
                });
            </script>
            <!-- MapBox End -->

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <script src="js/lastDaysButtonHandlers.js"></script>
    </body>
</html>