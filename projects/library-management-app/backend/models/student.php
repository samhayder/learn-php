<?php

// store student data from database
function storeStudent($conn, $formData)
{
  extract($formData);
  $dateTime = date("Y-m-d H:i:s A");

  ## form data validation start
  if (empty($name)) {
    $result = ['error' => 'Name is required'];
    return $result;
  } else if (empty($email)) {
    $result = ['error' => 'Email is required'];
    return $result;
  } else if (isEmailUnique($conn, $email)) {
    $result = ["error" => "This Email id is already register."];
    return $result;
  } else if (empty($phone_number)) {
    $result = ['error' => 'Phone number is required'];
    return $result;
  } else if (isPhoneUnique($conn, $phone_number)) {
    $result = ["error" => "This Phone Number is already register."];
    return $result;
  } else if (empty($address)) {
    $result = ['error' => 'Address is required'];
    return $result;
  }
  ## form data validation end

  $sql = "INSERT INTO `students` (`name`,`email`,`phone_number`,`address`, `created_at`) VALUES ('$name', '$email', '$phone_number', '$address', '$dateTime')";

  $result['success'] =  $conn->query($sql);
  return $result;
}

// Update Student
function update($conn, $formData)
{
  extract($formData);
  $dateTime = date("Y-m-d H:i:s A");

  ## form data validation start
  if (empty($name)) {
    $result = ['error' => 'Name is required'];
    return $result;
  } else if (empty($email)) {
    $result = ['error' => 'Email is required'];
    return $result;
  } else if (isEmailUnique($conn, $email, $id)) {
    $result = ["error" => "This Email id is already register."];
    return $result;
  } else if (empty($phone_number)) {
    $result = ['error' => 'Phone number is required'];
    return $result;
  } else if (isPhoneUnique($conn, $phone_number, $id)) {
    $result = ["error" => "This Phone Number is already register."];
    return $result;
  } else if (empty($address)) {
    $result = ['error' => 'Address is required'];
    return $result;
  }
  ## form data validation end

  $sql = "UPDATE students SET 
          name = '$name',
          email = '$email',
          phone_number = '$phone_number',
          address = '$address',
          updated_at = '$dateTime'
          WHERE id = '$id'";

  $result['success'] = $conn->query($sql);

  return $result;
}

// get student data from database
function getStudents($conn)
{
  $sql = "SELECT * FROM students ORDER BY id DESC";

  return $conn->query($sql);
}
// show student data from edit
function showStudent($conn, $id)
{
  $sql = "SELECT * FROM students WHERE id = '$id'";

  return $conn->query($sql);
}

// Update Status
function updateStatus($conn, $id, $status)
{
  $sql = "UPDATE students SET status = '$status' WHERE id = '$id'";

  return $conn->query($sql);
}

// Delete student
function deleteStudent($conn, $id)
{
  $sql = "DELETE FROM students WHERE id = '$id'";

  return $conn->query($sql);
}

// Email address is unique
function isEmailUnique($conn, $email, $id = NULL)
{
  $sql = "SELECT id FROM students WHERE email = '$email'";

  if ($id) {
    $sql .= " AND id != '$id'";
  }

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    return true;
  } else {
    return false;
  }
}
// Phone number is unique
function isPhoneUnique($conn, $phone_number, $id = NULL)
{
  $sql = "SELECT id FROM students WHERE phone_number = '$phone_number'";

  if ($id) {
    $sql .= " AND id != '$id'";
  }

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    return true;
  } else {
    return false;
  }
}
