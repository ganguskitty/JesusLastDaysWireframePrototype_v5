<?php

/* 
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function displaySaturdayApril4() {
    
    include_once 'login.php';

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('John.19.38', 'John.19.39', 'John.19.40', 'John.19.41', 'John.19.42')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        //echo "<h3>Saturday, April 4</h3>";
        echo "<h5>John 19:38-42</h5>";
// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>";
            echo $row["VerseNum"] . ": " . $row["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql2 = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.23.50', 'Luke.23.51', 'Luke.23.52', 'Luke.23.53', 'Luke.23.54', 'Luke.23.55', 'Luke.23.56')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>Luke 23:50-56</h5>";
// output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql3 = "SELECT * FROM Verses WHERE OsisRef IN ('Mark.15.42', 'Mark.15.43', 'Mark.15.44', 'Mark.15.45', 'Mark.15.46', 'Mark.15.47')";

    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {

        echo "<h5>Mark 15:42-47</h5>";
// output data of each row
        while ($row3 = mysqli_fetch_assoc($result3)) {

            echo "<p>";
            echo $row3["VerseNum"] . ": " . $row3["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql4 = "SELECT * FROM Verses WHERE OsisRef IN ('Matt.27.57', 'Matt.27.58', 'Matt.27.59', 'Matt.27.60', 'Matt.27.61')";

    $result4 = mysqli_query($conn, $sql4);

    if (mysqli_num_rows($result4) > 0) {

        echo "<h5>Matthew 27:57-61</h5>";
// output data of each row
        while ($row4 = mysqli_fetch_assoc($result4)) {

            echo "<p>";
            echo $row4["VerseNum"] . ": " . $row4["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }
}
