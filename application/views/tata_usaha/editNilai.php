<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>tata_usaha/nilai">Nilai</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col"><div class="col-xl-8 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Edit Siswa</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <form action="<?= base_url('tata_usaha/nilai/edit/' . $id_siswa); ?>" method="post">
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Pendidikan Agama</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Nilai Pendidikan Agama" name="pendidikan_agama" required value="<?= $pendidikan_agama; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Pendidikan Kewarganegaraan</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Nilai Pendidikan Kewarganegaraan" name="pkn" required value="<?= $pkn; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Bahasa Indonesia</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Nilai Bahasa Indonesia" name="bahasa_indonesia" required value="<?= $bahasa_indonesia; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Matematika Wajib</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Nilai Matematika Wajib" name="matematika_wajib" required value="<?= $matematika; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Sejarah Indonesia</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Nilai Sejarah Indonesia" name="sejarah_indonesia" required value="<?= $sejarah_indonesia; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Bahasa Inggris</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Nilai Bahasa Inggris" name="bahasa_inggris" required value="<?= $bahasa_inggris; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Seni Budaya</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Nilai Seni Budaya" name="seni_budaya" required value="<?= $seni_budaya; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Pendidikan Jasmani dan Kesehatan</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Nilai Pendidikan Jasmani dan Kesehatan" name="penjaskes" required value="<?= $penjaskes; ?>">
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>