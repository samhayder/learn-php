<?php
// include_once("../../config/config.php");
// include_once(DIR_URL . "config/dbConnection.php");
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/dbConnection.php";

// Input Validation
function validate($inputData)
{
  global $conn;

  $validateData = mysqli_real_escape_string($conn, $inputData);
  return trim($validateData);
}

// Redirect from 1 page to another page with the message (status)
function redirect($url, $status)
{
  $_SESSION['status'] = $status;

  header('LOCATION:' . BASE_URL . $url);
  exit(0);
}

// Display Message status after any pages
function alertMessage()
{
  if (isset($_SESSION['status'])) {
    echo '<div class="alert alert-warning alert-dismissible fade show"    role="alert">
    ' . $_SESSION['status'] . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

    unset($_SESSION['status']);
  }
}

// Insert Record using the function
function insert($tableName, $data)
{
  global $conn;

  $table = validate($tableName);
  $columns = array_keys($data);
  $values = array_values($data);

  $finalColumns = implode(',', $columns);
  $finalValues = "'" . implode("', '", $values) . "'";

  $sql = "INSERT INTO $table ($finalColumns) VALUES ($finalValues)";
  $result = mysqli_query($conn, $sql);
  return $result;
}

// Update Data using this function
function update($tableName, $id, $data)
{
  global $conn;

  $table = validate($tableName);
  $id = validate($id);

  $updateDataString = "";

  foreach ($data as $column => $value) {
    $updateDataString .= $column . "=" . "'$value',";
  }

  $finalUpdateData = substr(trim($updateDataString), 0, -1);

  $sql = "UPDATE $table SET $finalUpdateData WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  return $result;
}

// Get all data using this function
function getAll($tableName, $status = NULL)
{
  global $conn;

  $table = validate($tableName);
  $status = validate($status);

  if ($status == 'status') {
    $sql = "SELECT * FROM $table WHERE status = '0'";
  } else {
    $sql = "SELECT * FROM $table";
  }

  return mysqli_query($conn, $sql);
}

// Fetch data by id using this function
function getById($tableName, $id)
{
  global $conn;

  $table = validate($tableName);
  $id = validate($id);

  $sql = "SELECT * FROM $table WHERE id = '$id' LIMIT 1";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $response = [
      'status' => 200,
      'data' => $row,
      'message' => 'Record Found'
    ];

    return $response;
  } else {
    $response = [
      'status' => 404,
      'message' => 'Record Not Found'
    ];

    return $response;
  }
}

// Delete Database data by using id
function deleted($tableName, $id)
{
  global $conn;

  $table = validate($tableName);
  $id = validate($id);

  $sql = "DELETE FROM $table WHERE id = '$id' LIMIT 1";

  return mysqli_query($conn, $sql);
}

// Check Params function
function checkParam($type) {
  if (isset($_GET[$type])) {
  if ($_GET[$type] != '') {
      return $_GET[$type];
    } else {
      return "<h4>No Id Found</h4>";
    }
  } else {
    return "<h4>No Id given in params</h4>";
  }
}

// Session Logout 
function logoutSession() {
  unset($_SESSION['loggedIn']);
  unset($_SESSION['loginUser']);
}
