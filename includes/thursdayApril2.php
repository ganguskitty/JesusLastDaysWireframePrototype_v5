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

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('Mark.14.12', 'Mark.14.13', 'Mark.14.14', 'Mark.14.15', 'Mark.14.16')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Thursday, April 2</h3>";
        echo "<h5>First Day of Unleavened Bread</h5>";
        echo "<h5>Mark 14:12-16</h5>";
// output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>";
            echo $row["VerseNum"] . ": " . $row["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data available.";
    }

    $sql2 = "SELECT * from Verses WHERE OsisRef IN ('Matt.26.17', 'Matt.26.18', 'Matt.26.19')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>Matthew 26:17-19</h5>";
        // output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql3 = "SELECT * from Verses WHERE OsisRef IN ('Luke.22.14', 'Luke.22.15', 'Luke.22.16', 'Luke.22.17', 'Luke.22.18')";

    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {

        echo "<h5>Luke 22:14-18</h5>";
        // output data of each row
        while ($row3 = mysqli_fetch_assoc($result3)) {

            echo "<p>";
            echo $row3["VerseNum"] . ": " . $row3["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql4 = "SELECT * from Verses WHERE OsisRef IN ('Mark.14.17', 'Mark.14.18', 'Mark.14.19', 'Mark.14.20', 'Mark.14.21')";

    $result4 = mysqli_query($conn, $sql4);

    if (mysqli_num_rows($result4) > 0) {

        echo "<h5>Mark 14:17-21</h5>";
        // output data of each row
        while ($row4 = mysqli_fetch_assoc($result4)) {

            echo "<p>";
            echo $row4["VerseNum"] . ": " . $row4["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql5 = "SELECT * from Verses WHERE OsisRef IN ('Matt.26.20', 'Matt.26.21', 'Matt.26.22', 'Matt.26.23', 'Matt.26.24', 'Matt.26.25')";

    $result5 = mysqli_query($conn, $sql5);

    if (mysqli_num_rows($result5) > 0) {

        echo "<h5>Matthew 26:20-25</h5>";
        // output data of each row
        while ($row5 = mysqli_fetch_assoc($result5)) {

            echo "<p>";
            echo $row5["VerseNum"] . ": " . $row5["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql6 = "SELECT * from Verses WHERE OsisRef IN ('Luke.22.19', 'Luke.22.20', 'Luke.22.21', 'Luke.22.22', 'Luke.22.23')";

    $result6 = mysqli_query($conn, $sql6);

    if (mysqli_num_rows($result6) > 0) {

        echo "<h5>Luke 22:19-23</h5>";
        // output data of each row
        while ($row6 = mysqli_fetch_assoc($result6)) {

            echo "<p>";
            echo $row6["VerseNum"] . ": " . $row6["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql7 = "SELECT * from Verses WHERE OsisRef IN ('Mark.14.22', 'Mark.14.23', 'Mark.14.24', 'Mark.14.25')";

    $result7 = mysqli_query($conn, $sql7);

    if (mysqli_num_rows($result7) > 0) {

        echo "<h5>Mark 14:22-25</h5>";
        // output data of each row
        while ($row7 = mysqli_fetch_assoc($result7)) {

            echo "<p>";
            echo $row7["VerseNum"] . ": " . $row7["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql8 = "SELECT * from Verses WHERE OsisRef IN ('Matt.26.26', 'Matt.26.27', 'Matt.26.28', 'Matt.26.29')";

    $result8 = mysqli_query($conn, $sql8);

    if (mysqli_num_rows($result8) > 0) {

        echo "<h5>Matthew 26:26-29</h5>";
        // output data of each row
        while ($row8 = mysqli_fetch_assoc($result8)) {

            echo "<p>";
            echo $row8["VerseNum"] . ": " . $row8["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql9 = "SELECT * from Verses WHERE OsisRef IN ('John.13.2', 'John.13.3', 'John.13.4', 'John.13.5', 'John.13.6', 'John.13.7', 'John.13.8', 'John.13.9', 'John.13.10', 'John.13.11', 'John.13.12', 'John.13.13', 'John.13.14', 'John.13.15', 'John.13.16', 'John.13.17', 'John.13.18', 'John.13.19', 'John.13.20', 'John.13.21', 'John.13.22', 'John.13.23', 'John.13.24', 'John.13.25', 'John.13.26', 'John.13.27', 'John.13.28', 'John.13.29', 'John.13.30', 'John.13.31', 'John.13.32', 'John.13.33', 'John.13.34', 'John.13.35', 'John.13.36', 'John.13.37', 'John.13.38')";

    $result9 = mysqli_query($conn, $sql9);

    if (mysqli_num_rows($result9) > 0) {

        echo "<h5>John 13:2-38</h5>";
        // output data of each row
        while ($row9 = mysqli_fetch_assoc($result9)) {

            echo "<p>";
            echo $row9["VerseNum"] . ": " . $row9["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql10 = "SELECT * from Verses WHERE OsisRef IN ('Luke.22.24', 'Luke.22.25', 'Luke.22.26', 'Luke.22.27', 'Luke.22.28', 'Luke.22.29', 'Luke.22.30')";

    $result10 = mysqli_query($conn, $sql10);

    if (mysqli_num_rows($result10) > 0) {

        echo "<h5>Luke 22:24-30</h5>";
        // output data of each row
        while ($row10 = mysqli_fetch_assoc($result10)) {

            echo "<p>";
            echo $row10["VerseNum"] . ": " . $row10["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql11 = "SELECT * from Verses WHERE OsisRef IN ('Luke.22.31', 'Luke.22.32', 'Luke.22.33', 'Luke.22.34', 'Luke.22.35', 'Luke.22.36', 'Luke.22.37', 'Luke.22.38')";

    $result11 = mysqli_query($conn, $sql11);

    if (mysqli_num_rows($result11) > 0) {

        echo "<h5>Luke 22:31-38</h5>";
        // output data of each row
        while ($row11 = mysqli_fetch_assoc($result11)) {

            echo "<p>";
            echo $row11["VerseNum"] . ": " . $row11["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql12 = "SELECT * from Verses WHERE OsisRef IN ('John.14.1', 'John.14.2', 'John.14.3', 'John.14.4', 'John.14.5', 'John.14.6', 'John.14.7', 'John.14.8', 'John.14.9', 'John.14.10', 'John.14.11', 'John.14.12', 'John.14.13', 'John.14.14', 'John.14.15', 'John.14.16', 'John.14.17', 'John.14.18', 'John.14.19', 'John.14.20', 'John.14.21', 'John.14.22', 'John.14.23', 'John.14.24', 'John.14.25', 'John.14.26', 'John.14.27', 'John.14.28', 'John.14.29', 'John.14.30', 'John.14.31')";

    $result12 = mysqli_query($conn, $sql12);

    if (mysqli_num_rows($result12) > 0) {

        echo "<h5>John 14:1-31</h5>";
        // output data of each row
        while ($row12 = mysqli_fetch_assoc($result12)) {

            echo "<p>";
            echo $row12["VerseNum"] . ": " . $row12["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql13 = "SELECT * from Verses WHERE OsisRef IN ('Mark.14.26')";

    $result13 = mysqli_query($conn, $sql13);

    if (mysqli_num_rows($result12) > 0) {

        echo "<h5>Mark 14:26</h5>";
        // output data of each row
        while ($row13 = mysqli_fetch_assoc($result13)) {

            echo "<p>";
            echo $row13["VerseNum"] . ": " . $row13["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql14 = "SELECT * from Verses WHERE OsisRef IN ('Matt.26.30')";

    $result14 = mysqli_query($conn, $sql14);

    if (mysqli_num_rows($result14) > 0) {

        echo "<h5>Matthew 26:30</h5>";
        // output data of each row
        while ($row14 = mysqli_fetch_assoc($result14)) {

            echo "<p>";
            echo $row14["VerseNum"] . ": " . $row14["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql15 = "SELECT * from Verses WHERE OsisRef IN ('John.15.1', 'John.15.2', 'John.15.3', 'John.15.4', 'John.15.5', 'John.15.6', 'John.15.7', 'John.15.8', 'John.15.9', 'John.15.10', 'John.15.11', 'John.15.12', 'John.15.13', 'John.15.14', 'John.15.15', 'John.15.16', 'John.15.17', 'John.15.18', 'John.15.19', 'John.15.20', 'John.15.21', 'John.15.22', 'John.15.23', 'John.15.24', 'John.15.25', 'John.15.26', 'John.15.27')";

    $result15 = mysqli_query($conn, $sql15);

    if (mysqli_num_rows($result15) > 0) {

        echo "<h5>John 15:1-27</h5>";
        // output data of each row
        while ($row15 = mysqli_fetch_assoc($result15)) {

            echo "<p>";
            echo $row15["VerseNum"] . ": " . $row15["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql16 = "SELECT * from Verses WHERE OsisRef IN ('John.18.1')";

    $result16 = mysqli_query($conn, $sql16);

    if (mysqli_num_rows($result16) > 0) {

        echo "<h5>John 18:1</h5>";
        // output data of each row
        while ($row16 = mysqli_fetch_assoc($result16)) {

            echo "<p>";
            echo $row16["VerseNum"] . ": " . $row16["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql17 = "SELECT * from Verses WHERE OsisRef IN ('Luke.22.39')";

    $result17 = mysqli_query($conn, $sql17);

    if (mysqli_num_rows($result17) > 0) {

        echo "<h5>Luke 22:39</h5>";
        // output data of each row
        while ($row17 = mysqli_fetch_assoc($result17)) {

            echo "<p>";
            echo $row17["VerseNum"] . ": " . $row17["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql18 = "SELECT * from Verses WHERE OsisRef IN ('Mark.14.27', 'Mark.14.28', 'Mark.14.29', 'Mark.14.30', 'Mark.14.31')";

    $result18 = mysqli_query($conn, $sql18);

    if (mysqli_num_rows($result18) > 0) {

        echo "<h5>Mark 14:27-31</h5>";
        // output data of each row
        while ($row18 = mysqli_fetch_assoc($result18)) {

            echo "<p>";
            echo $row18["VerseNum"] . ": " . $row18["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql19 = "SELECT * from Verses WHERE OsisRef IN ('Matt.26.31', 'Matt.26.32', 'Matt.26.33', 'Matt.26.34', 'Matt.26.35', 'Matt.26.36')";

    $result19 = mysqli_query($conn, $sql19);

    if (mysqli_num_rows($result19) > 0) {

        echo "<h5>Matthew 26:31-36</h5>";
        // output data of each row
        while ($row19 = mysqli_fetch_assoc($result19)) {

            echo "<p>";
            echo $row19["VerseNum"] . ": " . $row19["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }
}