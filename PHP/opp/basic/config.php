<?php
session_start();

if ($_SERVER['DOCUMENT_ROOT']) {
  define("BASE_URL", "http://localhost/learn-php/");
  define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "learn-php/");
} else {
  define("BASE_URL", "http://www.domain.com/");
  define("DIR_URL", $_SERVER['DOCUMENT_ROOT']);
}

class Database
{
  private const HOST = 'localhost';
  private const DB_USER_NAME = 'root';
  private const DB_PASSWORD = '';
  private const DB_NAME = 'pos_system_app';

  protected function connect()
  {
    $conn = new mysqli(self::HOST, self::DB_USER_NAME, self::DB_PASSWORD, self::DB_NAME);

    if ($conn->connect_error) {
      die("Database Connection Failed." . $conn->connect_error);
    }

    return $conn;
  }
}

class Query extends Database
{
  function validate($inputData)
  {
    $validateData = mysqli_real_escape_string($this->connect(), $inputData);

    return trim($validateData);
  }
  function getAllData($tableName, $condition = '', $limit = '', $field = '*',  $orderType = '')
  {
    $table = $this->validate($tableName);
    $condition = $this->validate($condition);

    $sql = "SELECT $field FROM $table WHERE $condition = '$$condition' ORDER BY $orderType LIMIT $limit";
    echo $sql;
    die();

    $result = $this->connect()->query($sql);

    if ($result->num_rows > 0) {
      $arr = array();
      while ($row = $result->fetch_assoc()) {
        $arr[] = $row;
      }
      return $arr;
    } else {
      return 0;
    }
  }
}
