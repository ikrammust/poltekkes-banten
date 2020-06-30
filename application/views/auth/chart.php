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
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
  <!-- DataTables -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.css"/>   
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
  <a href="#" class="d-block">Poltekkes Banten</a>
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
  <a href="#" class="d-block">Poltekkes Banten</a>
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
















<div class="wrapper">
    <div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Favorite Lecturer</h1>
      </div>
    </div>
  </div>
</section>


<section class="content">
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row d-flex align-items-stretch">
       
        <?php $n1 = array() ?>
        <?php $n2 = array() ?>
        <?php $n3 = array() ?>
        <?php $n4 = array() ?>
        <?php $n5 = array() ?>
        
        <?php foreach ($sum as $ss) : ?>
            <?php array_push($n1, $ss['n1']) ?>
            <?php array_push($n2, $ss['n2']) ?>
            <?php array_push($n3, $ss['n3']) ?>
            <?php array_push($n4, $ss['n4']) ?>
            <?php array_push($n5, $ss['n5']) ?>
        <?php endforeach ?>
        

        <?php $no = 1 ?>
        <?php $arrrr = array() ?>
        <?php foreach ($sum as $zzz) : ?>
        <?php array_push($arrrr, array("nipdsn" => $zzz['nipdsn'], "nama" => $zzz['nama'], "n1" => $zzz['n1'], "n2" => $zzz['n2'], "n3" => $zzz['n3'], "n4" => $zzz['n4'], "n5" => $zzz['n5'], "image" => $zzz['image'], "info" => $zzz['info'], "nn" =>  round($zzz['n1']/max($n1)*0.3, 2)+
                                                                                                    round(min($n2)/$zzz['n2']*0.25, 2)+
                                                                                                    round($zzz['n3']/max($n3)*0.2, 2)+
                                                                                                    round(min($n4)/$zzz['n4']*0.15, 2)+
                                                                                                    round($zzz['n5']/max($n5)*0.1, 2))); ?> 
        
        
        <?php endforeach ?>
        <?php usort($arrrr, function($a, $b) {
            return $b['nn'] <=> $a['nn'];
        });?>

        
            <!-- Dosen Favorit -->
            <div class="card-deck">
            <div class="card">
                <div class="text-center mt-1 mb-1"><img style="width:10%" src="<?= base_url('assets/dist/img/nomer.png') ?>" alt="number 1"></div>
                <img src="<?php if(empty($arrrr['0']['image'])) echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$arrrr['0']['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><?php if(empty($arrrr['0']['nama'])) echo "Admin Poltekkes Banten"; else echo $arrrr['0']['nama'] ?></h4>
                    <p class="card-text"><small class="text-muted"><?php if(empty($arrrr['0']['nipdsn'])) echo "123456789"; else echo $arrrr['0']['nipdsn'] ?></small></p>
                </div>
            </div>
            <div class="card">
                <div class="text-center mt-1 mb-1"><img style="width:10%" src="<?= base_url('assets/dist/img/nomer2.png') ?>" alt="number 2"></div>
                <img src="<?php if(empty($arrrr['1']['image'])) echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$arrrr['1']['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><?php if(empty($arrrr['1']['nama'])) echo "Admin Poltekkes Banten"; else echo $arrrr['1']['nama'] ?></h4>
                    <p class="card-text"><small class="text-muted"><?php if(empty($arrrr['1']['nipdsn'])) echo "123456789"; else echo $arrrr['1']['nipdsn'] ?></small></p>
                </div>
            </div>
            <div class="card">
                <div class="text-center mt-1 mb-1"><img style="width:10%" src="<?= base_url('assets/dist/img/nomer3.png') ?>" alt="number 3"></div>
                <img src="<?php if(empty($arrrr['2']['image'])) echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$arrrr['2']['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><?php if(empty($arrrr['2']['nama'])) echo "Admin Poltekkes Banten"; else echo $arrrr['2']['nama'] ?></h4>
                    <p class="card-text"><small class="text-muted"><?php if(empty($arrrr['2']['nipdsn'])) echo "123456789"; else echo $arrrr['2']['nipdsn'] ?></small></p>
                </div>
            </div>
            </div>

            <?php $nn1 = array() ?>
            <?php $nn2 = array() ?>
            <?php $nn3 = array() ?>
            <?php $nn4 = array() ?>
            <?php $nn5 = array() ?>
            <?php foreach($sum as $zzz) : ?>
            <?php array_push($nn1, array("image" => $zzz['image'], "info" => $zzz['info'], "nipdsn" => $zzz['nipdsn'], "nama" => $zzz['nama'], "nn" => round($zzz['n1']/max($n1), 2))) ?>
            <?php array_push($nn2, array("image" => $zzz['image'], "info" => $zzz['info'], "nipdsn" => $zzz['nipdsn'], "nama" => $zzz['nama'], "nn" => round(min($n2)/$zzz['n2'], 2))) ?>
            <?php array_push($nn3, array("image" => $zzz['image'], "info" => $zzz['info'], "nipdsn" => $zzz['nipdsn'], "nama" => $zzz['nama'], "nn" => round($zzz['n3']/max($n3), 2))) ?>
            <?php array_push($nn4, array("image" => $zzz['image'], "info" => $zzz['info'], "nipdsn" => $zzz['nipdsn'], "nama" => $zzz['nama'], "nn" => round(min($n4)/$zzz['n4'], 2))) ?>
            <?php array_push($nn5, array("image" => $zzz['image'], "info" => $zzz['info'], "nipdsn" => $zzz['nipdsn'], "nama" => $zzz['nama'], "nn" => round($zzz['n5']/max($n5), 2))) ?>
            <?php endforeach ?>

            <?php usort($nn1, function($a, $b) {
            return $b['nn'] <=> $a['nn'];
            });?>
            <?php usort($nn2, function($a, $b) {
            return $b['nn'] <=> $a['nn'];
            });?>
            <?php usort($nn3, function($a, $b) {
            return $b['nn'] <=> $a['nn'];
            });?>
            <?php usort($nn4, function($a, $b) {
            return $b['nn'] <=> $a['nn'];
            });?>
            <?php usort($nn5, function($a, $b) {
            return $b['nn'] <=> $a['nn'];
            });?>

        </div>
        <!-- Dosen Ter -->
        <div class="card-group mt-5">
            <div class="card col">
                <div class="text-center mt-1 mb-1"><h5>The Most Updated Lecturer</h5></div>
                <img src="<?php if(empty($nn1['0']['image'])) echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$nn1['0']['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php if(empty($nn1['0']['nama'])) echo "Admin Poltekkes Banten"; else echo $nn1['0']['nama'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?php if(empty($nn1['0']['nipdsn'])) echo "123456789"; else echo $nn1['0']['nipdsn'] ?></small></p>
                </div>
            </div>
            <div class="card col">
                <div class="text-center mt-1 mb-1"><h5>The Most Disciplined Lecturer</h5></div>
                <img src="<?php if(empty($nn2['0']['image'])) echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$nn2['0']['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php if(empty($nn2['0']['nama'])) echo "Admin Poltekkes Banten"; else echo $nn2['0']['nama'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?php if(empty($nn2['0']['nipdsn'])) echo "123456789"; else echo $nn2['0']['nipdsn'] ?></small></p>
                </div>
            </div>
            <div class="card col">
                <div class="text-center mt-1 mb-1"><h5>The Most Cool Lecturer</h5></div>
                <img src="<?php if(empty($nn3['0']['image'])) echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$nn3['0']['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php if(empty($nn3['0']['nama'])) echo "Admin Poltekkes Banten"; else echo $nn3['0']['nama'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?php if(empty($nn3['0']['nipdsn'])) echo "123456789"; else echo $nn3['0']['nipdsn'] ?></small></p>
                </div>
            </div>
            <div class="card col">
                <div class="text-center mt-1 mb-1"><h5>The Wisest lecturer</h5></div>
                <img src="<?php if(empty($nn4['0']['image'])) echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$nn4['0']['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php if(empty($nn4['0']['nama'])) echo "Admin Poltekkes Banten"; else echo $nn4['0']['nama'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?php if(empty($nn4['0']['nipdsn'])) echo "123456789"; else echo $nn4['0']['nipdsn'] ?></small></p>
                </div>
            </div>
            <div class="card col">
                <div class="text-center mt-1 mb-1"><h5>The Most Creative Lecturer</h5></div>
                <img src="<?php if(empty($nn5['0']['image'])) echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$nn5['0']['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php if(empty($nn5['0']['nama'])) echo "Admin Poltekkes Banten"; else echo $nn5['0']['nama'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?php if(empty($nn5['0']['nipdsn'])) echo "123456789"; else echo $nn5['0']['nipdsn'] ?></small></p>
                </div>
            </div>
            </div>


            <div class="card-body">
      <div class="card-header">
        <h3>Value Data</h3>
      </div>
        <table id="user_data" class="table table-bordered table-hover">
          <thead>
            <tr>
                <th scope="col" class="text-center">Ranking</th>
                <th scope="col">Name</th>
                <th scope="col" class="text-center">NIP</th>
                <th scope="col" class="text-center">Criteria 1</th>
                <th scope="col" class="text-center">Criteria 2</th>
                <th scope="col" class="text-center">Criteria 3</th>
                <th scope="col" class="text-center">Criteria 4</th>
                <th scope="col" class="text-center">Criteria 5</th>
                <th scope="col" class="text-center">Sum of All Criteria</th>
            </tr>
          </thead>
          <tbody>
          <?php $no = 1; ?>
          <?php foreach ($arrrr as $row) : ?>
            <tr>
                <th scope="row" class="text-center"><?= $no++ ?></th>
                <th class="font-weight-normal"><?= $row['nama'] ?></th>
                <td class="text-center"><?= $row['nipdsn'] ?></td>
                <td class="text-center"><?= $row['n1'] ?></td>
                <td class="text-center"><?= $row['n2'] ?></td>
                <td class="text-center"><?= $row['n3'] ?></td>
                <td class="text-center"><?= $row['n4'] ?></td>
                <td class="text-center"><?= $row['n5'] ?></td>
                <td class="text-center"><?= $row['nn'] ?></td>
          <?php endforeach ?>
            </tr>
          </tbody>  
        </table>
        <script>

          $(document).ready(function(){
              $('#user_data').DataTable();
          });

        </script>
      </div>




      </div>


    
      
       
    </div>
</section>
      
    </div>
</div>







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
<!-- Sparkline -->
<script src="<?= base_url('assets/'); ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
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