<?php
include_once("../../../config/config.php");
include_once DIR_URL . ("config/functions.php");
include_once DIR_URL . ("admin/includes/header.php");
?>

<main>
  <div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h1 class="mt-4">Create Product</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Manages Product / Create Product</li>
        </ol>
      </div>
      <div>
        <a href="<?php echo BASE_URL ?>admin/links/products/index.php" class="btn btn-primary">View Product</a>
      </div>
    </div>
    <!-- end of breadcrumb -->

    <div class="card my-4">
      <div class="card-header">
        <?php alertMessage(); ?>
        <p>* fill all the inputs</p>
      </div>
      <div class="card-body">
        <form action="<?php echo BASE_URL ?>admin/models/product-code.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="name">Select category</label>
              <select name="category_id" class="form-select">
                <option value="">Select category</option>
                <?php
                $categories = getAll('categories');

                if (mysqli_num_rows($categories) > 0) {
                  while ($row = mysqli_fetch_assoc($categories)) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                  }
                } else {
                  echo '<option value="">No category found</option>';
                }
                ?>
              </select>
            </div>
            <div class="col-md-12 mb-3">
              <label for="name">Product Name *</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-12 mb-3">
              <label for="description">Description *</label>
              <textarea name="description" class="form-control" row="5"></textarea>
            </div>
            <div class="col-md-4 mb-3">
              <label for="price">Price *</label>
              <input type="number" name="price" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="quantity">Quantity *</label>
              <input type="number" name="quantity" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="image">Image *</label>
              <input type="file" name="image" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="status">Status (UnChecked=visible, Check=hidden)</label>
              <input type="checkbox" name="status" class="input-group" style="width: 30px; height: 30px">
            </div>
            <div class="col-md-12 mb-3 text-end">
              <button type="submit" name="addProduct" class="btn btn-success">Add Product</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</main>


<?php include_once(DIR_URL . "admin/includes/footer.php") ?>