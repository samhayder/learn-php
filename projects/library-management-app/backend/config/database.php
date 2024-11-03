<?php
include_once("../config/config.php");

$conn = @new mysqli(SERVER_NAME, DB_USERNAME, DB_PASSWORD, DATABASE_NAME);

if ($conn->connect_error) {
  die("Database not connect" . $conn->connect_error);
}
