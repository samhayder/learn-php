<?php
include_once("../config/config.php");
?>

<title>Purchase History | Subscription</title>
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
            <h2 class="text-uppercase">Purchase History</h2>
            <a href="<?php echo BASE_URL ?>/books/add-book.php" class="me-3"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- end of title row-->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Subscription Purchase History</div>
            <h2 class="ps-3">Search</h2>
            <form action="#">
              <div class="row p-3 d-flex align-items-center h-auto">
                <div class="col-md-3">
                  <label for="keyword" class="form-label">Keyword</label>
                  <input
                    type="text"
                    class="form-control"
                    id="keyword"
                    placeholder="Student Name/ Plane Name" />
                </div>
                <div class="col-md-3">
                  <label for="from-date" class="form-label">From</label>
                  <input type="date" class="form-control" id="from-date" />
                </div>
                <div class="col-md-3">
                  <label for="to-date" class="form-label">To</label>
                  <input type="date" class="form-control" id="to-date" />
                </div>
                <div class="col-md-3 btn-alienment">
                  <button type="submit" class="btn btn-success">
                    Search
                  </button>
                </div>
              </div>
            </form>

            <table class="table mt-5">
              <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Student Name</th>
                  <th scope="col">Plane</th>
                  <th scope="col">Loan Date</th>
                  <th scope="col">Return Date</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Samsuddin Hayder</td>
                  <td>
                    <a href="#" class="btn btn-info btn-sm me-1">Basic</a>
                    <i class="fa fa-dollar" aria-hidden="true"></i>300
                  </td>
                  <td>12-10-2024</td>
                  <td>17-10-2024</td>
                  <td>
                    <a href="#" class="btn btn-success btn-sm">Active</a>
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