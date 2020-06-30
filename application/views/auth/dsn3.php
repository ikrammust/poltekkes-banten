<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.css"/>              
  <!-- Bootstrap Switch -->
  <script src="<?= base_url('assets/'); ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            
            <span class="mr-2"><?= $dosen['nama'] ?></span>
            <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="<?= base_url('user/profile') ?>" class="dropdown-item">
            <i class="far fa-user-circle"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('user/logout') ?>" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  


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
          <a href="user" class="nav-link <?= $this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
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





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<?= $this->session->flashdata('message');?>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header row">
            <div class="col-2">
            <a href="<?= base_url('dsn/add') ?>" class="btn btn-success"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <div class="col offset-2">
              <h3 class="ml-5">Student Data</h3>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="user_data" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col" class="text-center">No.</th>
                <th scope="col">Name</th>
                <th scope="col" class="text-center">NIM</th>
                <th scope="col" class="text-center">Degree</th>
                <th scope="col" class="text-center">Majors</th>
                <th scope="col" class="text-center">Batch of</th>
                <th scope="col" class="text-center">Vote Status</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
            <?php foreach ($dada as $row) : ?>
            <tr>
                <th scope="row" class="text-center"><?= $no++; ?></th>
                <th class="font-weight-normal"><?= $row['nama']; ?></th>
                <td class="text-center"><?= $row['nip']; ?></td>
                <td class="text-center"><?= $row['tingkat']; ?></td>
                <td class="text-center"><?= $row['jurusan']; ?></td>
                <td class="text-center"><?= $row['masuk']; ?></td>
                <td class="text-center"><input type="checkbox" <?php if($row['pilihan'] != 1) echo "checked"; else echo ""; ?> disabled>  <?php if($row['pilihan'] != 1) echo "Done"; else echo "Not yet"; ?>  </td>
                <td class="text-center">

                <a href="<?php echo base_url('dsn/cobaedit/'.$row['id']); ?>" 
                class="btn btn-small text-primary" role="button"><i class="fas fa-edit"></i> Edit</a>

                <a onclick="deleteConfirm('<?php echo site_url('dsn/delete/'.$row['id']) ?>')"
                href="#!" class="btn btn-small text-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
            <tfoot>
            <tr>
                <th scope="col" class="text-center">No.</th>
                <th scope="col">Name</th>
                <th scope="col" class="text-center">NIM</th>
                <th scope="col" class="text-center">Degree</th>
                <th scope="col" class="text-center">Majors</th>
                <th scope="col" class="text-center">Batch of</th>
                <th scope="col" class="text-center">Vote Status</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
            </tfoot>
            </tbody>
            <!-- Logout Delete Confirmation-->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deleted data can't be restored.</div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
                    <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                </div>
                </div>
            </div>
            </div>
            </table>

            <script>

            $(document).ready(function(){
                $('#user_data').DataTable();
            });


            function deleteConfirm(url){
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
            }

            </script>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

    

<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/'); ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/'); ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/'); ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script>
</body>
</html>