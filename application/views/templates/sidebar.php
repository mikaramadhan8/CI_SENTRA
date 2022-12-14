<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('index.php/admin/index'); ?>" class="brand-link">
      <img src="<?= base_url('assets/')?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin RW 08</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/')?>dist/img/mika-bgmerah.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p class="d-block text-light">Mika Ramadhan</p>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="<?= base_url('index.php/admin/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/admin/tracking') ?>" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Menu Tracking
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/admin/feedback') ?>" class="nav-link">
              <i class="nav-icon far fa-thumbs-up"></i>
              <p>
                Menu Feedback
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/login/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>