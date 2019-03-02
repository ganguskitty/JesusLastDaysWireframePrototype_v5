<?php

/*
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function oldTestamentBooksList() {

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "lastdaysdb";

//    $servername = "localhost";
//    $username = "bobkitty_lastDay";
//    $password = "Me]]HqV;QPktv(%h?B";
//    $dbname = "bobkitty_lastDays";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
    if ($conn->connect_error) {
        die("Fatal Error");
    }

    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>
    Please try again later.</p>';
        exit;
    }

    $sql = "SELECT * FROM books WHERE BookID BETWEEN 1 AND 39";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<button id='" . $row["BookName"] . "Btn' type='button' class='list-group-item list-group-item-action'>" . $row["BookName"] . "</button>";
        }
    } else {
        echo "There is no data available.";
    }
}

function newTestamentBooksList() {

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "lastdaysdb";

//    $servername = "localhost";
//    $username = "bobkitty_lastDay";
//    $password = "Me]]HqV;QPktv(%h?B";
//    $dbname = "bobkitty_lastDays";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
    if ($conn->connect_error) {
        die("Fatal Error");
    }

    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>
    Please try again later.</p>';
        exit;
    }

    $sql = "SELECT * FROM books WHERE BookID BETWEEN 40 AND 66";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<button id='" . $row["BookName"] . "Btn' type='button' class='list-group-item list-group-item-action'>" . $row["BookName"] . "</button>";
        }
    } else {
        echo "There is no data available.";
    }
}
