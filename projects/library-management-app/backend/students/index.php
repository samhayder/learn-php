<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "models/student.php");

// show student data
$student = getStudents($conn);

if (!isset($student)) {
  $_SESSION['error'] = "Error" . $conn->error;
}

// update status
if (isset($_GET['action']) && $_GET['action'] == 'status') {
  $update = updateStatus($conn, $_GET['id'], $_GET['status']);

  header("LOCATION:" . BASE_URL . "students");
  exit;
}

// Delete Student
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
  $delete = deleteStudent($conn, $_GET['id']);

  if ($delete) {
    $_SESSION['success'] = 'Delete Student data.';
  } else {
    $_SESSION['error'] = 'Something wrong.';
  }

  header("LOCATION:" . BASE_URL . "students");
  exit;
}
?>

<title>Manage Students | Student</title>
</head>

<body>
  <?php
  include_once(DIR_URL . "/include/header.php");
  include_once(DIR_URL . "include/navbar.php");
  include_once(DIR_URL . "include/sideBar.php");
  ?>

  <!-- Start Main -->
  <main class="mt-1 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <!-- <?php include_once(DIR_URL . "include/alerts.php"); ?> -->
          <div class="d-flex justify-content-between align-content-center py-3">
            <h2 class="text-uppercase">Manage Students</h2>
            <a href="<?php echo BASE_URL ?>students/add-student.php" class="me-3"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- end of title row-->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">All Student</div>
            <table id="example" class="table table-striped" style="width:100%">
              <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Full Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Address</th>
                  <th scope="col">Create Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($student->num_rows > 0) {
                  $num = 1;
                  while ($row = $student->fetch_assoc()) { ?>
                    <tr>
                      <th scope="row"><?php echo $num++ ?></th>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['phone_number'] ?></td>
                      <td><?php echo $row['address'] ?></td>
                      <td><?php echo date("d-m-Y h-i A", strtotime($row['created_at']))  ?></td>
                      <td>
                        <?php
                        if ($row['status'] == 1) {
                          echo "<span class='badge text-bg-success'>Active</span>";
                        } else {
                          echo "<span class='badge text-bg-danger'>Inactive</span>";
                        }
                        ?>
                      </td>
                      <td>
                        <a href="<?php echo BASE_URL ?>students/edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a onclick="confirm('Are you sure?')" href="<?php echo BASE_URL ?>students?action=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>

                        <?php
                        if ($row['status'] == 1) { ?>
                          <a href="<?php echo BASE_URL ?>students?action=status&id=<?php echo $row['id'] ?>&status=0" class="btn btn-warning btn-sm">Inactive</a>
                        <?php } else { ?>
                          <a href="<?php echo BASE_URL ?>students?action=status&id=<?php echo $row['id'] ?>&status=1" class="btn btn-success btn-sm">Active</a>
                        <?php }
                        ?>
                      </td>
                    </tr>
                <?php }
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- end of book list row -->
    </div>
  </main>
  <!-- End Main -->

  <?php
  include_once(DIR_URL . "include/footer.php");
  ?>