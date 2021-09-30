<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile Sekolah</li>
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
            <div class="col-12">
              <h3 class="mb-0">Profile Sekolah</h3>
              <a class="btn btn-success pull-right" href="<?= base_url(); ?>tata_usaha/profile_sekolah/edit">Edit</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <?php
            if ($this->session->pesan) { ?>
            <div class="alert alert-success" role="alert">
              <?= $this->session->pesan; ?>
            </div>
            <?php }
          ?>
          <form action="#" method="post" enctype="multipart/form-data">
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NPSN</label>
                    <p class="form-control"><?= $npsn; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Bentuk Pendidikan</label>
                    <p class="form-control"><?= $bentuk_pendidikan; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Status</label>
                    <p class="form-control"><?= $status; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Kecamatan</label>
                    <p class="form-control"><?= $kecamatan; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Kabupaten</label>
                    <p class="form-control"><?= $kabupaten; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Provinsi</label>
                    <p class="form-control"><?= $provinsi; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Kepala Sekolah</label>
                    <p class="form-control"><?= $kepala_sekolah; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Operator</label>
                    <p class="form-control"><?= $operator; ?></p>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email</label>
                    <p class="form-control"><?= $email; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>