<div class="wrapper">
  <div class="content-wrapper">
<?= $this->session->flashdata('message');?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dosen Terfavorit</h1>
        <small style="color:red">*Pilih dosen Favoritmu</small>
      </div>
    </div>
  </div>
</section>


<section class="content">
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row d-flex align-items-stretch">


<?php foreach ($dada as $d) : ?>

      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            Dosen Poltekkes Banten
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-8">
                <h2 class="lead"><b><?= $d->nama ?></b></h2>
                <p class="text-muted text-sm"><b>About: </b><?= $d->info ?></p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: <?= $d->alamat ?></li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : <?= $d->telp ?></li>
                </ul>
              </div>
              <div class="col-4 text-center">
                <img src="<?php if(empty($d->image)) echo base_url('assets/dist/img/user2.jpg'); else echo base_url('assets/dist/img/').$d->image ?>" alt="dosen" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="#!" data-toggle="modal" data-target="#modal-lg<?= $d->id; ?>"
              class="btn btn-sm btn-success" role="button"><i class="far fa-check-square"></i> Pilih Aku</a>
            </div>
          </div>
        </div>
      </div>
        
<?php endforeach ?>

<!--Isi Nilai Modals -->
<?php foreach ($dada as $d) : ?>
<div class="modal fade" id="modal-lg<?= $d->id ?>" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Isilah sesuai kata hatimu.</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <form action="<?= base_url('form/isinilai'); ?>" method="POST">
      </div>
      <div class="modal-body">
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="mahasiswa">Saya</label>
              <input type="text" class="form-control" id="mahasiswa" value="<?= $dosen['nama'] ?>" readonly>
              <input name="nip" type="hidden" class="form-control" id="mahasiswa" value="<?= $dosen['nip'] ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="dosen">Memilih</label>
              <input type="text" class="form-control" id="dosen" value="<?= $d->nama ?>" readonly>
              <input name="nipdsn" type="hidden" class="form-control" id="dosen" value="<?= $d->nip ?>" readonly>
            </div>
          </div>

          <small style="color:red">*Silahkan beri penilaian kepada dosen favoritmu.</small><br>
          <small style="color:red">*Isilah kolom <span style="color:black">"Nilai"</span> di bawah ini dengan sesuai kriteria yg di berikan</small><br>
          <small style="color:red">*Rentang nilai dari <span style="color:black">1 - 100</span>.</small><br>
        

          <div class="form-row">
            <div class="form-group col-md-10 text-center">
              <label for="mahasiswa">Kriteria</label>
            </div>
            <div class="form-group col-md-2 text-center">
              <label for="dosen">Nilai</label>
            </div>
          </div>

          <!-- c1 -->
          <div class="form-row">
            <div class="form-group col-md-10">
              <label for="c1">1.</label>
              <label for="c1">Memberikan silabus / RPS diawal semester</label>
            </div>
            <div class="form-group col-md-2">
              <input name="c1" type="number" class="form-control text-center" id="c1" max="100" min="1" required>
            </div>
          </div>

          <!-- c2 -->
          <div class="form-row">
            <div class="form-group col-md-10">
              <label for="c2">2.</label>
              <label for="c2">Mengajar tepat waktu</label>
            </div>
            <div class="form-group col-md-2">
              <input name="c2" type="number" class="form-control text-center" id="c2" max="100" min="1" required>
            </div>
          </div>

          <!-- c3 -->
          <div class="form-row">
            <div class="form-group col-md-10">
              <label for="c3">3.</label>
              <label for="c3">Menguasai materi yang diajarkan</label>
            </div>
            <div class="form-group col-md-2">
              <input name="c3" type="number" class="form-control text-center" id="c3" max="100" min="1" required>
            </div>
          </div>

          <!-- c4 -->
          <div class="form-row">
            <div class="form-group col-md-10">
              <label for="c4">4.</label>
              <label for="c4">Mengkoreksi tugas dan memberi nilai tepat waktu</label>
            </div>
            <div class="form-group col-md-2">
              <input name="c4" type="number" class="form-control text-center" id="c4" max="100" min="1" required>
            </div>
          </div>

          <!-- c5 -->
          <div class="form-row">
            <div class="form-group col-md-10">
              <label for="c5">5.</label>
              <label for="c5">Melayani bimbingan akademik mahasiswa dengan baik</label>
            </div>
            <div class="form-group col-md-2">
              <input name="c5" type="number" class="form-control text-center" id="c5" max="100" min="1" required>
            </div>
          </div>
          
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" <?php if($dosen['pilihan'] === "0") { echo "disabled"; } ?> >Submit</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php endforeach ?>


          </div>
        </div>
      </div>
    </section>
  </div>
</div>