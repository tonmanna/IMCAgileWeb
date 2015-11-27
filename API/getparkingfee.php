<?php
$servername = "188.166.236.0";
$username = "dba";
$password = "paboy";
$dbname =  "park_ko";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo 'wwww';

$sql = "select * from 'tbl_transaction' where 'id_car' = 'ณข 1597'"

?>