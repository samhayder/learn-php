<?php
include_once DIR_URL . ("config/config.php");
include_once DIR_URL . ("config/functions.php");


if(isset($_SESSION['loggedIn'])) {

  $email = validate($_SESSION['loginUser']['email']);

  $sql = "SELECT * FROM admins WHERE email = '$email' LIMIT 1";
  $result = mysqli_query($conn,$sql);

  if (mysqli_num_rows( $result ) == 0) {
    logoutSession();
    redirect('login.php', "Access Denied.");
  } {
    $row = mysqli_fetch_assoc( $result );

    if ($row['is_ban'] == 1) {
      logoutSession();
      redirect('login.php', "Your account is banned.");
    }
  }

} else {
  redirect('login.php', "Please continue login process...");
}