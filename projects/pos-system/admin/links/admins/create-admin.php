<?php
include_once ("../../../config/config.php");
include_once DIR_URL . ("config/functions.php");
include_once DIR_URL . ("admin/includes/header.php");
?>

<main>
  <div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h1 class="mt-4">Create Admin</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Manages Users / Create Admin</li>
        </ol>
      </div>
      <div>
        <a href="<?php echo BASE_URL ?>admin/links/admins/index.php" class="btn btn-primary">View Admins</a>
      </div>
    </div>
    <!-- end of breadcrumb -->

    <div class="card my-4">
      <div class="card-header">
        <?php alertMessage(); ?>
        <p>* fill all the inputs</p>
      </div>
      <div class="card-body">
        <form action="<?php echo BASE_URL ?>admin/models/code.php" method="POST">
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="name">Name *</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email">Email *</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="password">Password *</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="phone">Phone Number *</label>
              <input type="tel" name="phone" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="is_ban">Is Ban</label>
              <input type="checkbox" name="is_ban" class="input-group" style="width: 30px; height: 30px">
            </div>
            <div class="col-md-12 mb-3 text-end">
              <button type="submit" name="saveAdmin" class="btn btn-success">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</main>


<?php include_once(DIR_URL . "admin/includes/footer.php") ?>