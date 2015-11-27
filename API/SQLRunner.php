<?php
function getQueryData($sql) {
  $servername = "188.166.236.0";
  $username = 'dba';
  $password = 'paboy';
  $dbname = 'park_ko';

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $result = $conn->query($sql);
  $return_data = [];
  if ($result->num_rows == 1) {
    $return_data = $result->fetch_assoc();
  } else if ($result->num_rows > 1) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $return_data[] = $row;
    }
  }

  $conn->close();
  return $return_data;
}