  <!-- Main Sidebar Container -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .0">
      <span class="brand-text font-weight-light">FDS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/addrestaurant" class="nav-link">
                <i class="bi bi-plus"></i>
                  <p>Add Restaurant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/addcategory" class="nav-link">
                <i class="bi bi-plus"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/additem" class="nav-link">
                <i class="bi bi-plus"></i>
                  <p>Add Item</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="restaurantList" class="nav-link">
                <i class="bi bi-card-list"></i>
                  <p>Restaurant Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="categoryList" class="nav-link">
                <i class="bi bi-card-list"></i>
                  <p>Category Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="itemList" class="nav-link">
                <i class="bi bi-card-list"></i>
                  <p>Item Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
  </aside>