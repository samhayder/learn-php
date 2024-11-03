<?php
$hostName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "store_management_app";

$conn = new mysqli($hostName, $dbUserName, $dbPassword, $dbName);

if ($conn->connect_error) {
  die("Connection failed" . $conn->connect_error);
}
