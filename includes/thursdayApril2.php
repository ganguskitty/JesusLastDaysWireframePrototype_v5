<?php

/* 
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function displayThursdayApril2() {

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "lastdaysdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
    if ($conn->connect_error)
        die("Fatal Error");
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>
    Please try again later.</p>';
        exit;
    }

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.20.1', 'Luke.20.2', 'Luke.20.3', 'Luke.20.4', 'Luke.20.5', 'Luke.20.6', 'Luke.20.7', 'Luke.20.8', 'Luke.20.9', 'Luke.20.10', 'Luke.20.11', 'Luke.20.12', 'Luke.20.13', 'Luke.20.14', 'Luke.20.15', 'Luke.20.16', 'Luke.20.17', 'Luke.20.18', 'Luke.20.19', 'Luke.20.20', 'Luke.20.21', 'Luke.20.22', 'Luke.20.23', 'Luke.20.24', 'Luke.20.25', 'Luke.20.26')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Thursday, April 2</h3>";
        echo "<h5>Luke 20:1-26</h5>";
// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>";
            echo $row["VerseNum"] . ": " . $row["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql2 = "SELECT * from Verses WHERE OsisRef IN ('Matt.21.18', 'Matt.21.19')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>Matthew 21:18-19</h5>";
        // output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }
}