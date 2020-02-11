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
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
        <link rel="stylesheet" href="css/bootstrap4/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap4/bootstrap-reboot.css"/>
        <link rel="stylesheet" href="css/bootstrap4/custom.css" />

        <title>Jesus Last Days - Who</title>

        <!-- General Styles -->
        <link rel="stylesheet" href="css/mainCSS.css"/>
        <link rel="stylesheet" href="css/mapStyles.css"/>
        <link rel="stylesheet" href="css/homeStyles.css" />

        <!-- MapBox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet'/>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="headerMain" class="container-fluid bg-light">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
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
            <div id="hero" class="row bg-primary">
                <img src="images/jesusinthecross.png" class="img-fluid mx-auto" alt="Glowing Cross">
            </div>
            <div id="homeButtonDescriptions" class="container-fluid" >
                <!--<div class="row">-->
                    <div class="row">
                        <div id="whoCard" class="col-sm-3 card p-0 mx-auto border-0" style="max-width: 18rem;">
                            <div class="card-body text-center homeCard rounded m-2 shadow-sm">
                                <h5 class="card-title">WHO</h5>
                                <p class="card-text">Get to know the people involved mentioned in the scriptures.</p>
                            </div>
                        </div>

                        <div id="whatCard" class="col-sm-3 card p-0 mx-auto border-0" style="max-width: 18rem;">
                            <div class="card-body text-center homeCard rounded m-2 shadow-sm">
                                <h5 class="card-title">WHAT</h5>
                                <p class="card-text">Explore the events as they unfold in our biblical history.</p>
                            </div>
                        </div>
<!--                    </div>

                    <div class="row">-->
                        <div id="whereCard" class="col-sm-3 card p-0 mx-auto border-0" style="max-width: 18rem;">
                            <div class="card-body text-center homeCard rounded m-2 shadow-sm">
                                <h5 class="card-title">WHERE</h5>
                                <p class="card-text">Use modern GIS to explore the location of places mentioned in the bible.</p>
                            </div>
                        </div>

                        <div id="whenCard" class="col-sm-3 card p-0 mx-auto border-0" style="max-width: 18rem;">
                            <div class="card-body text-center homeCard rounded m-2 shadow-sm">
                                <h5 class="card-title">WHEN</h5>
                                <p class="card-text">Explore the timeline of events in God's plan and see how long ago did they happen.</p>
                            </div>
                        </div>
                    </div>
                <!--</div>-->
            </div>
            <p class="p-5 w-100 text-wrap mx-auto" style="max-width: 50rem;">Explore the bible and learn of the events that led to Jesus last days, crucifixion and ascension to the father. Study the bible and dynamically learn about the people, places, events and the timeline as viewed from our present day.</p>
        </div>
<!--        <script>
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
        </script>-->
        <!-- MapBox End -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>