<?php

/* 
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function displaySundayApril12() {
    
    include_once 'login.php';

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('John.20.24', 'John.20.25', 'John.20.26', 'John.20.27', 'John.20.28', 'John.20.29')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Sunday, April 12</h3>";
        echo "<h5>John 20:24-29</h5>";
// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>";
            echo $row["VerseNum"] . ": " . $row["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql2 = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.24.16', 'Luke.24.17', 'Luke.24.18', 'Luke.24.19', 'Luke.24.20')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>Luke 24:16-20</h5>";
// output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql3 = "SELECT * FROM Verses WHERE OsisRef IN ('Matt.28.16', 'Matt.28.17', 'Matt.28.18', 'Matt.28.19', 'Matt.28.20')";

    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {

        echo "<h5>Matthew 28:16-20</h5>";
// output data of each row
        while ($row3 = mysqli_fetch_assoc($result3)) {

            echo "<p>";
            echo $row3["VerseNum"] . ": " . $row3["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql4 = "SELECT * FROM Verses WHERE OsisRef IN ('John.21.1', 'John.21.2', 'John.21.3', 'John.21.4', 'John.21.5', 'John.21.6', 'John.21.7', 'John.21.8', 'John.21.9', 'John.21.10', 'John.21.11', 'John.21.12', 'John.21.13', 'John.21.14', 'John.21.15', 'John.21.16', 'John.21.17', 'John.21.18', 'John.21.19', 'John.21.20', 'John.21.21', 'John.21.22', 'John.21.23', 'John.21.24')";

    $result4 = mysqli_query($conn, $sql4);

    if (mysqli_num_rows($result4) > 0) {

        echo "<h5>John 21:1-24</h5>";
// output data of each row
        while ($row4 = mysqli_fetch_assoc($result4)) {

            echo "<p>";
            echo $row4["VerseNum"] . ": " . $row4["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql5 = "SELECT * FROM Verses WHERE OsisRef IN ('1Cor.15.6', '1Cor.15.7')";

    $result5 = mysqli_query($conn, $sql5);

    if (mysqli_num_rows($result5) > 0) {

        echo "<h5>1 Corinthians 15:6-7</h5>";
// output data of each row
        while ($row5 = mysqli_fetch_assoc($result5)) {

            echo "<p>";
            echo $row5["VerseNum"] . ": " . $row5["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }
}
