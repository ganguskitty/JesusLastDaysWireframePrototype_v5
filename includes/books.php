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
            $bookName = $row["BookName"];
            $bookID = $row["BookID"];

            echo "<button id='" . $bookID . "' name='" . $bookName . "' type='button' class='list-group-item list-group-item-action' onclick='showChapters(this.id, " . "this.name, " . $row["NumOfChapters"] . ")'" . ">" . $row["BookName"] . " " . "</button>";
        }
    } else {

        echo "There is no data available.";
    }
}

function newTestamentBooksList() { //Shows names of book that belong to the New Testament
    include_once 'login.php';

    $sql = "SELECT * FROM Books WHERE BookID BETWEEN 40 AND 66";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

// output data of each row
        while ($row = mysqli_fetch_assoc($result)) { //Displays book nav
            $bookName = $row["BookName"];
            $bookID = $row["BookID"];

            echo "<button id='" . $bookID . "' name='" . $bookName . "' type='button' class='list-group-item list-group-item-action' onclick='showChapters(this.id, " . "this.name, " . $row["NumOfChapters"] . ")'" . ">" . $row["BookName"] . " " . "</button>";
        }
    } else {

        echo "There is no data available.";
    }
}

//$chapter = $_POST['buttonID'];
//$bookName = $_POST['book'];
//$bkID = $_POST["bookID"];

function loadChapterText() {

    include_once 'login.php';

    $chapter = $_REQUEST['btnID'];
    $bookName = $_REQUEST['bookName'];
    $bkID = $_REQUEST['bkID'];

//    $bookID = $bkID;
//    $bkName = $bookName;
//    $bookChapter = $chapter;
//    $bookID = 1;
//    $bkName = Genesis;
//    $bookChapter = 1;
    //echo $bookID;

    $sql = "SELECT * FROM Verses WHERE BookID = '$bkID' AND Chapter = '$chapter'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        //Output data of each row
        while ($row = mysqli_fetch_assoc($result)) { //Display the chapter content
            echo "<p>" . $row["VerseNum"] . " " . $row["VerseText"] . "</p>";
        }
    } else {
        echo "There is no data available";
    }

    
//    echo "<p>";
//    echo $chapter;
//    echo "<br>";
//    echo $bookName;
//    echo "<br>";
//    echo $bkID;
//    echo "</p>";
}
