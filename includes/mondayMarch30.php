<?php

/**
 * Created by NetBeans.
 * User: Rodolfo Godinez
 * Date: 8/6/18
 * Time: 7:24 PM
 */



echo $_POST["method"]();

function displayMondayMarch30() {

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

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('Mark.11.12', 'Mark.11.13', 'Mark.11.14', 'Mark.11.15', 'Mark.11.16', 'Mark.11.17', 'Mark.11.18', 'Mark.11.19')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Monday, March 30</h3>";
        echo "<h5>Mark 11:12-19</h5>";
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
