<?php

/**
 * Created by NetBeans.
 * User: Rodolfo Godinez
 * Date: 8/6/18
 * Time: 7:24 PM
 */
/* This echo creates a function call by collecting the function name from Ajax */
echo $_POST["method"]();


/* prophecyText() function Start
 * This function displays the list of Messianic Prophecies
 * by pulling from the database and assigning each column on the table
 * to a specific variable
 * ****************************************************************** */

function prophecyText() {

    include_once 'login.php';

    $verName = $_REQUEST['verseName'];

    $sql = "SELECT * FROM Prophecies";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { //Displays book nav
            $proNum = $row["ID"];
            $proText = $row["ProphecyText"];

            //Old Testament Prophecy Variables
            $oldTestProA = $row["OldTestamentA"];
            $oldTestProB = $row["OldTestamentB"];
            $oldTestProC = $row["OldTestamentC"];
            $oldTestProD = $row["OldTestamentD"];
            $oldTestProE = $row["OldTestamentE"];
            $oldTestProF = $row["OldTestamentF"];
            $oldTestProG = $row["OldTestamentG"];
            $oldTestProH = $row["OldTestamentH"];
            $oldTestProI = $row["OldTestamentI"];
            $oldTestProJ = $row["OldTestamentJ"];
            $oldTestProK = $row["OldTestamentK"];

            //New Testament Prophecy Variables
            $newTestProA = $row["NewTestamentA"];
            $newTestProB = $row["NewTestamentB"];
            $newTestProC = $row["NewTestamentC"];
            $newTestProD = $row["NewTestamentD"];
            $newTestProE = $row["NewTestamentE"];
            $newTestProF = $row["NewTestamentF"];
            $newTestProG = $row["NewTestamentG"];
            $newTestProH = $row["NewTestamentH"];
            $newTestProI = $row["NewTestamentI"];
            $newTestProJ = $row["NewTestamentJ"];
            $newTestProK = $row["NewTestamentK"];
            $newTestProL = $row["NewTestamentL"];
            $newTestProM = $row["NewTestamentM"];
            $newTestProN = $row["NewTestamentN"];
            $newTestProO = $row["NewTestamentO"];
            $newTestProP = $row["NewTestamentP"];
            $newTestProQ = $row["NewTestamentQ"];
            $newTestProR = $row["NewTestamentR"];
            $newTestProS = $row["NewTestamentS"];
            $newTestProT = $row["NewTestamentT"];
            $newTestProU = $row["NewTestamentU"];
            $newTestProV = $row["NewTestamentV"];
            $newTestProW = $row["NewTestamentW"];
            $newTestProX = $row["NewTestamentX"];
            $newTestProY = $row["NewTestamentY"];
            $newTestProZ = $row["NewTestamentZ"];
            $newTestProAA = $row["NewTestamentAA"];
            $newTestProAB = $row["NewTestamentAB"];
            $newTestProAC = $row["NewTestamentAC"];
            $newTestProAD = $row["NewTestamentAD"];
            $newTestProAE = $row["NewTestamentAE"];
            $newTestProAF = $row["NewTestamentAF"];
            $newTestProAG = $row["NewTestamentAG"];
            $newTestProAH = $row["NewTestamentAH"];
            $newTestProAI = $row["NewTestamentAI"];
            $newTestProAJ = $row["NewTestamentAJ"];
            $newTestProAK = $row["NewTestamentAK"];
            $newTestProAL = $row["NewTestamentAL"];
            $newTestProAM = $row["NewTestamentAM"];
            $newTestProAN = $row["NewTestamentAN"];
            $newTestProAO = $row["NewTestamentAO"];
            $newTestProAP = $row["NewTestamentAP"];
            $newTestProAQ = $row["NewTestamentAQ"];
            $newTestProAR = $row["NewTestamentAR"];
            $newTestProAS = $row["NewTestamentAS"];
            $newTestProAT = $row["NewTestamentAT"];
            $newTestProAU = $row["NewTestamentAU"];
            $newTestProAV = $row["NewTestamentAV"];
            $newTestProAW = $row["NewTestamentAW"];
            $newTestProAX = $row["NewTestamentAX"];
            $newTestProAY = $row["NewTestamentAY"];
            $newTestProAZ = $row["NewTestamentAZ"];
            $newTestProBA = $row["NewTestamentBA"];
            $newTestProBB = $row["NewTestamentBB"];
            $newTestProBC = $row["NewTestamentBC"];
            $newTestProBD = $row["NewTestamentBD"];
            $newTestProBE = $row["NewTestamentBE"];
            $newTestProBF = $row["NewTestamentBF"];
            $newTestProBG = $row["NewTestamentBG"];
            $newTestProBH = $row["NewTestamentBH"];

            /* The spans for each variable are made clickable and the variable is sent to the showOTProphecy
              and the showNTProphecy functions respectively as the user clicks on each. These functions are Ajax functions located
              in the prophecies.js file which in turn send the appropriate data to the displayVerse() function.
             * The displayVerse() function in turn gets the verse information from the database and sends it back to the Ajax caller
             * for display in the DOM object.             */
            echo "<p class='col-8 prophecyListOdd'>" . $proNum . " " . $proText . "</p>" . "<p class='col-2 underline prophecyListEven'>" . "<span id='oldTestProAID' onclick='showOTProphecy(\"" . $oldTestProA . "\")'>" . $oldTestProA . "</span>" . "<span id='oldTestProBID' onclick='showOTProphecy(\"" . $oldTestProB . "\")'>" . $oldTestProB . "</span>" . "<span id='oldTestProCID' onclick='showOTProphecy(\"" . $oldTestProC . "\")'>" . $oldTestProC . "</span>" . "<span id='oldTestProDID' onclick='showOTProphecy(\"" . $oldTestProD . "\")'>" . $oldTestProD . "</span>" . "<span id='oldTestProEID' onclick='showOTProphecy(\"" . $oldTestProE . "\")'>" . $oldTestProE . "</span>" . "<span id='oldTestProFID' onclick='showOTProphecy(\"" . $oldTestProF . "\")'>" . $oldTestProF . "</span>" . "<span id='oldTestProGID' onclick='showOTProphecy(\"" . $oldTestProG . "\")'>" . $oldTestProG . "</span>" . "<span id='oldTestProHID' onclick='showOTProphecy(\"" . $oldTestProH . "\")'>" . $oldTestProH . "</span>" . "<span id='oldTestProIID' onclick='showOTProphecy(\"" . $oldTestProI . "\")'>" . $oldTestProI . "</span>" . "<span id='oldTestProJID' onclick='showOTProphecy(\"" . $oldTestProJ . "\")'>" . $oldTestProJ . "</span>" . "<span id='oldTestProKID' onclick='showOTProphecy(\"" . $oldTestProK . "\")'>" . $oldTestProK . "</span></p>" . "<p class='col-2 underline prophecyListOdd'>" . "<span id='newTestProA' onclick='showNTProphecy(\"" . $newTestProA . "\")'>" . $newTestProA . "</span>" . "<span id='newTestProB' onclick='showNTProphecy(\"" . $newTestProB . "\")'>" . $newTestProB . "</span>" . "<span id='newTestProC' onclick='showNTProphecy(\"" . $newTestProC . "\")'>" . $newTestProC . "</span>" . "<span id='newTestProD' onclick='showNTProphecy(\"" . $newTestProD . "\")'>" . $newTestProD . "</span>" . "<span id='newTestProE' onclick='showNTProphecy(\"" . $newTestProE . "\")'>" . $newTestProE . "</span>" . "<span id='newTextProF' onclick='showNTProphecy(\"" . $newTestProF . "\")'>" . $newTestProF . "</span>" . "<span id='newTextProG' onclick='showNTProphecy(\"" . $newTestProG . "\")'>" . $newTestProG . "</span>" . "<span id='newTextProH' onclick='showNTProphecy(\"" . $newTestProH . "\")'>" . $newTestProH . "</span>" . "<span id='newTextProI' onclick='showNTProphecy(\"" . $newTestProI . "\")'>" . $newTestProI . "</span>" . "<span id='newTextProJ' onclick='showNTProphecy(\"" . $newTestProJ . "\")'>" . $newTestProJ . "</span>" . "<span id='newTextProK' onclick='showNTProphecy(\"" . $newTestProK . "\")'>" . $newTestProK . "</span>" . "<span id='newTextProL' onclick='showNTProphecy(\"" . $newTestProL . "\")'>" . $newTestProL . "</span>" . "<span id='newTextProM' onclick='showNTProphecy(\"" . $newTestProM . "\")'>" . $newTestProM . "</span>" . "<span id='newTextProN' onclick='showNTProphecy(\"" . $newTestProN . "\")'>" . $newTestProN . "</span>" . "<span id='newTextProO' onclick='showNTProphecy(\"" . $newTestProO . "\")'>" . $newTestProO . "</span>" . "<span id='newTextProP' onclick='showNTProphecy(\"" . $newTestProP . "\")'>" . $newTestProP . "</span>" . "<span id='newTextProQ' onclick='showNTProphecy(\"" . $newTestProQ . "\")'>" . $newTestProQ . "</span>" . "<span id='newTextProR' onclick='showNTProphecy(\"" . $newTestProR . "\")'>" . $newTestProR . "</span>" . "<span id='newTextProS' onclick='showNTProphecy(\"" . $newTestProS . "\")'>" . $newTestProS . "</span>" . "<span id='newTextProT' onclick='showNTProphecy(\"" . $newTestProT . "\")'>" . $newTestProT . "</span>" . "<span id='newTextProU' onclick='showNTProphecy(\"" . $newTestProU . "\")'>" . $newTestProU . "</span>" . "<span id='newTextProV' onclick='showNTProphecy(\"" . $newTestProV . "\")'>" . $newTestProV . "</span>" . "<span id='newTextProW' onclick='showNTProphecy(\"" . $newTestProW . "\")'>" . $newTestProW . "</span>" . "<span id='newTextProX' onclick='showNTProphecy(\"" . $newTestProX . "\")'>" . $newTestProX . "</span>" . "<span id='newTextProY' onclick='showNTProphecy(\"" . $newTestProY . "\")'>" . $newTestProY . "</span>" . "<span id='newTextProZ' onclick='showNTProphecy(\"" . $newTestProZ . "\")'>" . $newTestProZ . "</span>" . "<span id='newTextProAA' onclick='showNTProphecy(\"" . $newTestProAA . "\")'>" . $newTestProAA . "</span>" . "<span id='newTextProAB' onclick='showNTProphecy(\"" . $newTestProAB . "\")'>" . $newTestProAB . "</span>" . "<span id='newTextProAC' onclick='showNTProphecy(\"" . $newTestProAC . "\")'>" . $newTestProAC . "</span>" . "<span id='newTextProAD' onclick='showNTProphecy(\"" . $newTestProAD . "\")'>" . $newTestProAD . "</span>" . "<span id='newTextProAE' onclick='showNTProphecy(\"" . $newTestProAE . "\")'>" . $newTestProAE . "</span>" . "<span id='newTextProAF' onclick='showNTProphecy(\"" . $newTestProAF . "\")'>" . $newTestProAF . "</span>" . "<span id='newTextProAG' onclick='showNTProphecy(\"" . $newTestProAG . "\")'>" . $newTestProAG . "</span>" . "<span id='newTextProAH' onclick='showNTProphecy(\"" . $newTestProAH . "\")'>" . $newTestProAH . "</span>" . "<span id='newTextProAI' onclick='showNTProphecy(\"" . $newTestProAI . "\")'>" . $newTestProAI . "</span>" . "<span id='newTextProAJ' onclick='showNTProphecy(\"" . $newTestProAJ . "\")'>" . $newTestProAJ . "</span>" . "<span id='newTextProAK' onclick='showNTProphecy(\"" . $newTestProAK . "\")'>" . $newTestProAK . "</span>" . "<span id='newTextProAL' onclick='showNTProphecy(\"" . $newTestProAL . "\")'>" . $newTestProAL . "</span>" . "<span id='newTextProAM' onclick='showNTProphecy(\"" . $newTestProAM . "\")'>" . $newTestProAM . "</span>" . "<span id='newTextProAN' onclick='showNTProphecy(\"" . $newTestProAN . "\")'>" . $newTestProAN . "</span>" . "<span id='newTextProAO' onclick='showNTProphecy(\"" . $newTestProAO . "\")'>" . $newTestProAO . "</span>" . "<span id='newTextProAP' onclick='showNTProphecy(\"" . $newTestProAP . "\")'>" . $newTestProAP . "</span>" . "<span id='newTextProAQ' onclick='showNTProphecy(\"" . $newTestProAQ . "\")'>" . $newTestProAQ . "</span>" . "<span id='newTextProAR' onclick='showNTProphecy(\"" . $newTestProAR . "\")'>" . $newTestProAR . "</span>" . "<span id='newTextProAS' onclick='showNTProphecy(\"" . $newTestProAS . "\")'>" . $newTestProAS . "</span>" . "<span id='newTextProAT' onclick='showNTProphecy(\"" . $newTestProAT . "\")'>" . $newTestProAT . "</span>" . "<span id='newTextProAU' onclick='showNTProphecy(\"" . $newTestProAU . "\")'>" . $newTestProAU . "</span>" . "<span id='newTextProAV' onclick='showNTProphecy(\"" . $newTestProAV . "\")'>" . $newTestProAV . "</span>" . "<span id='newTextProAW' onclick='showNTProphecy(\"" . $newTestProAW . "\")'>" . $newTestProAW . "</span>" . "<span id='newTextProAX' onclick='showNTProphecy(\"" . $newTestProAX . "\")'>" . $newTestProAX . "</span>" . "<span id='newTextProAY' onclick='showNTProphecy(\"" . $newTestProAY . "\")'>" . $newTestProAY . "</span>" . "<span id='newTextProAZ' onclick='showNTProphecy(\"" . $newTestProAZ . "\")'>" . $newTestProAZ . "</span>" . "<span id='newTextProBA' onclick='showNTProphecy(\"" . $newTestProBA . "\")'>" . $newTestProBA . "</span>" . "<span id='newTextProBB' onclick='showNTProphecy(\"" . $newTestProBB . "\")'>" . $newTestProBB . "</span>" . "<span id='newTextProBC' onclick='showNTProphecy(\"" . $newTestProBC . "\")'>" . $newTestProBC . "</span>" . "<span id='newTextProBD' onclick='showNTProphecy(\"" . $newTestProBD . "\")'>" . $newTestProBD . "</span>" . "<span id='newTextProBE' onclick='showNTProphecy(\"" . $newTestProBE . "\")'>" . $newTestProBE . "</span>" . "<span id='newTextProBF' onclick='showNTProphecy(\"" . $newTestProBF . "\")'>" . $newTestProBF . "</span>" . "<span id='newTextProBG' onclick='showNTProphecy(\"" . $newTestProBG . "\")'>" . $newTestProBG . "</span>" . "<span id='newTextProBH' onclick='showNTProphecy(\"" . $newTestProBH . "\")'>" . $newTestProBH . "</span></p>";
        }
    } else {

        echo "There is no data available.";
    }
}

/* * *************************************************************************** */
/* prophecyText() function end */

/* displayVerse() Start
  This function sends verse information to the Ajax caller to be display on the DOM element. */

function displayVerse() {

    include_once 'login.php';

    $verName = $_REQUEST['verseName'];

    $sql = "SELECT * FROM Verses WHERE VerseName = '$verName'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        //output data for each row 
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<p>" . $verName . "</br>" . $row['VerseText'] . "</p>";
        }
    } else {
        echo "There is no data to display";
        echo $verName;
    }
}

/*********************************************************************************/
/*End*/
