<?php

/*
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function displayDayOfAscension() {
    
    include_once 'login.php';

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.24.50', 'Luke.24.51')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        //echo "<h3>Day of Ascension</h3>";
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
