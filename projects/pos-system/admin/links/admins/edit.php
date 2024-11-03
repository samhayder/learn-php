<?php
include_once("../../../config/config.php");
include_once DIR_URL . ("config/functions.php");
include_once DIR_URL . ("admin/includes/header.php");


?>

<main>
  <div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h1 class="mt-4">Edit Admin</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Manages User / Edit Admin</li>
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
          <?php
          if (isset($_GET['id'])) {
            if ($_GET['id'] != '') {
              $adminId = $_GET['id'];
            } else {
              echo "<h4>No record found.</h4>";
              return false;
            }
          } else {
            echo "<h4>Invalid id url.</h4>";
            return false;
          }

          $adminData = getById('admins', $adminId);

          if ($adminData) {
            if ($adminData['status'] == 200) { ?>
              <div class="row">
                <input type="hidden" name="id" value="<?php echo $adminData['data']['id'] ?>">
                <div class="col-md-12 mb-3">
                  <label for="name">Name *</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $adminData['data']['name'] ?>" required>
                </div>
                <req class="col-md-6 mb-3">
                  <label for="email">Email *</label>
                  <input type="email" name="email" class="form-control"
                    value="<?php echo $adminData['data']['email'] ?>" required>
                </req>
                <div class="col-md-6 mb-3">
                  <label for="password">Password *</label>
                  <input type="password" name="password" class="form-control" value="<?php echo $adminData['data']['password'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="phone">Phone Number *</label>
                  <input type="tel" name="phone" class="form-control" value="<?php echo $adminData['data']['phone'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="is_ban">Is Ban</label>
                  <input type="checkbox" name="is_ban" class="input-group" style="width: 30px; height: 30px"
                    <?php echo $adminData['data']['is_ban'] == true ? "checked" : "" ?>>
                </div>
                <div class="col-md-12 mb-3 text-end">
                  <button type="submit" name="updateAdmin" class="btn btn-success">Update</button>
                </div>
              </div>

          <?php
            } else {
              echo "<h4>" . $adminData['message'] . "</h4>";
            }
          } else {
            echo "<h4>Something went wrong.</h4>";
            return false;
          }
          ?>

        </form>
      </div>
    </div>

  </div>
</main>


<?php include_once(DIR_URL . "admin/includes/footer.php") ?>