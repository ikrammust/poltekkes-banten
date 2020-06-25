<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
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
        <h3 class="ml-5">Edit User</h3>
        </div>
        </div>
        </div>
        <!-- /.card-header -->
        <?php foreach($user as $u) : ?>
        <div class="card-body">
        <form action="<?php echo site_url('mhs/cobaupdate') ?>" method="post" enctype="multipart/form-data" >
        <table id="" class="table table-bordered table-hover">

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        
        
        <thead>

        <div class="form-group mt-3">
        <label for="role_id">Role</label>
            <select class="form-control" id="role_id" name="role_id">
            <option value="">Choose...</option>
            <option <?php if($u['role_id'] == 1) echo "selected" ?> value="1">Admin</option>
            <option <?php if($u['role_id'] == 2) echo "selected" ?> value="2">Dosen</option>
            <option <?php if($u['role_id'] == 3) echo "selected" ?> value="3">Mahasiswa</option>
            </select>
        </div>



        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="status">Status</label>
        </div>
        <select class="custom-select" id="status" name="status">
            <option value="">Choose..</option>
            <option <?php if($u['status'] == 0) echo "selected" ?> value="0">Tidak Aktif</option>
            <option <?php if($u['status'] == 1) echo "selected" ?> value="1">Aktif</option>
        </select>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="pilihan">Izinkan Menilai</label>
        </div>
        <select class="custom-select" id="pilihan" name="pilihan">
            <option value="">Choose..</option>
            <option <?php if($u['pilihan'] == 1) echo "selected" ?> value="1">Ya</option>
            <option <?php if($u['pilihan'] == 0) echo "selected" ?> value="0">Tidak</option>
        </select>
        </div>

        <div class="form-group">
            <label for="nip">NIP / NIM</label>
            <input class="form-control <?php echo form_error('nip') ? 'is-invalid':'' ?>"
            type="text" name="nip" placeholder="NIP / NIM" value="<?php echo $u['nip'] ?>"/>
            <div class="invalid-feedback">
                <?php echo form_error('NIP') ?>
            </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $u['id']?>" />
        <input type="hidden" name="id2" value="<?= $nanu['id'] ?>">

        <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $u['nama'] ?>"/>
            <div class="invalid-feedback">
                <?php echo form_error('nama') ?>
            </div>
        </div>

        <input type="hidden" name="tingkat" value="">
        <input type="hidden" name="jurusan" value="">
        <input type="hidden" name="masuk" value="">

        <div class="form-group">
            <label for="telp">No. Telepon</label>
            <input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>" 
                type="text" name="telp" autocomplete="off" placeholder="No. Telepon" value="<?= $nanu['telp'] ?>">
            <div class="invalid-feedback">
                <?php echo form_error('telp') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                type="text-area" name="alamat" placeholder="Alamat Rumah" value="<?= $nanu['alamat'] ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('alamat') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="info">About Me</label>
            <input class="form-control <?php echo form_error('info') ? 'is-invalid':'' ?>"
                type="text" name="info" placeholder="Ceritakan tentang Dirimu" value="<?= $nanu['info'] ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('info') ?>
            </div>
        </div>
        
        <div class="form-group">
        <label>Picture</label>
        <div class="row no-gutters">
        <div class="col-2">
            <input type="hidden" name="old_image" value="<?= $u['image'] ?>">
            <img src="<?php if($u['image'] === "") echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$u['image'] ?>" class="img-thumbnail" alt="user">
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
        <?php endforeach ?>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->