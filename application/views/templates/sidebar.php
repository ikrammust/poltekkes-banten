
<?php if ($dosen['role_id'] == 1) : ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex nav nav-pills nav-item" data-widget="treeview" role="menu" data-accordion="false">
        <div class="image">
          <img src="<?= base_url('assets/'); ?>dist/img/poltek.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="https://poltekkesbanten.ac.id/" class="d-block">Poltekkes Banten</a>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?= base_url('user') ?>" class="nav-link <?= $this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('chart') ?>" class="nav-link <?php if($this->uri->segment(1)== "chart" ){echo "active";} ?>">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('form') ?>" class="nav-link <?php if($this->uri->segment(1)== "form" ){echo "active";} ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?php if($this->uri->segment(1) == "mhs" || $this->uri->segment(1) == "dsn" ){echo "active";} ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('mhs') ?>" class="nav-link <?php if($this->uri->segment(1)== "mhs" ){echo "active";} ?>">
                <i class="fas fa-user-tie"></i>
                  <p>Lecturer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dsn') ?>" class="nav-link <?php if($this->uri->segment(1)== "dsn" ){echo "active";} ?>">
                <i class="fas fa-user-graduate"></i>
                  <p>Student</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php elseif ($dosen['role_id'] == 2) : ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex nav nav-pills nav-item" data-widget="treeview" role="menu" data-accordion="false">
    <div class="image">
      <img src="<?= base_url('assets/'); ?>dist/img/poltek.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="https://poltekkesbanten.ac.id/" class="d-block">Poltekkes Banten</a>
    </div>
  </div>
  
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="<?= base_url('chart') ?>" class="nav-link <?php if($this->uri->segment(1)== "chart" ){echo "active";} ?>">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Charts
          </p>
        </a>
      </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>


<?php elseif ($dosen['role_id'] == 3) : ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex nav nav-pills nav-item" data-widget="treeview" role="menu" data-accordion="false">
    <div class="image">
      <img src="<?= base_url('assets/'); ?>dist/img/poltek.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="https://poltekkesbanten.ac.id/" class="d-block">Poltekkes Banten</a>
    </div>
  </div>
  
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="<?= base_url('form') ?>" class="nav-link <?php if($this->uri->segment(1)== "form" ){echo "active";} ?>">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Forms
          </p>
        </a>
      </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>


<?php endif; ?>
