<?php
include_once("../config/config.php");
?>

<title>Add Loan | Book Loan</title>
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
          <h2 class="text-uppercase">Add Loan</h2>
        </div>
      </div>
      <!-- end of title row-->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Fill the form</div>
            <form action="#">
              <div class="row p-3">
                <div class="col-md-6 mb-3">
                  <label for="select-book" class="form-label">Select Book</label>
                  <select class="form-control">
                    <option value="">Please select</option>
                    <option value="">UPSC</option>
                    <option value="">GATE</option>
                    <option value="">MCa Enterprise</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="select-student" class="form-label">Select Student</label>
                  <select class="form-control">
                    <option value="">Please select</option>
                    <option value="">UPSC</option>
                    <option value="">GATE</option>
                    <option value="">MCa Enterprise</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="loan-date" class="form-label">Loan Date</label>
                  <input
                    type="date"
                    class="form-control"
                    id="loan-date" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="loan-return-date" class="form-label">Return/ Due Date</label>
                  <input
                    type="date"
                    class="form-control"
                    id="loan-return-date" />
                </div>
                <div class="col-md-12 mb-3">
                  <button type="submit" class="btn btn-success">Add Loan</button>
                  <button type="submit" class="btn btn-secondary">Cancel</button>
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