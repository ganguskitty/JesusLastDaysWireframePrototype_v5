<?php

/**
 * Created by NetBeans.
 * User: Rodolfo Godinez
 * Date: 8/6/18
 * Time: 7:24 PM
 */



echo $_POST["method"]();

function displaySundayMarch29() {

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

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.9.51', 'Luke.9.52', 'Luke.9.53', 'Luke.9.54', 'Luke.9.55', 'Luke.9.56')"; // AND WHERE OsisRef IN ('John.11.47', 'John.11.48', 'John.11.49', 'John.11.50', 'John.11.51', 'John.11.52', 'John.11.53', 'John.11.54')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Sunday, March 29</h3>";
        echo "<h5>Luke 9:51-56</h5>";
// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>";
            echo $row["VerseNum"] . ": " . $row["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql2 = "SELECT * from Verses WHERE OsisRef IN ('John.11.47', 'John.11.48', 'John.11.49', 'John.11.50', 'John.11.51', 'John.11.52', 'John.11.53', 'John.11.54')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>John 11:47-54</h5>";
        // output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql3 = "SELECT * from Verses WHERE OsisRef IN ('John.12.1', 'John.12.2', 'John.12.3', 'John.12.4', 'John.12.5', 'John.12.6', 'John.12.7', 'John.12.8', 'John.12.9', 'John.12.10', 'John.12.11')";

    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {

        echo "<h5>John 12:1-11</h5>";
        // output data of each row
        while ($row3 = mysqli_fetch_assoc($result3)) {

            echo "<p>";
            echo $row3["VerseNum"] . ": " . $row3["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql4 = "SELECT * from Verses WHERE OsisRef IN ('Luke.19.28', 'Luke.19.29', 'Luke.19.30', 'Luke.19.31', 'Luke.19.32', 'Luke.19.33', 'Luke.19.34', 'Luke.19.35')";

    $result4 = mysqli_query($conn, $sql4);

    if (mysqli_num_rows($result4) > 0) {

        echo "<h5>Luke 19:28-35</h5>";
        // output data of each row
        while ($row4 = mysqli_fetch_assoc($result4)) {

            echo "<p>";
            echo $row4["VerseNum"] . ": " . $row4["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }
    
    $sql5 = "SELECT * from Verses WHERE OsisRef IN ('Mark.11.1', 'Mark.11.2', 'Mark.11.3', 'Mark.11.4', 'Mark.11.5', 'Mark.11.6', 'Mark.11.7')";

    $result5 = mysqli_query($conn, $sql5);

    if (mysqli_num_rows($result5) > 0) {

        echo "<h5>Mark 11:1-7</h5>";
        // output data of each row
        while ($row5 = mysqli_fetch_assoc($result5)) {

            echo "<p>";
            echo $row5["VerseNum"] . ": " . $row5["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }
    
    $sql6 = "SELECT * from Verses WHERE OsisRef IN ('Matt.21.1', 'Matt.21.2', 'Matt.21.3', 'Matt.21.4', 'Matt.21.5', 'Matt.21.6', 'Matt.21.7')";

    $result6 = mysqli_query($conn, $sql6);

    if (mysqli_num_rows($result6) > 0) {

        echo "<h5>Matthew 21:1-7</h5>";
        // output data of each row
        while ($row6 = mysqli_fetch_assoc($result6)) {

            echo "<p>";
            echo $row6["VerseNum"] . ": " . $row6["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }
}
