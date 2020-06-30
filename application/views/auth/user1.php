
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php $query = $this->db->get('dosen')->result_array()?>
    <?php $querydosen = $this->db->get_where('dosen', ['role_id' => 2] )->result_array()?>
    <?php $querymhs = $this->db->get_where('dosen', ['role_id' => 3] )->result_array()?>
    <?php $querypemilih = $this->db->get_where('dosen', ['pilihan' => 0] )->result_array()?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info">
          <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total User</span>
            <span class="info-box-number"><?= count($query) - 1 ?> User </span>

            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <?= count($query)-1 ?> / <?= count($query)-1 ?> User
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-success">
          <span class="info-box-icon"><i class="fas fa-user-tie"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Lecturers</span>
            <span class="info-box-number"><?= count($querydosen) ?> Persons </span>

            <div class="progress">
              <div class="progress-bar" style="width: <?= round(count($querydosen)/count($query)*100) ?>%"></div>
            </div>
            <span class="progress-description">
              <?= count($querydosen) ?> / <?= count($query)-1 ?> User
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-warning">
          <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Students</span>
            <span class="info-box-number"><?= count($querymhs) ?> Persons</span>

            <div class="progress">
              <div class="progress-bar" style="width: <?= round(count($querymhs)/count($query)*100) ?>%"></div>
            </div>
            <span class="progress-description">
              <?= count($querymhs) ?> / <?= count($query)-1 ?> User
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-danger">
          <span class="info-box-icon"><i class="fas fa-tasks"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Number of Voters</span>
            <span class="info-box-number"><?= count($querypemilih) ?> Persons </span>

            <div class="progress">
              <div class="progress-bar" style="width: <?= round(count($querypemilih)/count($query)*100) ?>%"></div>
            </div>
            <span class="progress-description">
              <?= count($querypemilih) ?> / <?= count($query)-1 ?> User
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
</div>
<!-- ./wrapper -->

