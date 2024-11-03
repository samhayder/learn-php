<?php
include_once("../../../config/config.php");
include_once DIR_URL . ("config/functions.php");

$paramId = checkParam('id');

if (is_numeric( $paramId )) {
  $adminId = validate( $paramId );
  $adminData = getById('admins', $adminId );

  if ($adminData['status'] == 200) {
    $deleteRes = deleted('admins', $adminId );

    if ($deleteRes) {
      redirect('admin/links/admins/index.php', 'Admin Delete Successfully.');
    } else {
      redirect('admin/links/admins/index.php', 'No record found.');
    }

  } else{
    redirect('admin/links/admins/index.php', $adminData['message']);
  }

} else {
  redirect('admin/links/admins/index.php', 'Something went to wrong.');
}
