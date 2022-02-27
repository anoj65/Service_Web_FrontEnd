<nav class="sidebar">
  <div class="sidebar-header">
    <a href="/admin/" class="sidebar-brand"> Admin<span>Panel</span> </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Services</li>
      <li class="nav-item">
        <a href="/admin/add-new-category.php" class="nav-link">
          <i class="link-icon" data-feather="grid"></i>
          <span class="link-title">Categories</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#addnewproduct" role="button" aria-expanded="false">
          <i class="link-icon" data-feather="shopping-bag"></i>
          <span class="link-title">Service Packages</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="addnewproduct">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="/admin/add-new-service-package.php" class="nav-link">Add New Package</a>
            </li>
            <li class="nav-item">
              <a href="/admin/service-list.php" class="nav-link">All Packages</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item nav-category">Orders</li>
      <li class="nav-item">
        <a href="/admin/" class="nav-link">
          <i class="link-icon" data-feather="shopping-cart"></i>
          <span class="link-title">New Orders</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="/admin/processing-orders.php" class="nav-link">
          <i class="link-icon" data-feather="rotate-cw"></i>
          <span class="link-title">Processing Orders</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="/admin/order-history.php" class="nav-link">
          <i class="link-icon" data-feather="clock"></i>
          <span class="link-title">Orders History</span>
        </a>
      </li>

      <li class="nav-item nav-category">Users</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#users" role="button" aria-expanded="false">
          <i class="link-icon" data-feather="smile"></i>
          <span class="link-title">Users</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="users">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="/admin/customers.php" class="nav-link">All Users</a>
            </li>
            <li class="nav-item">
              <a href="/admin/banned-user-list.php" class="nav-link">Banned Users</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#employee" role="button" aria-expanded="false">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Employees</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="employee">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="/admin/employees.php" class="nav-link">All Employees</a>
            </li>
            <li class="nav-item">
              <a href="/admin/add-new-employee.php" class="nav-link">Add New Employee</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a href="/admin/user-profile.php" class="nav-link">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Profile</span>
        </a>
      </li>

      <!--
            <li class="nav-item nav-category">Appearance</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="link-icon" data-feather="droplet"></i>
                <span class="link-title">Colors</span>
              </a>
            </li> -->

      <li class="nav-item nav-category">Settings</li>
      <li class="nav-item">
        <a href="/admin/general-settings.php" class="nav-link">
          <i class="link-icon" data-feather="settings"></i>
          <span class="link-title">General Settings</span>
        </a>
      </li>
      <!--
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="link-icon" data-feather="pocket"></i>
                <span class="link-title">Policies</span>
              </a>
            </li> -->

      <li class="nav-item nav-category">Help & Support</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="phone-call"></i>
          <span class="link-title">Contact Us</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="hash"></i>
          <span class="link-title">Documentation</span>
        </a>
      </li>

    </ul>
  </div>
</nav>