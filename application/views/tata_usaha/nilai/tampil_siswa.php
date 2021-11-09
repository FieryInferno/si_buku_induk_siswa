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
<div class="container-fluid mt-6">
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
                  <p class="form-control"><?= $nama; ?></p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Nama Ibu</label>
                <div class="col-sm-9">
                  <p class="form-control"><?= $nama_ibu; ?></p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Tempat Lahir</label>
                <div class="col-sm-9">
                  <p class="form-control"><?= $tempat_lahir; ?></p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                  <p class="form-control"><?= tgl_indo($tanggal_lahir); ?></p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                  <p class="form-control"><?= $jenis_kelamin; ?></p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Kelas</label>
                <div class="col-sm-9">
                  <p class="form-control"><?= $kelas; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header bg-transparent border-0">
          <a href="<?= base_url('tata_usaha/nilai/tambah_semester?nisn=' . $this->input->get('nisn')); ?>" class="btn btn-primary">Tambah Semester</a>
        </div>
        <div class="card-body bg-transparent border-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Semester</th>
                  <th scope="col">Jumlah Mata Pelajaran</th>
                  <th scope="col">Rata - Rata Pengetahuan</th>
                  <th scope="col">Rata - Rata Keterampilan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  $no = 1;
                  foreach ($nilai as $key) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $key['nama_semester']; ?></td>
                      <td><?= $key['jumlah_mata_pelajaran']; ?></td>
                      <td><?= round($key['rata_pengetahuan'], 1); ?></td>
                      <td><?= round($key['rata_keterampilan'], 1); ?></td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aksi
                          </button>
                          <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Detail</a>
                            <a href="<?= base_url('tata_usaha/nilai/edit_semester?nisn=' . $this->input->get('nisn')); ?>" class="dropdown-item">Edit</a>
                            <!-- Button trigger modal -->
                            <a href="<?= base_url('tata_usaha/nilai/hapus_semester?nisn=' . $this->input->get('nisn')); ?>" class="dropdown-item">Hapus</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
