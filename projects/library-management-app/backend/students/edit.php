<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/student.php");
// include_once(DIR_URL . "/models/student.php");

// update Student
if (isset($_POST["updated"])) {
  $res = update($conn, $_POST);



  if (isset($res['success'])) {
    $_SESSION['success'] = "Student Update successfully.";
    header("LOCATION:" . BASE_URL . "students");
    exit;
  } else {
    $_SESSION["error"] = $res['error'];
    header("LOCATION:" . BASE_URL . "students/edit.php");
    exit;
  }
}

// show student data for edit
if (isset($_GET["id"]) && $_GET["id"] > 0) {
  $student = showStudent($conn, $_GET['id']);

  if ($student->num_rows > 0) {
    $student = mysqli_fetch_assoc($student);
  } else {
    header("LOCATION:" . BASE_URL . "students");
    exit;
  }
}
?>

<title>Add Student | Student</title>
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
          <?php include_once(DIR_URL . "include/alerts.php"); ?>
          <div class="d-flex justify-content-between align-content-center py-3">
            <h2 class="text-uppercase">Edit Students</h2>
            <a href="<?php echo BASE_URL ?>students" class="me-3"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- end of title row-->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Fill the form</div>
            <form method="POST" action="<?php echo BASE_URL ?>students/edit.php">
              <input type="hidden" name="id" value="<?php echo $student['id'] ?>">
              <div class="row p-3">
                <div class="col-md-6 mb-3">
                  <label for="full-name" class="form-label">Full Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="full-name"
                    name="name"
                    value="<?php echo $student['name'] ?>" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    value="<?php echo $student['email'] ?>" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="phone-number" class="form-label">Phone Number</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="phone-number"
                    name="phone_number"
                    value="<?php echo $student['phone_number'] ?>" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="address" class="form-label">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    name="address"
                    value="<?php echo $student['address'] ?>" />
                </div>
                <div class="col-md-12 mb-3">
                  <button type="submit" name="updated" class="btn btn-success">Update</button>
                  <a href="<?php echo BASE_URL ?>students" class="btn btn-secondary">Back</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- end of card row -->
    </div>
  </main>
  <!-- End Main -->

  <?php
  include_once(DIR_URL . "include/footer.php");
  ?>