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
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
          <div class="row">
          <div class="col-2">
          <a href="<?php echo site_url('mhs') ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="col offset-3">
            <h3 class="ml-5">Create New User</h3>
          </div>
          </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <form action="<?php echo site_url('mhs/add') ?>" method="post" enctype="multipart/form-data" >
            <table id="" class="table table-bordered table-hover">

            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>

            
            
            <thead>
            <div class="form-group">
            <label for="role_id">Role</label>
            <select class="form-control" id="role_id" name="role_id">
                <option value="2">Lecturer</option>
            </select>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="status">Status</label>
                </div>
                <select class="custom-select" id="status" name="status">
                    <option selected>Choose...</option>
                    <option value="1">Active</option>
                    <option value="0">Not yet</option>
                </select>
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="pilihan">Allow Vote</label>
            </div>
            <select class="custom-select" id="pilihan" name="pilihan">
                <option selected>Choose...</option>
                <option value="1">Off Course!</option>
                <option value="0">Never.</option>
            </select>
            </div>  
            </thead>

              <tbody>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input class="form-control <?php echo form_error('nip') ? 'is-invalid':'' ?>"
                    type="text" autocomplete="off" name="nip" placeholder="Insert your NIP" />
                    <div class="invalid-feedback">
                        <?= form_error('nip') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama">Name</label>
                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                        type="text" autocomplete="off" name="nama" placeholder="Your Name is.." />
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                    type="password" name="password" placeholder="Don't tell anyone your Password!" />
                    <div class="invalid-feedback">
                        <?php echo form_error('password') ?>
                    </div>
                </div>
                
                <input type="hidden" name="tingkat" value="">
                <input type="hidden" name="jurusan" value="">
                <input type="hidden" name="masuk" value="">

                <div class="form-group">
                    <label for="telp">Phone Number</label>
                    <input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>" 
                      type="text" name="telp" autocomplete="off" placeholder="Your Phone Number is...">
                    <div class="invalid-feedback">
                      <?php echo form_error('telp') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat">Home Adress</label>
                    <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                        type="text-area" name="alamat" placeholder="Your Home Adress is..." />
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="info">About Me</label>
                    <input class="form-control <?php echo form_error('info') ? 'is-invalid':'' ?>"
                        type="text" name="info" placeholder="Tell me about yourself" />
                    <div class="invalid-feedback">
                        <?php echo form_error('info') ?>
                    </div>
                </div>

                <div class="form-group">
                <label>Picture</label>
                <div class="row no-gutters">
                <div class="col-2">
                    <img src="<?= base_url('assets/dist/img/user2.jpg') ?>" class="img-thumbnail" alt="user">
                </div>
                <div class="custom-file col-2 ml-2 align-self-center">
                    <input type="file" class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                </div>
                </div>

              </tbody>
                <input class="btn btn-success" type="submit" name="btn" id="submit" value="Save" />
            </table>
            </form>
            </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->