<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="<?php echo BASE_URL ?>admin/">
          <div class="sb-nav-link-icon">
            <i class="fas fa-tachometer-alt"></i>
          </div>
          Dashboard
        </a>
        <div class="sb-sidenav-menu-heading">Interface</div>
        <a
          class="nav-link collapsed"
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#collapseCategories"
          aria-expanded="false"
          aria-controls="collapseCategories">
          <div class="sb-nav-link-icon">
            <i class="fas fa-columns"></i>
          </div>
          Categories
          <div class="sb-sidenav-collapse-arrow">
            <i class="fas fa-angle-down"></i>
          </div>
        </a>
        <div
          class="collapse"
          id="collapseCategories"
          aria-labelledby="headingOne"
          data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="<?php echo BASE_URL ?>admin/links/categories/add.php">Add Categories</a>
            <a class="nav-link" href="<?php echo BASE_URL ?>admin/links/categories/">All Categories</a>
          </nav>
        </div>
        <a
          class="nav-link collapsed"
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#collapsePages"
          aria-expanded="false"
          aria-controls="collapsePages">
          <div class="sb-nav-link-icon">
            <i class="fas fa-book-open"></i>
          </div>
          Pages
          <div class="sb-sidenav-collapse-arrow">
            <i class="fas fa-angle-down"></i>
          </div>
        </a>
        <div
          class="collapse"
          id="collapsePages"
          aria-labelledby="headingTwo"
          data-bs-parent="#sidenavAccordion">
          <nav
            class="sb-sidenav-menu-nested nav accordion"
            id="sidenavAccordionPages">
            <a
              class="nav-link collapsed"
              href="#"
              data-bs-toggle="collapse"
              data-bs-target="#pagesCollapseAuth"
              aria-expanded="false"
              aria-controls="pagesCollapseAuth">
              Authentication
              <div class="sb-sidenav-collapse-arrow">
                <i class="fas fa-angle-down"></i>
              </div>
            </a>
            <div
              class="collapse"
              id="pagesCollapseAuth"
              aria-labelledby="headingOne"
              data-bs-parent="#sidenavAccordionPages">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="<?php echo BASE_URL ?>admin/">Login</a>
                <a class="nav-link" href=<?php echo BASE_URL ?>admin/">Register</a>
                <a class="nav-link" href="<?php echo BASE_URL ?>admin/">Forgot Password</a>
              </nav>
            </div>
            <a
              class="nav-link collapsed"
              href="#"
              data-bs-toggle="collapse"
              data-bs-target="#pagesCollapseError"
              aria-expanded="false"
              aria-controls="pagesCollapseError">
              Error
              <div class="sb-sidenav-collapse-arrow">
                <i class="fas fa-angle-down"></i>
              </div>
            </a>
            <div
              class="collapse"
              id="pagesCollapseError"
              aria-labelledby="headingOne"
              data-bs-parent="#sidenavAccordionPages">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="<?php echo BASE_URL ?>admin/">401 Page</a>
                <a class="nav-link" href="<?php echo BASE_URL ?>admin/">404 Page</a>
                <a class="nav-link" href="<?php echo BASE_URL ?>admin/">500 Page</a>
              </nav>
            </div>
          </nav>
        </div>
        <div class="sb-sidenav-menu-heading">Addons</div>
        <a class="nav-link" href="<?php echo BASE_URL ?>admin/">
          <div class="sb-nav-link-icon">
            <i class="fas fa-chart-area"></i>
          </div>
          Charts
        </a>
        <a class="nav-link" href="<?php echo BASE_URL ?>admin/">
          <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
          Tables
        </a>

        <!-- Manage Users Start -->
        <div class="sb-sidenav-menu-heading">Manges Users</div>
        <a
          class="nav-link collapsed"
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#collapseAdmin"
          aria-expanded="false"
          aria-controls="collapseAdmin">
          <div class="sb-nav-link-icon">
            <i class="fas fa-user"></i>
          </div>
          Admin
          <div class="sb-sidenav-collapse-arrow">
            <i class="fas fa-angle-down"></i>
          </div>
        </a>
        <div
          class="collapse"
          id="collapseAdmin"
          aria-labelledby="headingOne"
          data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="<?php echo BASE_URL ?>admin/links/admins/create-admin.php">Add Admin</a>
            <a class="nav-link" href="<?php echo BASE_URL ?>admin/links/admins/index.php">View Admins</a>
          </nav>
        </div>
        <!-- Manage Users End -->

      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div>
      Start Bootstrap
    </div>
  </nav>
</div>