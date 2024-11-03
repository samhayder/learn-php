<?php
include_once("../../../config/config.php");
include_once DIR_URL . ("config/functions.php");
include_once DIR_URL . ("admin/includes/header.php");

?>

<main>
  <div class="container-fluid px-4">
    <div class="title d-flex justify-content-between align-items-center">
      <div class="title_text">
        <h1 class="mt-4">Admins</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Manages Users / View Admins</li>
        </ol>
      </div>
      <div>
        <a href="<?php echo BASE_URL ?>admin/links/admins/create-admin.php" class="btn btn-primary">Create Admin</a>
      </div>
    </div>
    <!-- end of breadcrumb -->

    <div class="card mb-4">
      <div class="card-header">
        <?php alertMessage() ?>
        <i class="fas fa-table me-1"></i>
        Show all admins
      </div>
      <div class="card-body">
        <?php
        $admins = getAll('admins');
        $num = 1;

        if (mysqli_num_rows($admins) > 0) { ?>

          <table id="datatablesSimple">
            <thead>
              <tr>
                <th>S.l</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>ID</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row = mysqli_fetch_assoc($admins)) { ?>

                <tr>
                  <td><?php echo $num++ ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['phone'] ?></td>
                  <td><?php echo $row['id'] ?></td>
                  <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        <?php } else { ?>
          <tbody>
            <tr>
              <td colspan="4">Record not found</td>
          </tbody>
        <?php }
        ?>
      </div>
    </div>
    <!-- end of dataTablesSimple -->
  </div>
</main>


<?php include_once(DIR_URL . "admin/includes/footer.php") ?>