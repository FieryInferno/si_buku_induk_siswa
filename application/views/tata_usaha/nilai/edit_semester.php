<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Nilai</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-dark mb-2">Data Nilai</h3>
        </div>
        <form action="<?= base_url('tata_usaha/nilai/edit_semester?nisn=' . $this->input->get('nisn')); ?>" method="POST">
          <div class="card-body bg-transparent border-0">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Semester</label>
              <input type="hidden" name="id_siswa" value="<?= $id_siswa; ?>">
              <input type="hidden" name="id_nilai" value="<?= $id_nilai; ?>">
              <input type="text" id="input-username" class="form-control" placeholder="Masukan Semester" name="semester" required value="<?= $nama_semester; ?>">
            </div>
            <div class="form-group" id="mataPelajaran">
              <?php
                foreach ($detail as $key) { ?>
                  <div class="row">
                    <div class="col-10">
                      <input type="text" id="input-username" class="form-control" placeholder="Masukan Mata Pelajaran" name="mata_pelajaran[]" required value="<?= $key['mata_pelajaran']; ?>">
                    </div>
                    <div class="col-2">
                      <input type="text" id="input-username" class="form-control" placeholder="Masukan Nilai" name="nilai[]" requiredv value="<?= $key['nilai']; ?>"> 
                    </div>
                  </div>
                <?php }
              ?>
            </div>
            <div class="form-group">
              <a class="btn btn-primary text-white" onclick="tambahMataPelajaran()"><i class="fas fa-plus"></i></a>
              <a class="btn btn-danger text-white" onclick="hapusMataPelajaran()"><i class="fas fa-minus"></i></a>
            </div>
            <button class="btn btn-success" type="submit">Tambahkan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>