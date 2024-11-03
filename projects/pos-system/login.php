<?php
include_once("./config/config.php");
include_once("./config/functions.php");
include_once(DIR_URL . "includes/header.php");
include_once(DIR_URL . "includes/navbar.php");

if (isset($_SESSION['loggedIn'])){ ?>
  <script>window.location.href = 'index.php'</script>
<?php }
?>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <?php alertMessage() ?>
        <h2 class="card-header text-center py-3">Login Form by posSystem</h2>
        <div class="card-body">
          <form action="login-code.php" method="POST" class="p-3">
            <div class="form-group my-3">
              <label for="email">Email Address *</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group mb-3">
              <label for="password">Password *</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="loginForm">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?php require_once(DIR_URL . "includes/footer.php") ?>