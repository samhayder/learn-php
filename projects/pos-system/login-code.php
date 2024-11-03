<?php
include_once("./config/config.php");
include_once("./config/functions.php");

if (isset($_POST["loginForm"])) {
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);

  if ($email != '' && $password != '') {
    $sql = "SELECT * FROM admins WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);
        $hashPassword = $row["password"];

        if (!password_verify($password, $hashPassword)) {
          redirect('login.php', 'Invalid Password.');
        }

        if ($row['is_ban'] == 1) {
          redirect('login.php', 'Your Account has been banned. Please contact Admin.');
        }

        $_SESSION['loggedIn'] = true;
        $_SESSION['loginUser'] = [
          'user_id' => $row['id'],
          'name' => $row['name'],
          'email' => $row['email'],
          'phone' => $row['phone'],
          'is_ban' => $row['is_ban'],
        ];

        redirect('admin/index.php', 'Successfully Logged In.');
      } else {
        redirect('login.php', 'Invalid Email Address.');
      }
    } else {
      redirect('login.php', 'Not found');
    }
  } else {
    redirect('login.php', 'Please fill all fields.');
  }
} else {
  redirect('login.php', 'Something went ot wrong.');
}
