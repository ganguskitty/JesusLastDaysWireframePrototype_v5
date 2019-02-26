<?php

/* 
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function displayCrucifixionDay() {

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

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('John.19.1', 'John.19.2', 'John.19.3', 'John.19.4', 'John.19.5', 'John.19.6', 'John.19.7', 'John.19.8', 'John.19.9', 'John.19.10', 'John.19.11', 'John.19.12', 'John.19.13', 'John.19.14', 'John.19.15', 'John.19.16', 'John.19.17', 'John.19.18', 'John.19.19', 'John.19.20', 'John.19.21', 'John.19.22', 'John.19.23', 'John.19.24', 'John.19.25', 'John.19.26', 'John.19.27', 'John.19.28', 'John.19.29', 'John.19.30', 'John.19.31', 'John.19.32', 'John.19.33', 'John.19.34', 'John.19.35', 'John.19.36', 'John.19.37', 'John.19.38', 'John.19.39', 'John.19.40')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Friday, April 3</h3>";
        echo "<h5>Day of Crucifixion</h5>";
        echo "<h5>John 19:1-40</h5>";
// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>";
            echo $row["VerseNum"] . ": " . $row["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql2 = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.23.1', 'Luke.23.2', 'Luke.23.3', 'Luke.23.4', 'Luke.23.5', 'Luke.23.6', 'Luke.23.7', 'Luke.23.8', 'Luke.23.9', 'Luke.23.10', 'Luke.23.11', 'Luke.23.12', 'Luke.23.13', 'Luke.23.14', 'Luke.23.15', 'Luke.23.16', 'Luke.23.17', 'Luke.23.18', 'Luke.23.19', 'Luke.23.20', 'Luke.23.21', 'Luke.23.22', 'Luke.23.23', 'Luke.23.24', 'Luke.23.25')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>Luke 23:1-25</h5>";
// output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql3 = "SELECT * FROM Verses WHERE OsisRef IN ('Mark.15.1', 'Mark.15.2', 'Mark.15.3', 'Mark.15.4', 'Mark.15.5', 'Mark.15.6', 'Mark.15.7', 'Mark.15.8', 'Mark.15.9', 'Mark.15.10', 'Mark.15.11', 'Mark.15.12', 'Mark.15.13', 'Mark.15.14', 'Mark.15.15', 'Mark.15.16', 'Mark.15.17', 'Mark.15.18', 'Mark.15.19', 'Mark.15.20', 'Mark.15.21', 'Mark.15.22', 'Mark.15.23', 'Mark.15.24', 'Mark.15.25', 'Mark.15.26', 'Mark.15.27', 'Mark.15.28', 'Mark.15.29', 'Mark.15.30', 'Mark.15.31', 'Mark.15.32', 'Mark.15.33', 'Mark.15.34', 'Mark.15.35', 'Mark.15.36', 'Mark.15.37')";

    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {

        echo "<h5>Mark 15:1-37</h5>";
// output data of each row
        while ($row3 = mysqli_fetch_assoc($result3)) {

            echo "<p>";
            echo $row3["VerseNum"] . ": " . $row3["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql4 = "SELECT * FROM Verses WHERE OsisRef IN ('Matt.27.11', 'Matt.27.12', 'Matt.27.13', 'Matt.27.14', 'Matt.27.15', 'Matt.27.16', 'Matt.27.17', 'Matt.27.18', 'Matt.27.19', 'Matt.27.20', 'Matt.27.21', 'Matt.27.22', 'Matt.27.23', 'Matt.27.24', 'Matt.27.25', 'Matt.27.26', 'Matt.27.27', 'Matt.27.28', 'Matt.27.29', 'Matt.27.30', 'Matt.27.31')";

    $result4 = mysqli_query($conn, $sql4);

    if (mysqli_num_rows($result4) > 0) {

        echo "<h5>Matthew 27:11-31</h5>";
// output data of each row
        while ($row4 = mysqli_fetch_assoc($result4)) {

            echo "<p>";
            echo $row4["VerseNum"] . ": " . $row4["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql5 = "SELECT * FROM Verses WHERE OsisRef IN ('Zech.11.13')";

    $result5 = mysqli_query($conn, $sql5);

    if (mysqli_num_rows($result5) > 0) {

        echo "<h5>Zechariah 11:13</h5>";
// output data of each row
        while ($row5 = mysqli_fetch_assoc($result5)) {

            echo "<p>";
            echo $row5["VerseNum"] . ": " . $row5["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql6 = "SELECT * FROM Verses WHERE OsisRef IN ('Ps.69.25')";

    $result6 = mysqli_query($conn, $sql6);

    if (mysqli_num_rows($result6) > 0) {

        echo "<h5>Psalms 69:25</h5>";
// output data of each row
        while ($row6 = mysqli_fetch_assoc($result6)) {

            echo "<p>";
            echo $row6["VerseNum"] . ": " . $row6["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql7 = "SELECT * FROM Verses WHERE OsisRef IN ('Ps.109.8')";

    $result7 = mysqli_query($conn, $sql7);

    if (mysqli_num_rows($result7) > 0) {

        echo "<h5>Psalms 109:8</h5>";
// output data of each row
        while ($row7 = mysqli_fetch_assoc($result7)) {

            echo "<p>";
            echo $row7["VerseNum"] . ": " . $row7["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql8 = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.23.26', 'Luke.23.27', 'Luke.23.28', 'Luke.23.29', 'Luke.23.30', 'Luke.23.31', 'Luke.23.32', 'Luke.23.33', 'Luke.23.34', 'Luke.23.35', 'Luke.23.36', 'Luke.23.37', 'Luke.23.38', 'Luke.23.39', 'Luke.23.40', 'Luke.23.41', 'Luke.23.42', 'Luke.23.43', 'Luke.23.44', 'Luke.23.45', 'Luke.23.46')";

    $result8 = mysqli_query($conn, $sql8);

    if (mysqli_num_rows($result8) > 0) {

        echo "<h5>Luke 23:26-46</h5>";
// output data of each row
        while ($row8 = mysqli_fetch_assoc($result8)) {

            echo "<p>";
            echo $row8["VerseNum"] . ": " . $row8["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql9 = "SELECT * FROM Verses WHERE OsisRef IN ('Mark.15.38', 'Mark.15.39', 'Mark.15.40', 'Mark.15.41', 'Mark.15.42', 'Mark.15.43')";

    $result9 = mysqli_query($conn, $sql9);

    if (mysqli_num_rows($result9) > 0) {

        echo "<h5>Mark 15:38-43</h5>";
// output data of each row
        while ($row9 = mysqli_fetch_assoc($result9)) {

            echo "<p>";
            echo $row9["VerseNum"] . ": " . $row9["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql10 = "SELECT * FROM Verses WHERE OsisRef IN ('Matt.27.32', 'Matt.27.33', 'Matt.27.34', 'Matt.27.35', 'Matt.27.36', 'Matt.27.37', 'Matt.27.38', 'Matt.27.39', 'Matt.27.40', 'Matt.27.41', 'Matt.27.42', 'Matt.27.43', 'Matt.27.44', 'Matt.27.45', 'Matt.27.46', 'Matt.27.47', 'Matt.27.48', 'Matt.27.49', 'Matt.27.50')";

    $result10 = mysqli_query($conn, $sql10);

    if (mysqli_num_rows($result10) > 0) {

        echo "<h5>Matthew 27:32-50</h5>";
// output data of each row
        while ($row10 = mysqli_fetch_assoc($result10)) {

            echo "<p>";
            echo $row10["VerseNum"] . ": " . $row10["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql11 = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.23.47', 'Luke.23.48', 'Luke.23.49')";

    $result11 = mysqli_query($conn, $sql11);

    if (mysqli_num_rows($result11) > 0) {

        echo "<h5>Luke 23:47-49</h5>";
// output data of each row
        while ($row11 = mysqli_fetch_assoc($result11)) {

            echo "<p>";
            echo $row11["VerseNum"] . ": " . $row11["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql12 = "SELECT * FROM Verses WHERE OsisRef IN ('Matt.27.51', 'Matt.27.52', 'Matt.27.53', 'Matt.27.54', 'Matt.27.55', 'Matt.27.56')";

    $result12 = mysqli_query($conn, $sql12);

    if (mysqli_num_rows($result12) > 0) {

        echo "<h5>Matthew 27:51-56</h5>";
// output data of each row
        while ($row12 = mysqli_fetch_assoc($result12)) {

            echo "<p>";
            echo $row12["VerseNum"] . ": " . $row12["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql13 = "SELECT * FROM Verses WHERE OsisRef IN ('John.19.31', 'John.19.32', 'John.19.33', 'John.19.34', 'John.19.35', 'John.19.36', 'John.19.37')";

    $result13 = mysqli_query($conn, $sql13);

    if (mysqli_num_rows($result13) > 0) {

        echo "<h5>John 19:31-37</h5>";
// output data of each row
        while ($row13 = mysqli_fetch_assoc($result13)) {

            echo "<p>";
            echo $row13["VerseNum"] . ": " . $row13["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql14 = "SELECT * FROM Verses WHERE OsisRef IN ('Exod.12.46')";

    $result14 = mysqli_query($conn, $sql14);

    if (mysqli_num_rows($result14) > 0) {

        echo "<h5>Exodus 12:46</h5>";
// output data of each row
        while ($row14 = mysqli_fetch_assoc($result14)) {

            echo "<p>";
            echo $row14["VerseNum"] . ": " . $row14["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql15 = "SELECT * FROM Verses WHERE OsisRef IN ('Num.9.12')";

    $result15 = mysqli_query($conn, $sql15);

    if (mysqli_num_rows($result15) > 0) {

        echo "<h5>Numbers 9:12</h5>";
// output data of each row
        while ($row15 = mysqli_fetch_assoc($result15)) {

            echo "<p>";
            echo $row15["VerseNum"] . ": " . $row15["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }
}
