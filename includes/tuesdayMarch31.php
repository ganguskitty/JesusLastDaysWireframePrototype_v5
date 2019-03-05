<?php

/**
 * Created by NetBeans.
 * User: Rodolfo Godinez
 * Date: 8/6/18
 * Time: 7:24 PM
 */
echo $_POST["method"]();

function displayTuesdayMarch31() {
    
    include_once 'login.php';

    $sql = "SELECT * FROM Verses WHERE OsisRef IN ('Luke.20.1', 'Luke.20.2', 'Luke.20.3', 'Luke.20.4', 'Luke.20.5', 'Luke.20.6', 'Luke.20.7', 'Luke.20.8', 'Luke.20.9', 'Luke.20.10', 'Luke.20.11', 'Luke.20.12', 'Luke.20.13', 'Luke.20.14', 'Luke.20.15', 'Luke.20.16', 'Luke.20.17', 'Luke.20.18', 'Luke.20.19', 'Luke.20.20', 'Luke.20.21', 'Luke.20.22', 'Luke.20.23', 'Luke.20.24', 'Luke.20.25', 'Luke.20.26')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Tuesday, March 31</h3>";
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

    $sql2 = "SELECT * from Verses WHERE OsisRef IN ('Mark.11.13', 'Mark.11.14', 'Mark.11.15', 'Mark.11.16', 'Mark.11.17', 'Mark.11.18', 'Mark.11.19', 'Mark.11.20', 'Mark.11.21', 'Mark.11.22', 'Mark.11.23', 'Mark.11.24', 'Mark.11.25', 'Mark.11.26', 'Mark.11.27', 'Mark.11.28', 'Mark.11.29', 'Mark.11.30', 'Mark.11.31', 'Mark.11.32', 'Mark.11.33')";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        echo "<h5>Mark 11:13-33</h5>";
        // output data of each row
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<p>";
            echo $row2["VerseNum"] . ": " . $row2["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql3 = "SELECT * from Verses WHERE OsisRef IN ('Mark.12.1', 'Mark.12.2', 'Mark.12.3', 'Mark.12.4', 'Mark.12.5', 'Mark.12.6', 'Mark.12.7', 'Mark.12.8', 'Mark.12.9', 'Mark.12.10', 'Mark.12.11', 'Mark.12.12', 'Mark.12.13', 'Mark.12.14', 'Mark.12.15', 'Mark.12.16', 'Mark.12.17', 'Mark.12.18', 'Mark.12.19', 'Mark.12.20', 'Mark.12.21', 'Mark.12.22', 'Mark.12.23', 'Mark.12.24', 'Mark.12.25', 'Mark.12.26', 'Mark.12.27', 'Mark.12.28', 'Mark.12.29', 'Mark.12.30', 'Mark.12.31', 'Mark.12.32', 'Mark.12.33', 'Mark.12.34', 'Mark.12.35', 'Mark.12.36', 'Mark.12.37', 'Mark.12.38', 'Mark.12.39', 'Mark.12.40')";

    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {

        echo "<h5>Mark 12:1-40</h5>";
        // output data of each row
        while ($row3 = mysqli_fetch_assoc($result3)) {

            echo "<p>";
            echo $row3["VerseNum"] . ": " . $row3["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql4 = "SELECT * from Verses WHERE OsisRef IN ('Matt.21.19', 'Matt.21.20', 'Matt.21.21', 'Matt.21.22', 'Matt.21.23', 'Matt.21.24', 'Matt.21.25', 'Matt.21.26', 'Matt.21.27', 'Matt.21.28', 'Matt.21.29', 'Matt.21.30')";

    $result4 = mysqli_query($conn, $sql4);

    if (mysqli_num_rows($result4) > 0) {

        echo "<h5>Matthew 21:19-30</h5>";
        // output data of each row
        while ($row4 = mysqli_fetch_assoc($result4)) {

            echo "<p>";
            echo $row4["VerseNum"] . ": " . $row4["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql5 = "SELECT * from Verses WHERE OsisRef IN ('Matt.22.1', 'Matt.22.2', 'Matt.22.3', 'Matt.22.4', 'Matt.22.5', 'Matt.22.6', 'Matt.22.7', 'Matt.22.8', 'Matt.22.9', 'Matt.22.10', 'Matt.22.11', 'Matt.22.12', 'Matt.22.13', 'Matt.22.14', 'Matt.22.15', 'Matt.22.16', 'Matt.22.17', 'Matt.22.18', 'Matt.22.19', 'Matt.22.20', 'Matt.22.21', 'Matt.22.22', 'Matt.22.23', 'Matt.22.24', 'Matt.22.25', 'Matt.22.26', 'Matt.22.27', 'Matt.22.28', 'Matt.22.29', 'Matt.22.30', 'Matt.22.13', 'Matt.22.32', 'Matt.22.33', 'Matt.22.34', 'Matt.22.35', 'Matt.22.36', 'Matt.22.37', 'Matt.22.38', 'Matt.22.39', 'Matt.22.40', 'Matt.22.41', 'Matt.22.42', 'Matt.22.43', 'Matt.22.44', 'Matt.22.45', 'Matt.22.46')";

    $result5 = mysqli_query($conn, $sql5);

    if (mysqli_num_rows($result5) > 0) {

        echo "<h5>Matthew 22:1-46</h5>";
        // output data of each row
        while ($row5 = mysqli_fetch_assoc($result5)) {

            echo "<p>";
            echo $row5["VerseNum"] . ": " . $row5["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql6 = "SELECT * from Verses WHERE OsisRef IN ('Luke.20.27', 'Luke.20.28', 'Luke.20.29', 'Luke.20.30', 'Luke.20.31', 'Luke.20.32', 'Luke.20.33', 'Luke.20.34', 'Luke.20.35', 'Luke.20.36', 'Luke.20.37', 'Luke.20.38', 'Luke.20.39', 'Luke.20.40', 'Luke.20.41', 'Luke.20.42', 'Luke.20.43', 'Luke.20.44', 'Luke.20.45', 'Luke.20.46', 'Luke.20.47')";

    $result6 = mysqli_query($conn, $sql6);

    if (mysqli_num_rows($result6) > 0) {

        echo "<h5>Luke 20:27-47</h5>";
        // output data of each row
        while ($row6 = mysqli_fetch_assoc($result6)) {

            echo "<p>";
            echo $row6["VerseNum"] . ": " . $row6["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

//    $sql7 = "SELECT * from Verses WHERE OsisRef IN ('Mark.12.1', 'Mark.12.2', 'Mark.12.3', 'Mark.12.4', 'Mark.12.5', 'Mark.12.6', 'Mark.12.7', 'Mark.12.8', 'Mark.12.9', 'Mark.12.10', 'Mark.12.11', 'Mark.12.12', 'Mark.12.13', 'Mark.12.14', 'Mark.12.15', 'Mark.12.16', 'Mark.12.17', 'Mark.12.18', 'Mark.12.19', 'Mark.12.20', 'Mark.12.21', 'Mark.12.22', 'Mark.12.23', 'Mark.12.24', 'Mark.12.25', 'Mark.12.26', 'Mark.12.27', 'Mark.12.28', 'Mark.12.29', 'Mark.12.30', 'Mark.12.31', 'Mark.12.32', 'Mark.12.33', 'Mark.12.34', 'Mark.12.35', 'Mark.12.36', 'Mark.12.37', 'Mark.12.38', 'Mark.12.39', 'Mark.12.40')";
//
//    $result7 = mysqli_query($conn, $sql7);
//
//    if (mysqli_num_rows($result7) > 0) {
//
//        echo "<h5>Mark 12:1-40</h5>";
//        // output data of each row
//        while ($row7 = mysqli_fetch_assoc($result7)) {
//
//            echo "<p>";
//            echo $row7["VerseNum"] . ": " . $row7["VerseText"];
//            echo "</p>";
//        }
//    } else {
//
//        echo "There is no data to display.";
//    }

    $sql8 = "SELECT * from Verses WHERE OsisRef IN ('Matt.23.1', 'Matt.23.2', 'Matt.23.3', 'Matt.23.4', 'Matt.23.5', 'Matt.23.6', 'Matt.23.7', 'Matt.23.8', 'Matt.23.9', 'Matt.23.10', 'Matt.23.11', 'Matt.23.12', 'Matt.23.13', 'Matt.23.14', 'Matt.23.15', 'Matt.23.16', 'Matt.23.17', 'Matt.23.18', 'Matt.23.19', 'Matt.23.20', 'Matt.23.21', 'Matt.23.22', 'Matt.23.23', 'Matt.23.24', 'Matt.23.25', 'Matt.23.26', 'Matt.23.27', 'Matt.23.28', 'Matt.23.29')";

    $result8 = mysqli_query($conn, $sql8);

    if (mysqli_num_rows($result8) > 0) {

        echo "<h5>Matthew 23:1-29</h5>";
        // output data of each row
        while ($row8 = mysqli_fetch_assoc($result8)) {

            echo "<p>";
            echo $row8["VerseNum"] . ": " . $row8["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql9 = "SELECT * from Verses WHERE OsisRef IN ('Luke.21.1', 'Luke.21.2', 'Luke.21.3', 'Luke.21.4')";

    $result9 = mysqli_query($conn, $sql9);

    if (mysqli_num_rows($result9) > 0) {

        echo "<h5>Luke 21:1-4</h5>";
        // output data of each row
        while ($row9 = mysqli_fetch_assoc($result9)) {

            echo "<p>";
            echo $row9["VerseNum"] . ": " . $row9["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql10 = "SELECT * from Verses WHERE OsisRef IN ('Mark.12.41', 'Mark.12.42', 'Mark.12.43', 'Mark.12.44')";

    $result10 = mysqli_query($conn, $sql10);

    if (mysqli_num_rows($result10) > 0) {

        echo "<h5>Mark 12:41-44</h5>";
        // output data of each row
        while ($row10 = mysqli_fetch_assoc($result10)) {

            echo "<p>";
            echo $row10["VerseNum"] . ": " . $row10["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql11 = "SELECT * from Verses WHERE OsisRef IN ('Luke.21.5', 'Luke.21.6', 'Luke.21.7', 'Luke.21.8', 'Luke.21.9', 'Luke.21.10', 'Luke.21.11', 'Luke.21.12', 'Luke.21.13', 'Luke.21.14', 'Luke.21.15', 'Luke.21.16', 'Luke.21.17', 'Luke.21.18', 'Luke.21.19', 'Luke.21.20', 'Luke.21.21', 'Luke.21.22', 'Luke.21.23', 'Luke.21.24', 'Luke.21.25', 'Luke.21.26', 'Luke.21.27', 'Luke.21.28', 'Luke.21.29', 'Luke.21.30', 'Luke.21.31', 'Luke.21.32', 'Luke.21.33', 'Luke.21.34', 'Luke.21.35', 'Luke.21.36')";

    $result11 = mysqli_query($conn, $sql11);

    if (mysqli_num_rows($result11) > 0) {

        echo "<h5>Luke 21:5-36</h5>";
        // output data of each row
        while ($row11 = mysqli_fetch_assoc($result11)) {

            echo "<p>";
            echo $row11["VerseNum"] . ": " . $row11["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql12 = "SELECT * from Verses WHERE OsisRef IN ('Mark.12.1', 'Mark.12.2', 'Mark.12.3', 'Mark.12.4', 'Mark.12.5', 'Mark.12.6', 'Mark.12.7', 'Mark.12.8', 'Mark.12.9', 'Mark.12.10', 'Mark.12.11', 'Mark.12.12', 'Mark.12.13', 'Mark.12.14', 'Mark.12.15', 'Mark.12.16', 'Mark.12.17', 'Mark.12.18', 'Mark.12.19', 'Mark.12.20', 'Mark.12.21', 'Mark.12.22', 'Mark.12.23', 'Mark.12.24', 'Mark.12.25', 'Mark.12.26', 'Mark.12.27', 'Mark.12.28', 'Mark.12.29', 'Mark.12.30', 'Mark.12.31', 'Mark.12.32', 'Mark.12.33', 'Mark.12.34', 'Mark.12.35', 'Mark.12.36', 'Mark.12.37')";

    $result12 = mysqli_query($conn, $sql12);

    if (mysqli_num_rows($result12) > 0) {

        echo "<h5>Mark 12:1-37</h5>";
        // output data of each row
        while ($row12 = mysqli_fetch_assoc($result12)) {

            echo "<p>";
            echo $row12["VerseNum"] . ": " . $row12["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql13 = "SELECT * from Verses WHERE OsisRef IN ('Matt.24.1', 'Matt.24.2', 'Matt.24.3', 'Matt.24.4', 'Matt.24.5', 'Matt.24.6', 'Matt.24.7', 'Matt.24.8', 'Matt.24.9', 'Matt.24.10', 'Matt.24.11', 'Matt.24.12', 'Matt.24.13', 'Matt.24.14', 'Matt.24.15', 'Matt.24.16', 'Matt.24.17', 'Matt.24.18', 'Matt.24.19', 'Matt.24.20', 'Matt.24.21', 'Matt.24.22', 'Matt.24.23', 'Matt.24.24', 'Matt.24.25', 'Matt.24.26', 'Matt.24.27', 'Matt.24.28', 'Matt.24.29', 'Matt.24.30', 'Matt.24.31', 'Matt.24.32', 'Matt.24.33', 'Matt.24.34', 'Matt.24.35', 'Matt.24.36', 'Matt.24.37', 'Matt.24.38', 'Matt.24.39', 'Matt.24.40', 'Matt.24.41', 'Matt.24.42', 'Matt.24.43', 'Matt.24.44', 'Matt.24.45', 'Matt.24.46', 'Matt.24.47', 'Matt.24.48', 'Matt.24.49', 'Matt.24.50', 'Matt.24.51')";

    $result13 = mysqli_query($conn, $sql13);

    if (mysqli_num_rows($result13) > 0) {

        echo "<h5>Matthew 24:1-51</h5>";
        // output data of each row
        while ($row13 = mysqli_fetch_assoc($result13)) {

            echo "<p>";
            echo $row13["VerseNum"] . ": " . $row13["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql14 = "SELECT * from Verses WHERE OsisRef IN ('Luke.21.37', 'Luke.21.38')";

    $result14 = mysqli_query($conn, $sql14);

    if (mysqli_num_rows($result14) > 0) {

        echo "<h5>Luke 21:37-38</h5>";
        // output data of each row
        while ($row14 = mysqli_fetch_assoc($result14)) {

            echo "<p>";
            echo $row14["VerseNum"] . ": " . $row14["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql15 = "SELECT * from Verses WHERE OsisRef IN ('Matt.25.1', 'Matt.25.2', 'Matt.25.3', 'Matt.25.4', 'Matt.25.5', 'Matt.25.6', 'Matt.25.7', 'Matt.25.8', 'Matt.25.9', 'Matt.25.10', 'Matt.25.11', 'Matt.25.12', 'Matt.25.13', 'Matt.25.14', 'Matt.25.15', 'Matt.25.16', 'Matt.25.17', 'Matt.25.18', 'Matt.25.19', 'Matt.25.20', 'Matt.25.21', 'Matt.25.22', 'Matt.25.23', 'Matt.25.24', 'Matt.25.25', 'Matt.25.26', 'Matt.25.27', 'Matt.25.28', 'Matt.25.29', 'Matt.25.30', 'Matt.25.31', 'Matt.25.32', 'Matt.25.33', 'Matt.25.34', 'Matt.25.35', 'Matt.25.36', 'Matt.25.37', 'Matt.25.38', 'Matt.25.39', 'Matt.25.40', 'Matt.25.41', 'Matt.25.42', 'Matt.25.43', 'Matt.25.44', 'Matt.25.45', 'Matt.25.46')";

    $result15 = mysqli_query($conn, $sql15);

    if (mysqli_num_rows($result15) > 0) {

        echo "<h5>Matthew 25:1-46</h5>";
        // output data of each row
        while ($row15 = mysqli_fetch_assoc($result15)) {

            echo "<p>";
            echo $row15["VerseNum"] . ": " . $row15["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql16 = "SELECT * from Verses WHERE OsisRef IN ('Mark.14.1', 'Mark.14.2')";

    $result16 = mysqli_query($conn, $sql16);

    if (mysqli_num_rows($result16) > 0) {

        echo "<h5>Mark 14:1-2</h5>";
        // output data of each row
        while ($row16 = mysqli_fetch_assoc($result16)) {

            echo "<p>";
            echo $row16["VerseNum"] . ": " . $row16["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql17 = "SELECT * from Verses WHERE OsisRef IN ('Matt.26.1', 'Matt.26.2', 'Matt.26.3', 'Matt.26.4', 'Matt.26.5')";

    $result17 = mysqli_query($conn, $sql17);

    if (mysqli_num_rows($result17) > 0) {

        echo "<h5>Matthew 26:1-5</h5>";
        // output data of each row
        while ($row17 = mysqli_fetch_assoc($result17)) {

            echo "<p>";
            echo $row17["VerseNum"] . ": " . $row17["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql18 = "SELECT * from Verses WHERE OsisRef IN ('Mark.14.3', 'Mark.14.4', 'Mark.14.5', 'Mark.14.6', 'Mark.14.7', 'Mark.14.8', 'Mark.14.9')";

    $result18 = mysqli_query($conn, $sql18);

    if (mysqli_num_rows($result18) > 0) {

        echo "<h5>Mark 14:3-9</h5>";
        // output data of each row
        while ($row18 = mysqli_fetch_assoc($result18)) {

            echo "<p>";
            echo $row18["VerseNum"] . ": " . $row18["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql19 = "SELECT * from Verses WHERE OsisRef IN ('Matt.26.6', 'Matt.26.7', 'Matt.26.8', 'Matt.26.9', 'Matt.26.10', 'Matt.26.11', 'Matt.26.12', 'Matt.26.13')";

    $result19 = mysqli_query($conn, $sql19);

    if (mysqli_num_rows($result19) > 0) {

        echo "<h5>Matthew 26:6-13</h5>";
        // output data of each row
        while ($row19 = mysqli_fetch_assoc($result19)) {

            echo "<p>";
            echo $row19["VerseNum"] . ": " . $row19["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql20 = "SELECT * from Verses WHERE OsisRef IN ('Luke.22.1', 'Luke.22.2', 'Luke.22.3', 'Luke.22.4', 'Luke.22.5', 'Luke.22.6', 'Luke.22.7', 'Luke.22.8', 'Luke.22.9', 'Luke.22.10', 'Luke.22.11', 'Luke.22.12', 'Luke.22.13')";

    $result20 = mysqli_query($conn, $sql20);

    if (mysqli_num_rows($result20) > 0) {

        echo "<h5>Luke 22:1-13</h5>";
        // output data of each row
        while ($row20 = mysqli_fetch_assoc($result20)) {

            echo "<p>";
            echo $row20["VerseNum"] . ": " . $row20["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql21 = "SELECT * from Verses WHERE OsisRef IN ('Mark.14.10', 'Mark.14.11')";

    $result21 = mysqli_query($conn, $sql21);

    if (mysqli_num_rows($result21) > 0) {

        echo "<h5>Mark 14:10-11</h5>";
        // output data of each row
        while ($row21 = mysqli_fetch_assoc($result21)) {

            echo "<p>";
            echo $row21["VerseNum"] . ": " . $row21["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }

    $sql22 = "SELECT * from Verses WHERE OsisRef IN ('Matt.26.14', 'Matt.26.15', 'Matt.26.16')";

    $result22 = mysqli_query($conn, $sql22);

    if (mysqli_num_rows($result22) > 0) {

        echo "<h5>Matthew 26:14-16</h5>";
        // output data of each row
        while ($row22 = mysqli_fetch_assoc($result22)) {

            echo "<p>";
            echo $row22["VerseNum"] . ": " . $row22["VerseText"];
            echo "</p>";
        }
    } else {

        echo "There is no data to display.";
    }
}
