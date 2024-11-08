<?php
include_once("../../../config/config.php");
include_once DIR_URL . ("config/functions.php");
include_once DIR_URL . ("admin/includes/header.php");

?>

<main>
  <div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h1 class="mt-4">Edit Category</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Manages Categories / Edit Category</li>
        </ol>
      </div>
      <div>
        <a href="<?php echo BASE_URL ?>admin/links/categories/index.php" class="btn btn-primary">View Categories</a>
      </div>
    </div>
    <!-- end of breadcrumb -->

    <div class="card my-4">
      <div class="card-header">
        <?php alertMessage(); ?>
        <p>* fill all the inputs</p>
      </div>
      <div class="card-body">
        <form action="<?php echo BASE_URL ?>admin/models/categories-code.php" method="POST">
          <?php
          $categoryId = checkParam('id');

          if (!is_numeric($categoryId)) {
            echo "<h4>Not a Number</h4>";
            return false;
          } 

          $categoryData = getById('categories', $categoryId);

          if ($categoryData['status'] == 200) : ?>
            <div class="row">
              <input type="hidden" name="id" value="<?php echo $categoryData['data']['id'] ?>">
              <div class="col-md-12 mb-3">
                <label for="name">Name *</label>
                <input type="text" name="name" class="form-control"
                  value="<?php echo $categoryData['data']['name'] ?>"
                  required>
              </div>
              <div class="col-md-12 mb-3">
                <label for="descriptions">Descriptions *</label>
                <textarea name="descriptions" class="form-control" row="5"><?php echo $categoryData['data']['descriptions'] ?></textarea>
              </div>
              <div class="col-md-6 mb-3">
                <label for="status">Status (UnChecked=visible, Check=hidden)</label>
                <input type="checkbox" name="status" class="input-group" style="width: 30px; height: 30px"
                  <?php echo $categoryData['data']['status'] == true ? "checked" : "" ?>>
              </div>
              <div class="col-md-12 mb-3 text-end">
                <button type="submit" name="updateCategory" class="btn btn-success">Update Category</button>
              </div>
            </div>
          <?php else :
            echo "<h4> " . $categoryData['message'] . "</h4>";
          endif;
          ?>

        </form>
      </div>
    </div>

  </div>
</main>


<?php include_once(DIR_URL . "admin/includes/footer.php") ?>