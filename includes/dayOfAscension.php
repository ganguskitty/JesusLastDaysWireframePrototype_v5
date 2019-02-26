<?php

/*
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function displayDayOfAscension() {

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
    if ($conn->connect_error)
        die("Fatal Error");
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>
    Please try again later.</p>';
        exit;
    }

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.24.50', 'Luke.24.51')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Day of Ascension</h3>";
        echo "<h5>Luke 24:50-51</h5>";
// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>";
            echo $row["VerseNum"] . ": " . $row["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql2 = "SELECT * FROM Verses WHERE OsisRef IN ('Mark.16.19')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>Mark 16:19</h5>";
// output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }
}
