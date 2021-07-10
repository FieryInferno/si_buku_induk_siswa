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
    <div class="col"><div class="col-xl-8 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Input Nilai</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <form action="<?= base_url('tata_usaha/nilai/tambah/' . $id_siswa); ?>" method="post">
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="pl-lg-4">
              <div class="row">
                <?php 
                  foreach ($mata_pelajaran as $key) { ?>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username"><?= $key['nama_mata_pelajaran']; ?></label>
                        <input type="text" id="input-username" class="form-control" placeholder="<?= $key['nama_mata_pelajaran']; ?>" name="<?= $key['id_mata_pelajaran']; ?>" required>
                      </div>
                    </div>
                  <?php }
                ?>
              </div>
              <button class="btn btn-primary" type="submit">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>