<div class="wrapper">
  <div class="content-wrapper">

<!-- Content Header (Page header) -->
<?= $this->session->flashdata('message');?>
<section class="content">
    <div class="card-body pb-0">

                <div style="background-image: url(<?= base_url('assets/dist/img/photo4.jpg') ?>) " class="jumbotron jumbotron-fluid">
                <div class="container">
                <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="<?php if($dosen['image'] === "") echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$dosen['image'] ?>" class="card-img" alt="Please Call Admin">
                    </div>
                    <div class="col-md-8 bg-dark">
                        <div class="card-body">
                            <h1>Welcome!</h1><br>
                            <h3><i class="far fa-user-circle fa-fw"></i><?= $dosen['nama'] ?></h3>
                            <h3><i class="fas fa-fingerprint fa-fw"></i><?= $dosen['nip'] ?></h3>
                        </div>
                        <div class="card-body">
                            <h4 class="text-justify">“The only way to be truly satisfied is to do what you believe is great work, and the only way to do great work is to love what you do. If you haven't found it yet, keep looking, and don't settle.”</h4>
                            <h5 class="text-right"><small>- Steve Jobs</small></h5>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>



    </div>
</section>

    </div>
</div>