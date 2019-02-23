<?php
/**
 * Created by PhpStorm.
 * User: papi
 * Date: 8/7/18
 * Time: 12:32 PM
 */

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
