<?php
include_once("../../config/config.php");
include_once DIR_URL . ("config/functions.php");


if (isset($_POST['addCategories'])) {

  // Validate input
  $name = validate($_POST['name']);
  $descriptions = validate($_POST['descriptions']);
  $status = isset($_POST['status']) == true ? 1 : 0;

  if ($name != '' && $descriptions != '') {
    $formData = [
      'name' => $name,
      'descriptions' => $descriptions,
      'status' => $status
    ];

    $result = insert('categories', $formData);

    if ($result) {
      redirect('admin/links/categories/index.php', "Successfully added category");
    } else {
      redirect('admin/links/categories/add.php', "Database not found");
    }
  } else {
    redirect('admin/links/categories/add.php', "Please fill all fields");
  }
} 

// Updated category
if (isset($_POST['updateCategory'])) {

  // Validate input
  $categoryId = validate($_POST['id']);
  $name = validate($_POST['name']);
  $descriptions = validate($_POST['descriptions']);
  $status = isset($_POST['status']) == true ? 1 : 0;

  $formData = [
    'name' => $name,
    'descriptions' => $descriptions,
    'status' => $status
  ];

  $result = update('categories', $categoryId, $formData);

  if ($result) {
    redirect('admin/links/categories/index.php', "Successfully Edit category");
  } else {
    redirect('admin/links/categories/edit.php?id=' . $categoryId, "Database not found");
  }
} 
