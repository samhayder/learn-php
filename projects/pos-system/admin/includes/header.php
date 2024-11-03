<?php
include_once DIR_URL.("config/config.php");
include_once DIR_URL.("config/functions.php");
include_once DIR_URL.("admin/models/authentication.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - SB Admin</title>

  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/bootstrap.min.css">

  <!-- Data Table CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/datatables-7.1.2.min.css">

  <!-- Font Awesome Kit js -->
  <script src="<?php echo BASE_URL ?>assets/js/fontawesome-kit.js"></script>

  <!-- Main Style CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL ?>admin/assets/css/styles.css">
</head>

<body class="sb-nav-fixed">

  <?php include_once(DIR_URL . "admin/includes/navbar.php") ?>
  <div id="layoutSidenav">
    <?php include_once(DIR_URL . "admin/includes/sidebar.php") ?>

    <div id="layoutSidenav_content">