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
          <h2 class="text-uppercase">Subscription Plane</h2>
        </div>
      </div>
      <!-- end of title row-->

      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">All Plane</div>
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Basic</td>
                  <td><i class="fa fa-dollar" aria-hidden="true"></i>300</td>
                  <td>1 month</td>
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
        <!-- end of all plane -->

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Add New Plane</div>
            <form action="#">
              <div class="row p-3">
                <div class="col-md-12 mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input
                    type="text"
                    class="form-control"
                    id="title" />
                </div>
                <div class="col-md-12 mb-3">
                  <label for="amount" class="form-label">Amount</label>
                  <input
                    type="text"
                    class="form-control"
                    id="amount" />
                </div>
                <div class="col-md-12 mb-3">
                  <label for="address" class="form-label">Durations</label>
                  <select class="form-control">
                    <option value="">Please select</option>
                    <option value="">1 month</option>
                    <option value="">3 month</option>
                    <option value="">6 month</option>
                    <option value="">12 month</option>
                  </select>
                </div>
                <div class="col-md-12 mb-3">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="submit" class="btn btn-secondary">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- end of add plane -->
      </div>
      <!-- end of book list row -->
    </div>
  </main>
  <!-- End Main -->

  <?php
  include_once(DIR_URL . "include/footer.php");
  ?>