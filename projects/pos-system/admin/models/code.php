<?php
include_once("../../config/config.php");
include_once DIR_URL . ("config/functions.php");

/* Create admin page functionality */

if (isset($_POST["saveAdmin"])) {

  $name = validate($_POST['name']);
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);
  $phone = validate($_POST['phone']);
  $is_ban = isset($_POST['is_ban']) == true ? 1 : 0;

  if ($name != "" && $email != "" && $phone != "") {
    // Email Check
    $emailCheck = mysqli_query($conn, "SELECT * FROM admins WHERE email = '$email'");
    if (mysqli_num_rows($emailCheck) > 0) {
      redirect("admin/links/admins/create-admin.php", "Email already use another user. Please try different email");
    }

    // Password bcrypt
    $bcryptPassword = password_hash($password, PASSWORD_BCRYPT);

    // Phone Number Check
    $phoneCheck = mysqli_query($conn, "SELECT * FROM admins WHERE phone = '$phone'");
    if (mysqli_num_rows($phoneCheck) > 0) {
      redirect("admin/links/admins/create-admin.php", "Phone number already use another user. Please try different phone number");
    } else if (strlen($phone) < 11 || strlen($phone) > 12) {
      redirect("admin/links/admins/create-admin.php", "Phone must be 11 digit.");
    }

    // Form Data 
    $formData = [
      "name" => $name,
      "email" => $email,
      "phone" => $phone,
      "password" => $bcryptPassword,
      "is_ban" => $is_ban
    ];

    $result = insert("admins", $formData);

    if ($result) {
      redirect("admin/links/admins", "Create admin successfully.");
    } else {
      redirect("admin/links/admins/create-admin.php", "Something wrong.");
    }
  } else {
    redirect("admin/links/admins/create-admin.php", "Please fill required field.");
  }
}

// Update create admin functionality
if (isset($_POST['updateAdmin'])) {

  $adminId = validate($_POST['id']);
  $name = validate($_POST['name']);
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);
  $phone = validate($_POST['phone']);
  $is_ban = isset($_POST['is_ban']) == true ? 1 : 0;

  $adminData = getById('admins', $adminId);

  if ($password != '') {
    $hashPassword = password_hash($password, PASSWORD_BCRYPT);
  } else {
    $hashPassword = $adminData['data']['password'];
  }

  if ($name != '' && $email != '') {

    //check Email address 
    $checkEmail = mysqli_query($conn, "SELECT id FROM admins WHERE email = '$email' and id != '$adminId'");

    if (mysqli_num_rows($checkEmail) > 0) {
      redirect('admin/links/admins/edit.php?id=' . $adminId, "Email already use another user. Please try different email");
    }

    // Form Data 
    $formData = [
      "name" => $name,
      "email" => $email,
      "phone" => $phone,
      "password" => $hashPassword,
      "is_ban" => $is_ban
    ];

    $result = update('admins', $adminId, $formData);

    if ($result) {
      redirect("admin/links/admins", "Update admin successfully.");
    } else {
      redirect("admin/links/admins/edit.php?id=" . $adminId, "Something wrong.");
    }
  } else {
    redirect('admin/links/admins/edit.php?id=' . $adminId, "Fill all input fields");
  }
}

