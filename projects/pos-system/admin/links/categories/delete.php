<?php
include_once("../../../config/config.php");
include_once DIR_URL . ("config/functions.php");

$checkId = checkParam("id");

if (is_numeric($checkId)) {
  $categoryId = validate($checkId);
  $categoryData = getById('categories', $categoryId);

  if ($categoryData['status'] == 200) {
    $response = deleted('categories', $categoryId);

    if ($response) {
      redirect('admin/links/categories/index.php', "Successfully Delete category.");
    } else {
      redirect('admin/links/categories/index.php', "NO Record Found.");
    }
  } else {
    redirect('admin/links/categories/index.php', $categoryData['message']);
  }
}
