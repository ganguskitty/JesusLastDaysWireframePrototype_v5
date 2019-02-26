<?php

/* 
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function displayResurrectionDay() {

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

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('John.20.1', 'John.20.2', 'John.20.3', 'John.20.4', 'John.20.5', 'John.20.6', 'John.20.7', 'John.20.8', 'John.20.9', 'John.20.10', 'John.20.11', 'John.20.12', 'John.20.13', 'John.20.14', 'John.20.15', 'John.20.16', 'John.20.17', 'John.20.18')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Sunday, April 5</h3>";
        echo "<h5>Day of Resurrection</h5>";
        echo "<h5>John 20:1-18</h5>";
// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>";
            echo $row["VerseNum"] . ": " . $row["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql2 = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.24.1', 'Luke.24.2', 'Luke.24.3', 'Luke.24.4', 'Luke.24.5', 'Luke.24.6', 'Luke.24.7', 'Luke.24.8', 'Luke.24.9', 'Luke.24.10', 'Luke.24.11', 'Luke.24.12')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>Luke 24:1-12</h5>";
// output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql3 = "SELECT * FROM Verses WHERE OsisRef IN ('Mark.16.1', 'Mark.16.2', 'Mark.16.3', 'Mark.16.4', 'Mark.16.5', 'Mark.16.6', 'Mark.16.7', 'Mark.16.8', 'Mark.16.9', 'Mark.16.10', 'Mark.16.11')";

    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {

        echo "<h5>Mark 16:1-11</h5>";
// output data of each row
        while ($row3 = mysqli_fetch_assoc($result3)) {

            echo "<p>";
            echo $row3["VerseNum"] . ": " . $row3["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql4 = "SELECT * FROM Verses WHERE OsisRef IN ('Matt.27.62', 'Matt.27.63', 'Matt.27.64', 'Matt.27.65', 'Matt.27.66')";

    $result4 = mysqli_query($conn, $sql4);

    if (mysqli_num_rows($result4) > 0) {

        echo "<h5>Matthew 27:62-66</h5>";
// output data of each row
        while ($row4 = mysqli_fetch_assoc($result4)) {

            echo "<p>";
            echo $row4["VerseNum"] . ": " . $row4["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql5 = "SELECT * FROM Verses WHERE OsisRef IN ('Matt.28.1', 'Matt.28.2', 'Matt.28.3', 'Matt.28.4', 'Matt.28.5', 'Matt.28.6', 'Matt.28.7', 'Matt.28.8', 'Matt.28.9', 'Matt.28.10', 'Matt.28.11', 'Matt.28.12', 'Matt.28.13', 'Matt.28.14', 'Matt.28.15')";

    $result5 = mysqli_query($conn, $sql5);

    if (mysqli_num_rows($result5) > 0) {

        echo "<h5>Matthew 28:1-15</h5>";
// output data of each row
        while ($row5 = mysqli_fetch_assoc($result5)) {

            echo "<p>";
            echo $row5["VerseNum"] . ": " . $row5["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql6 = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.24.13', 'Luke.24.14', 'Luke.24.15', 'Luke.24.16', 'Luke.24.17', 'Luke.24.18', 'Luke.24.19', 'Luke.24.20', 'Luke.24.21', 'Luke.24.22', 'Luke.24.23', 'Luke.24.24', 'Luke.24.25', 'Luke.24.26', 'Luke.24.27', 'Luke.24.28', 'Luke.24.29', 'Luke.24.30', 'Luke.24.31', 'Luke.24.32', 'Luke.24.33', 'Luke.24.34', 'Luke.24.35')";

    $result6 = mysqli_query($conn, $sql6);

    if (mysqli_num_rows($result6) > 0) {

        echo "<h5>Luke 24:13-35</h5>";
// output data of each row
        while ($row6 = mysqli_fetch_assoc($result6)) {

            echo "<p>";
            echo $row6["VerseNum"] . ": " . $row6["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql7 = "SELECT * FROM Verses WHERE OsisRef IN ('Mark.16.12', 'Mark.16.13')";

    $result7 = mysqli_query($conn, $sql7);

    if (mysqli_num_rows($result7) > 0) {

        echo "<h5>Mark 16:12-13</h5>";
// output data of each row
        while ($row7 = mysqli_fetch_assoc($result7)) {

            echo "<p>";
            echo $row7["VerseNum"] . ": " . $row7["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }
}
