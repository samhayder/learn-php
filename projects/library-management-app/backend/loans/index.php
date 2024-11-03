<?php
include_once("../config/config.php");
?>

<title>Manage Loan | Book Loan</title>
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
            <h2 class="text-uppercase">Manage Loans</h2>
            <a href="<?php echo BASE_URL ?>/books/add-book.php" class="me-3"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- end of title row-->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">All Loans</div>
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Book Name</th>
                  <th scope="col">Student Name</th>
                  <th scope="col">Loan Date</th>
                  <th scope="col">Return Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Hajar Bochor Dore</td>
                  <td>Samsuddin Hayder</td>
                  <td>12-10-2024</td>
                  <td>17-10-2024</td>
                  <td>
                    <a href="#" class="btn btn-success btn-sm">Active</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
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