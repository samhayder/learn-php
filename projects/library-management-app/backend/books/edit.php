<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/book.php");

// categories from database
$categories = getCategories($conn);

// update book data
if (isset($_POST["updated"])) {
  // send form data to database
  $res = updateBook($conn, $_POST);

  if (isset($res['success'])) {
    $_SESSION['success'] = "Book has been updated successfully";
    header("LOCATION: " . BASE_URL . "books");
    exit;
  } else {
    $_SESSION['error'] = $res['error'];
    header("LOCATION: " . BASE_URL . "books/edit.php");
    exit;
  }
}

// Received Edit Book data
if (isset($_GET["id"]) && $_GET["id"] > 0) {
  $book = getShowEditData($conn, $_GET["id"]);

  if ($book->num_rows > 0) {
    $book = mysqli_fetch_assoc($book);
  }
} else {
  header("LOCATION:" . BASE_URL . "books/");
  exit;
}




?>

<title>Edit Book | Book Management</title>
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
            <h2 class="text-uppercase">Edit Book</h2>
            <a href="<?php echo BASE_URL ?>books/" class="me-3"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- end of title row-->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Edit the form</div>

            <form method="POST" action="<?php echo BASE_URL ?>books/edit.php">
              <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
              <div class="row p-3">
                <div class="col-md-6 mb-3">
                  <label for="book-name" class="form-label">Book Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="book-name"
                    name="title"
                    value="<?php echo $book['title'] ?>" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="isbn-number" class="form-label">ISBN Number</label>
                  <input
                    type="text"
                    class="form-control"
                    id="isbn-number"
                    name="isbn"
                    value="<?php echo $book['isbn'] ?>" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="author-name" class="form-label">Author Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="author-name"
                    name="author"
                    value="<?php echo $book['author'] ?>" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="publisher-name" class="form-label">Publisher Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="publisher-name"
                    name="publication_name"
                    value="<?php echo $book['publication_name'] ?>" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="publisher-year" class="form-label">Publisher Year</label>
                  <input
                    type="number"
                    class="form-control"
                    id="publisher-year"
                    name="publication_year"
                    value="<?php echo $book['publication_year'] ?>" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="category_id" class="form-label">Category</label>
                  <select name="category_id" class="form-control">
                    <option value="">Please select</option>
                    <?php
                    $selected = "";
                    while ($row = $categories->fetch_assoc()) {
                      if ($row['id'] === $book['category_id']) {
                        $selected = "selected";
                      } ?>
                      <option <?php echo $selected ?> value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-12 mb-3">
                  <button type="submit" class="btn btn-success" name="updated">Update</button>
                  <a href="<?php echo BASE_URL ?>/books/" class="btn btn-secondary">Back</a>
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
