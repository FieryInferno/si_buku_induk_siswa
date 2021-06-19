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
          <form action="<?= base_url(); ?>tata_usaha/siswa/tambah" method="post">
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <h3>Data Siswa</h3>
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">No. Induk Siswa</label>
                    <input type="text" id="input-username" class="form-control" placeholder="No. Induk Siswa" name="no_induk" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Siswa</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Siswa" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Alamat</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Alamat" name="alamat" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tempat Lahir</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                    <input type="date" id="input-email" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Username</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Username" name="username" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Password</label>
                    <input type="password" id="input-email" class="form-control" placeholder="Password" name="password" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <h3>Data Orang Tua Siswa</h3>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Orang Tua" name="nama_orang_tua" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tempat Lahir</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir_orang_tua" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                    <input type="date" id="input-email" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir_orang_tua" required>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary pull-right" type="submit">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>