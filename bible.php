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
        <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
        <link rel="stylesheet" href="css/bootstrap4/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap4/bootstrap-reboot.css"/>

        <title>Jesus Last Days - Bible</title>

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
    <body onload="loadBookTitles()">
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

        <div id="bibleContent" class="container container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h3>Bible Books</h3>
                    </div>
                    <div class="row">
                        <div class="col-4"> <!-- Column for book buttons -->
                            <div class="list-group">
                                <h6>Old Testament</h6>
                                <div id="oldTestamentBooks">

                                </div>
                                <!--                            <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                                                <button id="exodusBtn" type="button" class="list-group-item list-group-item-action">Exodus</button>
                                                                <button id="leviticusBtn" type="button" class="list-group-item list-group-item-action">Leviticus</button>
                                                                <button id="numbersBtn" type="button" class="list-group-item list-group-item-action">Numbers</button>
                                                                <button id="deuteronomyBtn" type="button" class="list-group-item list-group-item-action">Deuteronomy</button>
                                                                <button id="joshuaBtn" type="button" class="list-group-item list-group-item-action">Joshua</button>
                                                                <button id="judgesBtn" type="button" class="list-group-item list-group-item-action">Judges</button>
                                                                <button id="ruthBtn" type="button" class="list-group-item list-group-item-action">Ruth</button>
                                                                <button id="firstSamuelBtn" type="button" class="list-group-item list-group-item-action">1 Samuel</button>
                                                                <button id="secondSamuelBtn" type="button" class="list-group-item list-group-item-action">1 Samuel</button>
                                                                <button id="firstKingsBtn" type="button" class="list-group-item list-group-item-action">1 Kings</button>
                                                                <button id="secondKingsBtn" type="button" class="list-group-item list-group-item-action">2 Kings</button>
                                                                <button id="firstChroniclesBtn" type="button" class="list-group-item list-group-item-action">1 Chronicles</button>
                                                                <button id="secondChroniclesBtn" type="button" class="list-group-item list-group-item-action">2 Chronicles</button>
                                                                <button id="ezraBtn" type="button" class="list-group-item list-group-item-action">Ezra</button>
                                                                <button id="nehemiahBtn" type="button" class="list-group-item list-group-item-action">Nehemiah</button>
                                                                <button id="estherBtn" type="button" class="list-group-item list-group-item-action">Esther</button>
                                                                <button id="jobBtn" type="button" class="list-group-item list-group-item-action">Job</button>
                                                                <button id="psalmsBtn" type="button" class="list-group-item list-group-item-action">Psalms</button>
                                                                <button id="proverbsBtn" type="button" class="list-group-item list-group-item-action">Proverbs</button>
                                                                <button id="ecclesiastesBtn" type="button" class="list-group-item list-group-item-action">Ecclesiastes</button>
                                                                <button id="songOfSolBtn" type="button" class="list-group-item list-group-item-action">Song of Solomon</button>
                                                                <button id="isaiahBtn" type="button" class="list-group-item list-group-item-action">Isaiah</button>
                                                                <button id="jeremiahBtn" type="button" class="list-group-item list-group-item-action">Jeremiah</button>
                                                                <button id="lamentationsBtn" type="button" class="list-group-item list-group-item-action">Lamentations</button>
                                                                <button id="ezekielBtn" type="button" class="list-group-item list-group-item-action">Ezekiel</button>
                                                                <button id="danielBtn" type="button" class="list-group-item list-group-item-action">Daniel</button>
                                                                <button id="hoseaBtn" type="button" class="list-group-item list-group-item-action">Hosea</button>
                                                                <button id="joelBtn" type="button" class="list-group-item list-group-item-action">Joel</button>
                                                                <button id="amosBtn" type="button" class="list-group-item list-group-item-action">Amos</button>
                                                                <button id="obadiah" type="button" class="list-group-item list-group-item-action">Obadiah</button>
                                                                <button id="jonahBtn" type="button" class="list-group-item list-group-item-action">Jonah</button>
                                                                <button id="micahBtn" type="button" class="list-group-item list-group-item-action">Micah</button>
                                                                <button id="nahumBtn" type="button" class="list-group-item list-group-item-action">Nahum</button>
                                                                <button id="habakkukBtn" type="button" class="list-group-item list-group-item-action">Habakkuk</button>
                                                                <button id="zephaniahBtn" type="button" class="list-group-item list-group-item-action">Zephaniah</button>
                                                                <button id="haggaiBtn" type="button" class="list-group-item list-group-item-action">Haggai</button>
                                                                <button id="zechariahBtn" type="button" class="list-group-item list-group-item-action">Zechariah</button>
                                                                <button id="malachiBtn" type="button" class="list-group-item list-group-item-action">Malachi</button>-->
                                <h6>New Testament</h6>
                                <div id="newTestamentBooks">

                                </div>
                                <!--<button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>
                                <button id="genesisBtn" type="button" class="list-group-item list-group-item-action">Genesis</button>-->
                            </div>
                        </div>
                        <div class="col-8"> <!-- Column for book submenu --> 

                        </div>
                    </div>
                </div>
                <div class="col-6">

                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->

        <script src="js/bibleBookButtonHandlers.js"></script>
    </body>
</html>