<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "models/student.php");

// Store Student
if (isset($_POST["submit"])) {
  $res = storeStudent($conn, $_POST);

  if (isset($res['success'])) {
    $_SESSION['success'] = "Student added successfully.";
    header("LOCATION:" . BASE_URL . "students");
    exit;
  } else {
    $_SESSION["error"] = $res['error'];
    header("LOCATION:" . BASE_URL . "students/add-student.php");
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
            <h2 class="text-uppercase">Add Students</h2>
            <a href="<?php echo BASE_URL ?>students/" class="me-3"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- end of title row-->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Fill the form</div>
            <form method="POST" action="<?php echo BASE_URL ?>students/add-student.php">
              <div class="row p-3">
                <div class="col-md-6 mb-3">
                  <label for="full-name" class="form-label">Full Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="full-name"
                    name="name" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="phone-number" class="form-label">Phone Number</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="phone-number"
                    name="phone_number" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="address" class="form-label">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    name="address" />
                </div>
                <div class="col-md-12 mb-3">
                  <button type="submit" name="submit" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-secondary">Cancel</button>
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