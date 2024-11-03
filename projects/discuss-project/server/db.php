<?php

$host = 'localhost';
$dbUserName = 'root';
$password = '';
$database = 'discuss';

$conn = new mysqli($host, $dbUserName, $password, $database);

if ($conn->connect_error) {
    die('`' . $conn->connect_error);
}
