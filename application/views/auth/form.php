

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<div class="container-fluid">
<!-- /.row -->
<div class="row">
  <div class="col-12">
  <div class="card">
  <div class="card-header text-center">
    <h2>Form Penilaian Dosen</h2>
  </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
      <form action="" method="post">
        <table class="table table-hover">
          <thead>
          <tr>
            <th scope="col" rowspan="2" class="text-center align-middle">Select</th>
            <th scope="col" rowspan="2" class="text-center align-middle">No.</th>
            <th scope="col" rowspan="2" class="text-center align-middle">Nama Dosen</th>
            <th scope="col" rowspan="2" class="text-center align-middle">NIP</th>
            <th scope="col" colspan="5" class="text-center align-middle">Penilaian</th>
            <th scope="col" rowspan="2" class="text-center align-middle">Action</th>
          </tr>
          <tr>
            <th scope="col" class="text-center">A</th>
            <th scope="col" class="text-center">B</th>
            <th scope="col" class="text-center">C</th>
            <th scope="col" class="text-center">D</th>
            <th scope="col" class="text-center">E</th>
          </tr>
          </thead>
          <?php $no = 1 ?>
          
          <?php foreach ($dada as $d) : ?>
          <tbody>
          <tr>
            <th scope="row" class="text-center"><input class="ceker" type="checkbox" data-nip="<?php $d->nip ?>"></th>
            
            <th scope="row"><?= $no++ ?></th>
            <td><?= $d->nama ?></td>
            <td><?= $d->nip ?></td>
            <td>
              <div class="form-group">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </td>
            <td>
            <div class="form-group">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </td>
            <td>
            <div class="form-group">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </td>
            <td>
            <div class="form-group">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </td>
            <td>
            <div class="form-group">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </td>
            <td>
            <a href="<?php echo base_url('form/isinilai/'.$d->id); ?>" 
            class="btn btn-small btn-success" type="submit" role="button">Submit</a>
            </td>
          </tr>
          </tbody>
          <?php endforeach ?>
        </table>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.row -->
</div>