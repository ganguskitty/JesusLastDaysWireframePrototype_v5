<?php

/* 
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function displayMondayApril6() {
    
    include_once 'login.php';

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('John.20.19', 'John.20.20', 'John.20.21', 'John.20.22', 'John.20.23')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        //echo "<h3>Monday, April 6</h3>";
        echo "<h5>John 20:19-23</h5>";
// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>";
            echo $row["VerseNum"] . ": " . $row["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql2 = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.24.36', 'Luke.24.37', 'Luke.24.38', 'Luke.24.39', 'Luke.24.40', 'Luke.24.41', 'Luke.24.42', 'Luke.24.43', 'Luke.24.44', 'Luke.24.45', 'Luke.24.46', 'Luke.24.47', 'Luke.24.48', 'Luke.24.49')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>Luke 24:36-49</h5>";
// output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql3 = "SELECT * FROM Verses WHERE OsisRef IN ('Mark.16.14', 'Mark.16.15', 'Mark.16.16', 'Mark.16.17', 'Mark.16.18')";

    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {

        echo "<h5>Mark 16:14-18</h5>";
// output data of each row
        while ($row3 = mysqli_fetch_assoc($result3)) {

            echo "<p>";
            echo $row3["VerseNum"] . ": " . $row3["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }
}
