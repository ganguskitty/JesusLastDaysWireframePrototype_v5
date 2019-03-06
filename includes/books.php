<?php

/*
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

echo $_POST["method"]();

function oldTestamentBooksList() {
    include_once 'login.php';

    $sql = "SELECT * FROM Books WHERE BookID BETWEEN 1 AND 39";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

// output data of each row
        while ($row = mysqli_fetch_assoc($result)) { //Displays book nav
            $bookID = $row["BookName"];

            echo "<button id='" . $bookID . "' type='button' class='list-group-item list-group-item-action' onclick='showChapters(this.id" . ", " . $row["NumOfChapters"] . ")'" . ">" . $row["BookName"] . " " . "</button>";
        }
    } else {

        echo "There is no data available.";
    }
}

function newTestamentBooksList() {
    include_once 'login.php';

    $sql = "SELECT * FROM Books WHERE BookID BETWEEN 40 AND 66";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

// output data of each row
        while ($row = mysqli_fetch_assoc($result)) { //Displays book nav
            $bookID = $row["BookName"];

            echo "<button id='" . $bookID . "' type='button' class='list-group-item list-group-item-action' onclick='showChapters(this.id" . ", " . $row["NumOfChapters"] . ")'" . ">" . $row["BookName"] . " " . "</button>";
        }
    } else {

        echo "There is no data available.";
    }
}

//function bookChapters() {
//    include_once 'login.php';
//
//    //$numOfChptrs = $numChapters;
//
//    echo '<script type="text/javascript">',
//    'showChapters();',
//    '</script>';
//}
