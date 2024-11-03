<?php
include_once("./config/config.php");
include_once("./config/functions.php");

if (isset($_SESSION['loggedIn'])) {
  logoutSession();

  redirect('login.php', "Logout successful.");
}
