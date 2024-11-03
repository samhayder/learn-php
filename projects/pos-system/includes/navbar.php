  <!-- Start Top Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container">
      <a class="navbar-brand" href="<?php echo BASE_URL ?>">posSystem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>">Home</a>
          </li>
          <?php if (isset($_SESSION["loggedIn"])) : ?>
            <li class="nav-item">
              <a class="nav-link text-capitalize" href="<?php echo BASE_URL ?>user.php"><?php echo $_SESSION['loginUser']['name'] ?></a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="<?php echo BASE_URL ?>logout.php">Logout</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL ?>login.php">login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Top Navbar -->