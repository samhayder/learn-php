<?php
include "./client/common-file.php";
// include database connect
include "./client/db.php";

if (isset($_GET['category_submit'])) {
  $categoryName = $_GET["category_name"];
  $categoryEntryDate = $_GET["category_entry_date"];

  if (empty($categoryName)) {
    echo "hello";
    return;
  } else {
    echo $categoryName . "<br/>";

    echo $categoryEntryDate . "<br/>";
  }

}


?>
<title>Add Category</title>
</head>

<body>
  <div class="container py-5">
    <div class="row">
      <div class="col-sm-6 mx-auto">
        <h2 class="text-center">Add Category</h2>
      </div>
    </div>

    <div class="row pt-5">
      <div class="col-md-6 mx-auto">
        <form action="add-category.php" method="GET">
          <div class="mb-3">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name">
          </div>
          <div class="mb-3">
            <label for="category_entry_date" class="form-label">Category Date</label>
            <input type="date" class="form-control" id="category_entry_date" name="category_entry_date">
          </div>
          <button type="submit" class="btn btn-primary" name="category_submit">Category Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>