<?php
/**
 * Created by NetBeans.
 * User: Rodolfo Godinez
 * Date: 2/27/2019
 * Time: 3:13 PM
 */
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

        <title>Jesus Last Days - Bible</title>

        <!-- General Styles -->
        <link rel="stylesheet" href="css/mainCSS.css"/>
        <link rel="stylesheet" href="css/mapStyles.css"/>
        <link rel="stylesheet" href="css/homeStyles.css"/>
        <link rel="stylesheet" href="css/bibleCSS.css"/>

        <!-- MapBox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet'/>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->


    </head>
    <body onload="loadBookTitles()">
        <div id="headerMain" class="row container-fluid bg-light pl-0 pr-0 ml-0 mr-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 float-right">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="bible.php">Bible <span class="sr-only">(current)</span></a>
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

        <!--<div id="bibleContent" class="row container container-fluid">-->
        <div id="bibleContent" class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h3>Bible Books</h3>
                    </div>
                    <div class="row container-fluid">
                        <div class="col-4"> <!-- Column for book buttons -->
                            <div class="list-group float-left">

                                <h6 id="oldTestamentHeader">Old Testament</h6>
                                <div id="oldTestamentBooks">

                                </div>

                                <h6 id="newTestamentHeader">New Testament</h6>
                                <div id="newTestamentBooks">

                                </div>
                            </div>
                        </div>
                        <div class="col-8"> <!-- Column for chapter buttons -->
                            <div class="list-group">
                                <div id="bookNameForChapterMenu">

                                </div>
                                <div id="bookChapterMenu">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 pl-0 pr-0">
                    <div id='mapHome' style="width: 100%; height: calc(100vh - 116px);"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row fixed-bottom">
        <div id="timeLineBible" class="col-12">
            <h4>TIMELINE</h4>
        </div>
    </div>
    <!--</div>-->

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FuZ3VzY2F0IiwiYSI6ImNqazBoM29sOTA2c2wzd29nNzZqYnlla24ifQ.jzOzrlUH8Kx9vya3R-ZMqQ';
        var map = new mapboxgl.Map({
            container: 'mapHome',
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="js/bibleBookButtonHandlers.js"></script>
</body>
</html>