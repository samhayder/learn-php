<!-- Start Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- start off canvas toggler -->
    <button
      class="navbar-toggler me-2"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasExample"
      aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- end off canvas toggler -->

    <a class="navbar-brand text-uppercase" href="./dashboard.php">Star Library</a>

    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex ms-auto" role="search">
        <div class="input-group">
          <input
            type="text"
            class="form-control"
            placeholder="Search..."
            aria-describedby="button-addon2" />
          <button
            class="btn btn-outline-secondary btn-primary text-white"
            type="button"
            id="button-addon2">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>

      <ul class="navbar-nav ml-2 mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="./assets/img/user.png" class="user_img" />
            Admin
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">My Profile</a></li>
            <li><a class="dropdown-item" href="#">Change Password</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Top Navbar -->