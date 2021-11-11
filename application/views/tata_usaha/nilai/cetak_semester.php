<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Tata Usaha</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <div class="main-content" id="panel">
    <img src="<?= base_url(); ?>assets/images/kop.jpeg" width="100%">
    <br>
    <br>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-dark mb-2">Data Nilai</h3>
            </div>
            <div class="card-body bg-transparent border-0">
              <?php
                if ($this->session->sukses) { ?>
                  <div class="alert alert-success" role="alert">
                    <?= $this->session->sukses; ?>
                  </div>
                <?php }
              ?>
              <div class="row">
                <div class="col-6">
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                      <p class="form-control"><?= $siswa['nama']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nama Ibu</label>
                    <div class="col-sm-9">
                      <p class="form-control"><?= $siswa['nama_ibu']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                      <p class="form-control"><?= $siswa['tempat_lahir']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                      <p class="form-control"><?= tgl_indo($siswa['tanggal_lahir']); ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <p class="form-control"><?= $siswa['jenis_kelamin']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Kelas</label>
                    <div class="col-sm-9">
                      <p class="form-control"><?= $siswa['kelas']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content" id="panel">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-dark mb-2">Detail Nilai</h3>
            </div>
            <form>
              <div class="card-body bg-transparent border-0">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Semester</label>
                  <p class="form-control"><?= $nama_semester; ?></p>
                </div>
                <div class="form-group" id="mataPelajaran">
                  <?php
                    foreach ($detail as $key) { ?>
                      <div class="row">
                        <div class="col-8">
                          <p class="form-control"><?= $key['mata_pelajaran']; ?></p>
                        </div>
                        <div class="col-2">
                          <p class="form-control"><?= $key['pengetahuan']; ?></p>
                        </div>
                        <div class="col-2">
                          <p class="form-control"><?= $key['keterampilan']; ?></p>
                        </div>
                      </div>
                    <?php }
                  ?>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/js.cookie.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery-scrollLock.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/argon.js?v=1.2.0"></script>
  <script>
    window.print()
  </script>
</body>

</html>
