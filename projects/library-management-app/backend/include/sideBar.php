<!-- Start Left Side bar offcanvas -->
<div
  class="offcanvas offcanvas-start bg-dark text-white left_sidebar"
  tabindex="-1"
  id="offcanvasExample"
  aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-body">
    <ul class="navbar-nav">
      <li class="nav-item">
        <div class="text-secondary text-uppercase fw-bold">Core</div>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="<?php echo BASE_URL;?>dashboard.php">
          <i class="fa fa-dashboard me-2" aria-hidden="true"></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item py-0">
        <hr />
      </li>
      <!-- end of dashboard -->

      <li class="nav-item">
        <div class="text-secondary text-uppercase fw-bold">Inventory</div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link sidebar_link"
          data-bs-toggle="collapse"
          href="#book_management"
          role="button"
          aria-expanded="false"
          aria-controls="book_management">
          <i class="fa fa-book me-2" aria-hidden="true"></i>
          Book Management
          <span class="float-end icon_right">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
          </span>
        </a>
        <div class="collapse" id="book_management">
          <ul class="navbar-nav">
            <li class="nav-item ms-3">
              <a href="<?php echo BASE_URL; ?>books/add-book.php" class="nav-link">
                <i class="fa fa-plus me-2" aria-hidden="true"></i>
                Add New</a>
            </li>
            <li class="nav-item ms-3">
              <a href="<?php echo BASE_URL; ?>books/" class="nav-link">
                <i class="fa fa-list me-2" aria-hidden="true"></i>
                Manage All</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- end of book management -->
      <li class="nav-item">
        <a
          class="nav-link sidebar_link"
          data-bs-toggle="collapse"
          href="#student"
          role="button"
          aria-expanded="false"
          aria-controls="student">
          <i class="fa fa-user me-2" aria-hidden="true"></i>
          Students
          <span class="float-end icon_right">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
          </span>
        </a>
        <div class="collapse" id="student">
          <ul class="navbar-nav">
            <li class="nav-item ms-3">
              <a href="<?php echo BASE_URL; ?>students/add-student.php" class="nav-link">
                <i class="fa fa-plus me-2" aria-hidden="true"></i>
                Add New</a>
            </li>
            <li class="nav-item ms-3">
              <a href="<?php echo BASE_URL; ?>students/" class="nav-link">
                <i class="fa fa-list me-2" aria-hidden="true"></i>
                Manage All</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- end of student -->
      <li class="nav-item py-0">
        <hr />
      </li>
      <!-- end of inventory -->

      <li class="nav-item">
        <div class="text-secondary text-uppercase fw-bold">Business</div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link sidebar_link"
          data-bs-toggle="collapse"
          href="#book_loan"
          role="button"
          aria-expanded="false"
          aria-controls="book_loan">
          <i class="fa fa-book-open me-2" aria-hidden="true"></i>
          Book Loan
          <span class="float-end icon_right">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
          </span>
        </a>
        <div class="collapse" id="book_loan">
          <ul class="navbar-nav">
            <li class="nav-item ms-3">
              <a href="<?php echo BASE_URL; ?>loans/add-loan.php" class="nav-link">
                <i class="fa fa-plus me-2" aria-hidden="true"></i>
                Add New</a>
            </li>
            <li class="nav-item ms-3">
              <a href="<?php echo BASE_URL; ?>loans/" class="nav-link">
                <i class="fa fa-list me-2" aria-hidden="true"></i>
                Manage All</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- end of book loan -->
      <li class="nav-item">
        <a
          class="nav-link sidebar_link"
          data-bs-toggle="collapse"
          href="#subscription"
          role="button"
          aria-expanded="false"
          aria-controls="subscription">
          <i class="fa fa-dollar me-2" aria-hidden="true"></i>
          Subscription
          <span class="float-end icon_right">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
          </span>
        </a>
        <div class="collapse" id="subscription">
          <ul class="navbar-nav">
            <li class="nav-item ms-3">
              <a href="<?php echo BASE_URL; ?>subscription/subscription-plane.php" class="nav-link">
                <i class="fa fa-plus me-2" aria-hidden="true"></i>
                Plane</a>
            </li>
            <li class="nav-item ms-3">
              <a href="<?php echo BASE_URL; ?>subscription/" class="nav-link">
                <i class="fa fa-list me-2" aria-hidden="true"></i>
                Purchase History</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- end of subscription -->
      <li class="nav-item py-0">
        <hr />
      </li>
      <!-- end of business -->

      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">
          <i class="fa fa-sign-out me-2" aria-hidden="true"></i>
          Logout
        </a>
      </li>
      <!-- end of logout -->
    </ul>
  </div>
</div>
<!-- End Left Side bar offcanvas -->