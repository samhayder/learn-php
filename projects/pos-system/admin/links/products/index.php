<?php
include_once("../../../config/config.php");
include_once DIR_URL . ("config/functions.php");
include_once DIR_URL . ("admin/includes/header.php");

?>

<main>
  <div class="container-fluid px-4">
    <div class="title d-flex justify-content-between align-items-center">
      <div class="title_text">
        <h1 class="mt-4">Products</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Manages Products / View Products</li>
        </ol>
      </div>
      <div>
        <a href="<?php echo BASE_URL ?>admin/links/products/add.php" class="btn btn-primary">Create products</a>
      </div>
    </div>
    <!-- end of breadcrumb -->

    <div class="card mb-4">
      <div class="card-header">
        <?php alertMessage() ?>
        <i class="fas fa-table me-1"></i>
        Show all products
      </div>
      <div class="card-body">
        <?php
        $products = getAll('products');
        $num = 1;

        if (mysqli_num_rows($products) > 0) : ?>
          <table id="datatablesSimple">
            <thead>
              <tr>
                <th>S.l</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php while ($row = mysqli_fetch_assoc($products)) : ?>
                <tr>
                  <td><?php echo $num++ ?></td>
                  <td>
                    <img src="../<?php echo $row['image'] ?>" alt="Image" width="60px" height="60px">
                  </td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <?php if ($row['status'] == 0) : ?>
                    <td><span class="badge text-bg-success">Visible</span>
                    </td>
                  <?php else : ?>
                    <td><span class="badge text-bg-info">Hidden</span>
                    </td>
                  <?php endif; ?>
                  <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="confirm('Ary you delete category item?')">Delete</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        <?php else: ?>
          <tbody>
            <tr>
              <td colspan="4">Record not found</td>
          </tbody>
        <?php endif; ?>
      </div>
    </div>
    <!-- end of dataTablesSimple -->
  </div>
</main>


<?php include_once(DIR_URL . "admin/includes/footer.php") ?>