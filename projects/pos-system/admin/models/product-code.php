<?php
include_once("../../config/config.php");
include_once DIR_URL . ("config/functions.php");


if (isset($_POST['addProduct'])) {

  // Validate input
  $categoryId = validate($_POST['category_id']);
  $name = validate($_POST['name']);
  $description = validate($_POST['description']);
  $price = validate($_POST['price']);
  $quantity = validate($_POST['quantity']);
  $status = isset($_POST['status']) == true ? 1 : 0;

  if ($_FILES["image"]["size"] > 0) {
    // $path = "../assets/img/uploads/products";
    // $image_ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    // $fileName = $_FILES["image"]["name"] . '.' . $image_ext;
    // move_uploaded_file($_FILES["image"]["tmp_name"], $path . "/" . $fileName);
    // $finalImage =
    //   DIR_URL . "assets/img/uploads/products/" . $fileName;

    $fileName = $_FILES["image"]["name"];
    $tmpName = $_FILES["image"]["tmp_name"];
    $imagePath = "../assets/img/uploads/products/" . $fileName;

    move_uploaded_file($tmpName, $imagePath);
  } else {
    $imagePath = '';
  }

  $formData = [
    'category_id' => $categoryId,
    'name' => $name,
    'description' => $description,
    'price' => $price,
    'quantity' => $quantity,
    'image' => $imagePath,
    'status' => $status
  ];

  $result = insert('products', $formData);

  if ($result) {
    redirect('admin/links/products/index.php', "Successfully added product");
  } else {
    redirect('admin/links/products/add.php', "Database not found");
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

  $result = update('products', $categoryId, $formData);

  if ($result) {
    redirect('admin/links/products/index.php', "Successfully Edit category");
  } else {
    redirect('admin/links/products/edit.php?id=' . $categoryId, "Database not found");
  }
}
