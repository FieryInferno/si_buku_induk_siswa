<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>tata_usaha/siswa">Siswa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col"><div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Tambah Siswa</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <form>
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-10">
                  <h2>Data Pribadi</h2>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Siswa</label>
                    <p class="form-control"><?= $nama; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Jenis Kelamin</label>
                    <p class="form-control"><?= $jenis_kelamin; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NISN</label>
                    <p class="form-control"><?= $nisn; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIS</label>
                    <p class="form-control"><?= $nis; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIK</label>
                    <p class="form-control"><?= $nik; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Masuk</label>
                    <p class="form-control"><?= tgl_indo($tanggal_masuk); ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Asal Sekolah</label>
                    <p class="form-control"><?= $asal_sekolah; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">No. Ijazah</label>
                    <p class="form-control"><?= $no_ijazah; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">No. Akte Kelahiran</label>
                    <p class="form-control"><?= $no_akte; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tempat Lahir</label>
                    <p class="form-control"><?= $tempat_lahir; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                    <p class="form-control"><?= tgl_indo($tanggal_lahir); ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Alamat</label>
                    <p class="form-control"><?= $alamat; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Anak Ke-</label>
                    <p class="form-control"><?= $anak_ke; ?></p>
                  </div>

                  <h2>Data Ayah Kandung</h2>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Ayah Kandung</label>
                    <p class="form-control"><?= $nama_ayah; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIK Ayah</label>
                    <p class="form-control"><?= $nik_ayah; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir Ayah</label>
                    <p class="form-control"><?= tgl_indo($tanggal_lahir_ayah); ?></p>
                  </div>
                  
                  <h2>Data Ibu Kandung</h2>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Ibu Kandung</label>
                    <p class="form-control"><?= $nama_ibu; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIK Ibu</label>
                    <p class="form-control"><?= $nik_ibu; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir Ibu</label>
                    <p class="form-control"><?= tgl_indo($tanggal_lahir_ibu); ?></p>
                  </div>
                </div>
                <div class="col-lg-2">
                  <img src="<?= base_url('assets/images/' . $foto); ?>" alt="" width="100%" class="img-preview">
                </div>
              </div>
              <!-- Button trigger modal -->
              <a href="<?= base_url(); ?>tata_usaha/siswa" class="btn btn-primary pull-right">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>