<?php
// include_once("../config/config.php");
require_once __DIR__ . "/config.php";



$conn = mysqli_connect(SERVER_NAME, DB_USERNAME, DB_PASSWORD, DATABASE_NAME);

if (!$conn) {
  die("Database Connection Failed." . mysqli_connect_error());
}
