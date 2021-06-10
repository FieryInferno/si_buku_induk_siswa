<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>tata_usaha/kelas">Kelas</a></li>
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
    <div class="col-6">
      <div class="card shadow">
        <div class="card-header bg-transparent border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Tambah Kelas</h3>
            </div>
          </div>
        </div>
        <div class="card-body bg-transparent border-0">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <form action="<?= base_url(); ?>tata_usaha/kelas/tambah" method="post">
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Nama Kelas</label>
                  <input type="text" id="input-username" class="form-control" placeholder="Nama Kelas" name="nama_kelas" required>
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>