<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/book.php");

// Get books
$books = getBooks($conn);

if (!isset($books->num_rows)) {
  $_SESSION["error"] = "Error" . $conn->error;
}

// Delete Book
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
  $delete = removeBook($conn, $_GET['id']);

  if ($delete) {
    $_SESSION['success'] = 'Book remove successfully.';
  } else {
    $_SESSION['error'] = "Something went to wrong.";
  }

  header("LOCATION:" . BASE_URL . "books/");
  exit;
}

// update status book
if (isset($_GET['action']) && $_GET['action'] == 'status') {
  $update = updateStatus($conn, $_GET['id'], $_GET['status']);

  header("LOCATION:" . BASE_URL . "books/");
  exit;
}
?>

<title>Mange Book | Book Management</title>
</head>

<body>
  <?php
  include_once(DIR_URL . "include/header.php");
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
            <h2 class="text-uppercase">Manage Books</h2>
            <a href="<?php echo BASE_URL ?>books/add-book.php" class="me-3"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- end of title row-->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">All Books</div>
            <table id="example" class="table table-striped" style="width:100%">
              <thead class="table-dark align-middle">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Book Name</th>
                  <th scope="col">Author Name</th>
                  <th scope="col">Publisher <br /> Year</th>
                  <th scope="col">ISBN <br /> Number</th>
                  <th scope="col">Created <br /> Date</th>
                  <th scope="col">Category</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($books->num_rows > 0) {
                  $num = 1;
                  while ($row = $books->fetch_assoc()) {
                ?>
                    <tr>
                      <th scope="row"><?php echo $num++ ?></th>
                      <td><?php echo $row['title'] ?></td>
                      <td><?php echo $row['author'] ?></td>
                      <td><?php echo $row['publication_year'] ?></td>
                      <td><?php echo $row['isbn'] ?></td>
                      <td><?php echo date("d-m-Y h-i A", strtotime($row['created_at'])) ?></td>
                      <td><?php echo $row['category_name'] ?></td>
                      <td>
                        <?php
                        if ($row['status'] == 1) {
                          echo '<span class="badge text-bg-success">Active</span>';
                        } else {
                          echo '<span class="badge text-bg-danger">Inactive</span>';
                        }
                        ?>
                      </td>
                      <td class="d-flex gap-1 p-3">
                        <a href="<?php echo BASE_URL ?>/books/edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a onclick="confirm('Are you sure?')" href="<?php echo BASE_URL ?>/books?action=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>

                        <?php
                        if ($row['status'] == 1) { ?>
                          <a href="<?php echo BASE_URL ?>/books?action=status&id=<?php echo $row['id'] ?>&status=0" class="btn btn-warning btn-sm">Inactive</a>
                        <?php } else { ?>
                          <a href="<?php echo BASE_URL ?>/books?action=status&id=<?php echo $row['id'] ?>&status=1" class="btn btn-success btn-sm">Active</a>
                        <?php }
                        ?>
                      </td>
                    </tr>
                <?php }
                } ?>
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